<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Extcategoria;
use App\Models\Estatu;
use App\Models\Estado;


class RegistAjaxController extends Controller
{
    //





    public function getmuni(Request $request)
    {
    $id = $request->id;
    $data = municipio::orderBy('id','asc')->where('cod_estado',$id)->get();
    //dd($data)
       return $data;
    }

    public function getparroq(Request $request)
    {
    $id = $request->id;
    $data = parroquia::orderBy('id','asc')->where('cod_municipio',$id)->get();
    //dd($data)
       return $data;
    }

    public function getcateg(Request $request)
    {
    $id = $request->id;
    $data = categoria::orderBy('id','asc')->get();
    //dd($data)
       return $data;
    }

    public function getsubcateg(Request $request)
    {
    $id = $request->id;
    $data = subcategoria::orderBy('id','asc')->where('cod_categ',$id)->get();
    //dd($data)
       return $data;
    }

    public function getextcateg(Request $request)
    {
    $id = $request->id;
    $data = extcategoria::orderBy('id','asc')->where('cod_subcateg',$id)->get();
    //dd($data)
       return $data;
    }

    public function getestatus()
    {
    $data = estatu::orderBy('id','asc')->get();
    //dd($data)
       return $data;
    }

    public function getestado()
    {
    $data = estado::orderBy('id','asc')->get();
    //dd($data)
       return $data;
    }
}
