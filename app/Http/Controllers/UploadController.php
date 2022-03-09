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
		$tmp=Resep::find($request->image);
		$tmp->image=$file->getClientOriginalName();
		$tujuan_upload = 'gambar/'.$tmp->id;
		$tmp->save();
		$file->move($tujuan_upload,$file->getClientOriginalName());
		return redirect("resep_saya");
	}
}
