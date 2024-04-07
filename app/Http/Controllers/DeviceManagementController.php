<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviceManagementController extends Controller
{
    //
    public function displayDeviceFiles()
    {
        return view('uploadedfiles');
    }

    public function displayAnalysisPanel()
    {
        return view('analyzeplatform');
    }
}
