<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function upload()
    {
        return view('doc.formupload');
    }
}
