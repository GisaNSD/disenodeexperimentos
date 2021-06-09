<?php

namespace App\Http\Controllers;

use App\Models\Imagenes;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function index()
    {
        return view('index');
    }

  
    public function group1($group)
    {
        $images= Imagenes::inRandomOrder()->where('group', $group)->get();
        
        $fase = "fase 1";

        return view('faseUno', ['images' => $images]);
    }

    // ********     TESTING GROUP 2     **************** //

    public function group2Asc($style)
    {
        $images= Imagenes::where('style', $style)->orderBy('order')->get();
        return view('fase2/faseDosNoInfo', ['images' => $images]);
    }

    
    public function group2AscWithInfo($style)
    {
        $images= Imagenes::where('style', $style)->orderBy('order')->get();
        return view('fase2/faseDos', ['images' => $images]);
    }
  
  
    public function group2Desc($style)
    {
        $images= Imagenes::where('style', $style)->orderByDesc('order')->get();
        return view('fase2/faseDosNoInfoDesc', ['images' => $images]);
    }


    public function group2DescWithInfo($style)
    {
        $images= Imagenes::where('style', $style)->orderByDesc('order')->get();
        return view('fase2/faseDosDesc', ['images' => $images]);
    }
    
    
    //          ************* RESULT ****************       //


    public function fase1(Request $request)
    {
        $finalNumber= 0;
        $number= $request->all();

     
        foreach ($number as $point){
            $finalNumber += floatval($point);
        }

        $finalNumber= round($finalNumber/12, 2);
        return view('results', ['finalNumber' => $finalNumber]);
    }

    public function fase2Desc(Request $request)
    {
        $finalNumber= 0;
        $count= 0;
        $number= $request->all();
        $goodPaints= 0;
        $badPaints= 0;

        foreach($number as $point){
            
            if($count <= 4){
                $goodPaints += floatval($point);
                $count++;
            }
            else{
                $badPaints += floatval($point);
                $count++;
            }
        }

        $finalNumber = round(($goodPaints - $badPaints) / 2, 2);

        return view('results', ['finalNumber' =>$finalNumber]);
    }

    public function fase2Asc(Request $request)
    {
        $finalNumber= 0;
        $count= 0;
        $number= $request->all();
        $goodPaints= 0;
        $badPaints= 0;

        foreach($number as $point){
            
            if($count <= 4){
                $badPaints += floatval($point);
                $count++;
            }
            else{
                $goodPaints += floatval($point);
                $count++;
            }
        }

        $finalNumber = round(($goodPaints - $badPaints) / 2, 2);

        return view('results', ['finalNumber' =>$finalNumber]);
    }

  
}