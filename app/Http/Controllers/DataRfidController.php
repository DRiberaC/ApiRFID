<?php

namespace App\Http\Controllers;

use App\Models\DataRfid;
use Illuminate\Http\Request;

class DataRfidController extends Controller
{
    function input(Request $request)
    {
        DataRfid::create([
            'alldata' => 'recibiendo...'
        ]);

        DataRfid::create([
            'alldata' => $request->getContent()
        ]);
        return response()->json([
            'message' => 'success'
        ]);
    }
}
