<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\DeviceFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DeviceManagementController extends Controller
{
    //
    public function dispayDevices()
    {
        $device_data = Device::where('user_id',auth()->user()->id)->get();

        return view('dashboard',compact('device_data'));
    }


    public function displayDeviceFiles($id)
    {
        $files_data = DeviceFile::where('user_id',auth()->user()->id)->where('device_id',$id)->get();
        $device_id = $id;

        return view('uploadedfiles',compact('files_data','device_id'));
    }

    public function displayAlgorithmDetails()
    {
        return view('aboutalgorithm');
    }

    // AJAX REQUEST

    public function getDevice(Request $request)
    {
        $response_data = Device::where('id',$request->id)->where('user_id',auth()->user()->id)->first();

        return response()->json($response_data);
    }

    public function createDevice(Request $request)
    {
        try 
        {
            Device::create([
                'user_id' => auth()->user()->id,
                'device_id' => $request->device_id,
                'device_name' => $request->device_name,
                'device_type' => $request->devicetype,
                'data_type' => $request->datatype,
                'added_on' => $request->added_on,
            ]); 

            $responseData = [
                'success' => true,
                'message' => 'Device created successfully'
            ];

            return response()->json($responseData);
        } 
        catch (\Throwable $th) 
        {
            return response()->json(['success' => false, 'message' => $th->getMessage()], 500);
        }
    }

    public function updateDevice(Request $request)
    {
        try 
        {   
            $device = Device::find($request->id);

            $device->update([
                'device_id' => $request->device_id,
                'device_name' => $request->device_name,
                'device_type' => $request->devicetype,
                'data_type' => $request->datatype,
                'added_on' => $request->added_on,
            ]);

            $responseData = [
                'success' => true,
                'message' => 'Device updated successfully'
            ];

            return response()->json($responseData);
        } 
        catch (\Throwable $th) 
        {
            return response()->json(['success' => false, 'message' => $th->getMessage()], 500);
        }
    }

    public function saveFiles(Request $request)
    {
        if ($request->hasFile('file')) 
        {
            $allowedExtensions = ['csv', 'xlsx'];
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            if (!in_array($extension, $allowedExtensions)) 
            {
                return response()->json(['error' => 'Only CSV or Excel (XLSX) files are allowed.'], 400);
            }

            $userId = auth()->user()->id; 
            $directory = 'uploads/' . $userId;

            if (!Storage::exists($directory)) 
            {
                Storage::makeDirectory($directory);
            }

            $originalFilename = $file->getClientOriginalName();
            $filePath = $file->storeAs($directory, $originalFilename);

            $fileModel = new DeviceFile();
            $fileModel->user_id = $userId;
            $fileModel->device_id = $request->device_id;
            $fileModel->file_name = $originalFilename;
            $fileModel->file_path = $filePath;
            $fileModel->save();
            
            return response()->json(['message' => 'File uploaded successfully', 'file_path' => $filePath]);
        }
    }

    public function deleteFile($fileId)
    {
        $file = DeviceFile::find($fileId);

        if ($file) 
        {
            if (Storage::disk('local')->exists($file->file_path)) 
            {
                Storage::disk('local')->delete($file->file_path);
            }
            
            $file->delete();

            return response()->json(['message' => 'File deleted successfully']);
        } 
        else 
        {
            return response()->json(['error' => 'File not found'], 404);
        }
    }

    public function displayAnalysisPanel(Request $request)
    {
        $file_id = $request->file_id;
        $device_id = $request->device_id;

        $files = DeviceFile::where('user_id',auth()->user()->id)->where('device_id',$device_id)->get();

        return view('analyzeplatform',compact('files','file_id'));
    }

    public function getRequestFile($file_id)
    {
        $file = DeviceFile::find($file_id);

        if (!$file) {
            return response()->json(['error' => 'File not found'], 404);
        }

        $file_path = storage_path('app/' . $file->file_path);

        if (!file_exists($file_path)) {
            return response()->json(['error' => 'File not found in storage'], 404);
        }

        return response()->download($file_path, basename($file_path));
    }
}
