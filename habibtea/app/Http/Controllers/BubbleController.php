<?php

namespace App\Http\Controllers;


use App\Models\Bubble;
use Illuminate\Http\Request;



class BubbleController extends Controller
{

    public function store(Request $request)
    {
        // on met tout dans res
        $res = $request->all();

        $bubble = new bubble();
        $bubble->bubble_name = $res['bubble_name'];
        $bubble->quantity = $res['quantity']; // quantity en marron c'est l'id dans le html
        $bubble->tea_type = $res['tea_type'];
        $bubble->sugar_level = $res['sugar_level'];
        $bubble->toppings = $res['toppings'];
        $bubble->price = $res['price'];
        $bubble->temper = $res['temper'];
        $bubble->size = $res['size'];
        $bubble->user_id = 1;

        $bubble->save();


        return view('order');
    }

    public function show(Request $request)
    {
        return view('order');
    }
}
