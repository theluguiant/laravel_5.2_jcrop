<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CorteController extends Controller
{
    public function corte(){
         return View('cortes.cortes');
    }

    public function saveimage(Request $request){
    	if($request->isMethod('post'))
		{
			$targ_w = $targ_h = 150; // dimensiones para el resize
			$jpeg_quality = 90; //  calidad de la imagen 

			$src = url('/').'/demos/demo_files/pool.jpg'; //origen de la imagen 
			$img_r = imagecreatefromjpeg($src);
			$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

			imagecopyresampled($dst_r,$img_r,0,0,$request->x,$request->y,$targ_w,$targ_h,$request->w,$request->h);

			header('Content-type: image/jpeg');
			imagejpeg($dst_r,null,$jpeg_quality);
		}
    }
}
