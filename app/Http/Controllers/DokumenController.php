<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function uploadform()
    {
        return view('doc.formupload');
    }

    // submit
    public function upload(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'kategori' => 'required|numeric',
            'files[*]' => 'mimes:pdf|max:10000',
        ]);

        $data = new Dokumen();
        // dd($request->file('docs'));
        foreach ($request->docs as $key => $item) {
            $data->name = $request->name;
            $data->kategoriId = $request->kategori;
            $data->save(); // save dulu biar dapet id

            $filename = $data->id . '.' . $item->getClientOriginalExtension();
            $path = $item->storeAs('documents', $filename);
            $data->files = $path;
            $data->save(); // save lagi biar path nya kesimpen
        }

        return redirect()->back()->with(['msg' => 'Data Berhasil disimpan']);
    }
}
