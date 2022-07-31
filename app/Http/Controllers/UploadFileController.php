<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;

class UploadFileController extends Controller
{
    public function UploadFile(){
        return view('UploadFiles');
    }
    public function UploadedDone(Request $request){
        $path = 'uploads/';
        $newname = Helper::renameFile($path, $request->file('myup')->getClientoriginalName());
        $upload = $request->myup->move(public_path($path), $newname);
        if($upload){
            echo 'File has been successfuly uploaded';
        }else{
            echo 'Something went wrong';
        }
    }
}
