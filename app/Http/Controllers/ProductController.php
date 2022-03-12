<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // get all the sharks
        $product = Product::all();
        // $product = Product::latest()->paginate(5);
        // return view('product.index', compact('product'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('product.index', ['product'=>$product]);
        // load the view and pass the sharks
        return view('product.index',compact('product'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (app/views/product/create.blade.php)
       
        return view('product.create');
      
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'meta_title' => 'required',
        //      'category_id' => 'required|exists:categories,id',
        //     'price' => 'required',
        //     'discount_percentage' => 'required',
        //     'feature_image' => 'required',
        //     'gallery' => 'required',
        //     'meta_title' => 'required',
        //     'meta_image' => 'required',
            
        // ]);
    

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->discount_percentage = $request->discount_percentage;
        if ($image = $request->file('feature_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $product->feature_image = $profileImage;
       }
       $gallery ='';
      
        if($request->hasfile('gallery'))
         {
            foreach($request->file('gallery') as $file)
            {
                $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $gallery .= $profileImage.',';
            }
           
            $product->gallery = $gallery;
         }
    
       $product->meta_title = $request->meta_title;
       $product->meta_description = $request->meta_description;
       if ($image = $request->file('meta_image')) {
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $product->meta_image = $profileImage;
   }
        
       $product->save();  
   
       return redirect('product')->with('status', 'product Added !!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the product
        $product = Product::find($id);

        // show the view and pass the product to it
        return view('product.index',compact('product'));
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          // get the product
          $product = Product::find($id);

          // show the edit form and pass the product
          return view('product.edit',compact('product'));
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
       
        $product = Product::find($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->discount_percentage = $request->discount_percentage;
        if ($image = $request->file('feature_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $product->feature_image = $profileImage;
       }
       else{
        unset($product->feature_image);
    }
       $gallery ='';
      
        if($request->hasfile('gallery'))
         {
            foreach($request->file('gallery') as $file)
            {
                $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $gallery .= $profileImage.',';
            }
          
           
            $product->gallery = $gallery;
         }
         else{
            unset($product->feature_image);
        }
        return $gallery;
       $product->meta_title = $request->meta_title;
       $product->meta_description = $request->meta_description;
       if ($image = $request->file('meta_image')) {
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $product->meta_image = $profileImage;
   }
   else{
    unset($product->feature_image);
}
        
       $product->save();  
       return redirect('/product')->with('status', 'product Updated !!');

        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'meta_title' => 'required',
        //      'category_id' => 'required|exists:categories,id',
        //     'price' => 'required',
        //     'discount_percentage' => 'required',
        //     'feature_image' => 'required',
        //     'gallery' => 'required',
        //     'meta_title' => 'required',
        //     'meta_image' => 'required',
            
        // ]);
    }
//         $product = Product::find($id);
//         $product->name = $request->name;
//         $product->description = $request->description;
//         $product->category_id = $request->category_id;
//         $product->price = $request->price;
//         $product->discount_percentage = $request->discount_percentage;
//         if ($image = $request->file('feature_image')) {
//             $destinationPath = 'image/';
//             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
//             $image->move($destinationPath, $profileImage);
//             $product->feature_image = $profileImage;
//        }
//        else{
//         unset($product->feature_image);
//     }
//        if ($image = $request->file('gallery')) {
//         $destinationPath = 'image/';
//         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
//         $image->move($destinationPath, $profileImage);
//         $product->gallery = $profileImage;
//    }
//    else{
//     unset($product->gallery);
// }
//        $product->meta_title = $request->meta_title;
//        $product->meta_description = $request->meta_description;
//        if ($image = $request->file('meta_image')) {
//         $destinationPath = 'image/';
//         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
//         $image->move($destinationPath, $profileImage);
//         $product->meta_image = $profileImage;
//    }
//    else{
//     unset($product->meta_image);
// }    
//        $product->save();  
    
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
    return redirect('/product')->with('status', 'product Deleted !!');
    }
    
}
