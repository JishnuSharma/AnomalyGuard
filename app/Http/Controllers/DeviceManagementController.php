<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceManagementController extends Controller
{
    //
    public function dispayDevices()
    {
        $device_data = Device::where('user_id',auth()->user()->id)->get();

        return view('dashboard',compact('device_data'));
    }


    public function displayDeviceFiles()
    {
        return view('uploadedfiles');
    }

    public function displayAnalysisPanel()
    {
        return view('analyzeplatform');
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
}
