<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\NoticiaFactory;

class NoticiaController extends Controller
{
    //


    public function index()
    {
        $noticias = NoticiaFactory::generarNoticias(30);
        return view('backend.noticias.index', compact('noticias'));
    }

    public function show($id){
        $noticia = (object) array(
            "titulo" => "El mejor del mundo",
            "cuerpo" => "Se termino el debate",
            "imagen" => "https://people.com/thmb/E2kiLjE9bmFgnx9TiMYhq-OVOuQ=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(999x438:1001x440):format(webp)/lionel-messi-most-liked-instagram-picute-122222-2e46f8ce2f8444948fce28f2c84c72f2.jpg",
            "id"=>$id
        );
        return view('backend.noticias.show', compact('noticia'));
    }
}
   