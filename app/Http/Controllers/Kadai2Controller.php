<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kadai2Controller extends Controller
{
    public function judgment($player, $cpu){
        if($player==='グー'){
            switch($cpu){
                case 0:return 'あいこ';break;
                case 1:return 'かち';break;
                case 2:return 'まけ';break;
            }
        }else if($player==='チョキ'){
            switch($cpu){
                case 0:return 'まけ';break;
                case 1:return 'あいこ';break;
                case 2:return 'かち';break;
            }
        }else if($player==='パー'){
            switch($cpu){
                case 0:return 'かち';break;
                case 1:return 'まけ';break;
                case 2:return 'あいこ';break;
            }
        }else{
            return 'ノーカウント';
        }
    }

    public function index(){
        return view('kadai.kadai2');
    }

    public function jyanken(Request $request){
        $player = $request->player;
        $cpu = rand(0,2);
        $request->session()->push('result',$this->judgment($player,$cpu));
        return view('kadai.kadai2');
    }

}