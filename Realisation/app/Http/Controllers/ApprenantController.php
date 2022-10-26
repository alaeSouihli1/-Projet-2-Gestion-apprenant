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
    public function edit($id){

        return view('apprenants.edit',['apprenant'=>Apprenant::findOrFail($id)]);
    }
    public function update(request $request, $id){
        $apprenant=Apprenant::findOrFail($id);
        $apprenant->name=strip_tags($request->input('name'));
        $apprenant->lastname=strip_tags($request->input('lastname'));
        $apprenant->email=strip_tags($request->input('email'));
        $apprenant->promotion_id=strip_tags($request->input('promotion_id'));

        $apprenant->save();

        return redirect()->route('promotions.edit', $apprenant->promotion_id);

    }

    public function destroy($id){
        $apprenant=Apprenant::findOrFail($id);
        $apprenant->delete();
        return redirect()->route('promotions.edit', $apprenant->promotion_id);

    }


    public function search1(Request $request){
        $output="";
        $id = $request->PromotionID;
        $apprenants=Apprenant::

        where([
            ['promotion_id','=',$id],
            ['name','Like',$request->search.'%']
        ])->get();

        foreach($apprenants as $apprenant)
        {
            $output.=
            '<tr>
            <td> '.$apprenant->id.' </td>
            <td> '.$apprenant->name.' </td>
            <td> '.$apprenant->lastname.' </td>
            <td> '.$apprenant->email.' </td>
            <td> 
                <a href="'.route('apprenants.edit',$apprenant->id).'" style=" text-decoration: none;
                font-family: 14px;
                color: white;
                padding:7px 20px;
                display: block;
                background-color: #4c74d8;
                float:left;
                // width:50px;
                font-weight: 500;">
                Modifier
                </a>
                <form action="'.route('apprenants.destroy',$apprenant->id).'" method="POST">
                    <input type="hidden" name="_token" value="yb5AihWDKb7pZahkmAzVDUI5s5u0fCXfajDetPDe">
                    <input type="hidden" name="_method" value="DELETE">
                    <input  type="submit" value="Supprimer" style=" background-color: #ff0000; /* Green */
                    border: none;
                    color: white;
                    padding: 7px 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    margin-left:20px;
                    font-size: 16px;"/>
                </form>

        </td>
            </td>
           
            </tr>';
        }
        return response($output);
    }
 } 
