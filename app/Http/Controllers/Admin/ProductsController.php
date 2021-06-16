<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
// use Intervention\Image\ImageManagerStatic as Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index' , ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create' , compact('categories'));
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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required|integer|min:1',
        ]);
        //Intervention Image
        if($request->hasFile('product_img')){
            $image = Image::make(request('product_img'))->resize(550,750); 
    //          // Get filename with extension
    //         $filenameWithExt = $image->getClientOriginalName(); 
    //         // Get file path
    //   $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    //   // Remove unwanted characters
    //   $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
    //   $filename = preg_replace("/\s+/", '-', $filename);
        // Get the original image extension
        // $extension = $image->getClientOriginalExtension();
        $extension = $request->file('product_img')->getClientOriginalExtension();
        // Create unique file name
        $fullImage = time().".".$extension;
        $image->save(storage_path('app/public/').$fullImage);

    }else{
        $fullImage = ' ';
    }


                       
        $product = new Product;
        $product->product_name = $request->input('name');
        $product->product_desc = $request->input('description');
        $product->price = $request->input('price');
        $product->slug = $request->input('name');
        $product->image = $fullImage;
        $product->category_id = $request->input('category_id');

        

        if($product->save()){
            return redirect()->route('products.index');
        }
        else {
            return redirect()->back();
        }
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $slug)    
    {
        $categories = Category::all();
        $products = Product::where('slug',$slug)->firstorFail();
        return view('admin.products.edit' , compact('products' ,'categories'))  ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required|integer|min:1',
        ]);
        $products = Product::where('slug',$slug)->firstorFail();
        $products->product_name = $request->input('name');
        $products->product_desc = $request->input('description');
        $products->price = $request->input('price');
        $products->slug = $request->input('name');
        $products->category_id = $request->input('category_id');
        

        if($products->save()) return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products= Product::find($id)->delete();
        return redirect()->route('products.index');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
