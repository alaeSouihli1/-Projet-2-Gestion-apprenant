<?php

namespace App\Http\Controllers;
use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
   
   
    public function create($promotion_id)
    {
        
        return view('apprenants.create',["promotion_id" => $promotion_id]);
    }
    
    public function store(Request $request)
    {
        $apprenant=new Apprenant();
        $apprenant->name=$request->input('name');
        $apprenant->lastname=$request->input('lastname');
        $apprenant->email=$request->input('email');
        $apprenant->promotion_id=$request->input('promotion_id');

        $apprenant->save();

        return redirect()->route('promotions.edit',$apprenant->promotion_id);
    }
   
 } 
