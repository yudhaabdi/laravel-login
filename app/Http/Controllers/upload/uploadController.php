<?php

namespace App\Http\Controllers\upload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function upload()
    {
        return view ('upload_data/upload');
    }

    public function proses_upload(Request $request)
    {
        $this -> validate ($request, [ 
            'file' => 'required',
            'keterangan' => 'required'    
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

                // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

                // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

                // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';

                // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();

                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';

            // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
    }
}
