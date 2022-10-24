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
        return view('promotions.edit',['promotion'=>Promotion::findOrFail($id) ]);
    }


    public function update(Request $request, $promotion)
    {
        $toUpdate=Promotion::findOrFail($promotion);
        $toUpdate->name=strip_tags($request->input('name'));
        $toUpdate->save();

        return redirect()->route('promotions.index');
    }


    public function destroy($id)
    {
        $todelete=Promotion::findOrFail($id);
        $todelete->delete();
        return redirect(route('promotions.index'));
    }

    public function search(Request $request){
        if($request->ajax()){
            $output="";
            $promotions=Promotion::where('name','LIKE','%'.$request->search."%")->get();
            if($promotions){
                foreach($promotions as $promotion){
                    $output.='<tr>.
                    <td>'.$promotion->name.'</td>
                    <td>
                        <a href="'.route('promotions.edit',$promotion->id).'">Edit</a>
                        <form action="'.route('promotions.destroy',$promotion->id).'" method="POST">
                        <input type="hidden" name="_token" value="yb5AihWDKb7pZahkmAzVDUI5s5u0fCXfajDetPDe">
                        <input type="hidden" name="_method" value="DELETE">
                        <input  type="submit" value="Delete" />
                    </form>

                    </td>
                    
                    </tr>';
                    
                    // <a href=".">edit</a>
                    // <form action="{{route('promotions.destroy',$promotion->id)}}" method="POST">
                    //     @csrf
                    //     @method('DELETE')
                    //     <input  type="submit" value="Delete" />
                    // </form>
                }
                return Response($output);

            }
        }

    }
}
