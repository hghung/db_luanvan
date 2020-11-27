<?php

namespace App\Http\Controllers;

use App\Models\db_hinhanh;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    function index()
    {
        return view('dropzone');
    }

    function upload(Request $request)
    {
        $image = $request->file('file');
        foreach($image as $key)
        {   
            $banhbao3 = new db_hinhanh;
            $name = str_random(5)."_".$key->getClientOriginalName();
            $location = 'public/upload/bat-dong-san/';
            $key->move(public_path('/upload/bat-dong-san'), $name);
            $banhbao3->path = $location.$name;
            $banhbao3->save();

        }
        


        
    }

    function fetch()
    {
        $images = \File::allFiles(public_path('/upload/bat-dong-san'));
        $output = '<div class="row">';
        foreach($images as $image)
        {
        $output .= '
        <div class="col-md-2" style="margin-bottom:16px;" align="center">
                    <img src="'.asset('public/images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                    <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
                </div>
        ';
        }
        $output .= '</div>';
        echo $output;
    }

    function delete(Request $request)
    {   
        
        if($request->get('name'))
        {
        \File::delete(public_path('images/' . $request->get('name')));
        }
    }
}
?>