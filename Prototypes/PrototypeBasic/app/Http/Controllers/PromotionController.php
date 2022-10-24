<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
class PromotionController extends Controller
{

    public function index()
    {
        return view('promotions.index',['promotions' => Promotion::all()]);
    }

    public function create()
    {
        return view('promotions.create');
    }


    public function store(Request $request)
    {
        $promotion=new Promotion();
        $promotion->name=$request->input('name');
        $promotion->save();

        return redirect()->route('promotions.index');
    }


    public function show($promotion)
    {
       return view('promotions.show',[ 'promotion' =>Promotion::findOrFail($promotion)]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
