<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    function category(){
        $categories  = Category::latest()->get();
        
      return view('backend.category' , compact('categories'));
    }

    function categoryInsert(Request $request){
          $category = new Category();
          $category->categoryName= $request->category;
          $category->category_slug = Str::slug($request->category_slug);
          $category ->save();
          return back();
    }

    //edit

    function categoryEdit($id){
      $categories  = Category::latest()->get();
      $findCategory = Category::find($id);
      // dd($findCategory);
      return view('backend.category',compact('categories','findCategory'));
    }


    //update

    function categoryUpdate(Request $request,$id){
         $updateCategory = Category::find($id);
         $updateCategory->categoryName = $request->category;
         $updateCategory->category_slug = Str::slug($request->category_slug);
         $updateCategory->save();
         return back();
        //  dd($updateCategory);
    }

    //delete

    function categoryDelete($id){
       Category::find($id)->delete();
       return back();
    
  
    }
}
