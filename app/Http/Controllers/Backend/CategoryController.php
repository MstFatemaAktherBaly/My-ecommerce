<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\SlugGenerator;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{



    function category(){
        $categories  = Category::with('subCategories')->latest()->paginate(30);

        $perentCategories = $categories->where('category_id', null)->flatten();

        // dd($categories);
        
         return view('backend.category' , compact('categories', 'perentCategories'));
      
    }
 
    use SlugGenerator;

    function categoryInsert(Request $request){
        
          $slug = $this->createSlug(Category::class, $request->category);
          $category = new Category();
          $category->categoryName= $request->category;
          $category->category_id= $request->category_id;
          $category->category_slug = $slug;
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
         $updateCategory->category_slug = Str::slug($request->category);
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
