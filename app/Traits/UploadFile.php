<?php

namespace App\Traits;

use PhpParser\Node\Expr\New_;

trait UploadFile{
    public function uploadImage($request,$folder_name,$field_name){
       if($request->hasFile($field_name)){
        $file = $request->$field_name;
        $name = time().$file->getClientOriginalName();
        $file_path = $request->file($field_name)->move('uploads/'.$folder_name,$name);
        $path_name = $file_path->getPathname();
        $dataUpload = $path_name;
        return $dataUpload;
       }
       return null;
    }

    public function uploadImageMutiple($file,$folder_name){
        $name = time().$file->getClientOriginalName();
        $file_path = $file->move('uploads/'.$folder_name,$name);
        $path_name = $file_path->getPathname();
        return $path_name;
    }


}
