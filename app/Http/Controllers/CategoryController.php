<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // get all the sharks
        $category = Category::all();

        // return view('category.index', ['category'=>$category]);
        // load the view and pass the sharks
        return view('category.index',compact('category'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (app/views/category/create.blade.php)
       
        return view('category.create');
      
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_image' => 'required',
            
        ]);
        $category = new Category;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        if ($image = $request->file('meta_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $category->meta_image = $profileImage;
       }
        // $category->meta_image = $request->meta_image;
       $category->save();  
       return redirect('category')->with('status', 'Category Added !!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the category
        $category = Category::find($id);

        // show the view and pass the category to it
        return view('category.index',compact('category'));
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          // get the category
          $category = Category::find($id);

          // show the edit form and pass the category
          return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_image' => 'required',
            
        ]);
        $category = Category::find($id);
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        if ($image = $request->file('meta_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $category->image = $profileImage;
       
        }
        else{
                 unset($category->image);
             }
       $category->save();  
    
    return redirect('/category')->with('status', 'Category Updated !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
    return redirect('/category')->with('status', 'Category Deleted !!');
    }
    
}
