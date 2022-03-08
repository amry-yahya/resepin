<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //
    public function upload($id){
		$resep=Resep::find($id);
		return view('upload',['resep'=>$resep]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required'
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
		echo 'File Size: '.$file->getSize();
		echo '<br>';
		echo 'File Mime Type: '.$file->getMimeType();
		echo '<br>';
		$tmp=Resep::find($request->image);
		$tmp->image=$file->getClientOriginalName();
		$tmp->save();
		$tujuan_upload = 'gambar';
		$file->move($tujuan_upload,$file->getClientOriginalName());
		return redirect("resep");
	}
}
