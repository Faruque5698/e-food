<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Promise\all;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('adminPanel.category.category',[
            'categories'=>$categories
        ]);
    }

    public function add(Request $request){
//        $request->validate( [
//           'category_name' => 'required',
//            'category_image'=>'required|image|mimes:jpg,png,jpeg',
//            'status' => 'required|in:1,0'
//        ]);


            $cat = new Category();
            $catImage = $request->file('category_image');
            $imageName = $catImage->getClientOriginalName();
            $directory = 'admin/image/category/';
            $imageUrl=$directory.$imageName;
            $catImage->move($directory,$imageName);

            $cat->category_name = $request->category_name;
            $cat->category_image = $imageUrl;

            $cat->save();

            return back()->with('message','Category Added');


    }

    public function edit($id){
        $cat = Category::find($id);
        return response()->json([
            'cat' => $cat
        ]);
    }





}
