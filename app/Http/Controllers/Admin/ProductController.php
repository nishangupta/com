<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(50);
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::allCategoryNames();
        return view('admin.product.create')->with(
            [
                'categories' => $categories,
            ]
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4',
            'description' => 'sometimes|min:3',
            'price' => 'required',
            'subCategory_id'=>'required',
            'status'=>'required'
        ]);

        DB::transaction(function()use($request){
            $product = Product::create([
                'title'=>$request->title,
                'description'=>$request->description,
                'slug'=>Str::slug($request->title),
                'product_code'=>Str::random(8),
                'price'=>$request->price,
                'discount'=>$request->discount,
                'brand'=>$request->brand??'',
                'warranty'=>$request->warranty?? null,
                'subCategory_id'=>$request->subCategory_id,
                'user_id'=>auth()->id(),
                'status'=>$request->status,
            ]);
            

            $attributes = json_decode($request->attr);
            // dd($attributes);

            foreach($attributes as $attr){
                $product->attributes()->create([
                    'uid'=>$attr->uid,
                    'type'=>$attr->type,
                    'attribute'=>$attr->attribute,
                    'stock'=>$attr->stock,
                    'live'=>$attr->live,
                ]);
            }

        });

        return redirect(route('product.index'))->with('success','Product created');
    }

    public function edit(Product $product)
    {
        $categories = Category::allCategoryNames();
        return view('admin.product.edit')->with([
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|min:4',
            'description' => 'sometimes|min:3',
            'price' => 'required',
            'subCategory_id'=>'required',
            'status'=>'required'
        ]);

        
        $product->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'slug'=>Str::slug($request->title),
            'price'=>$request->price,
            'discount'=>$request->discount,
            'brand'=>$request->brand??null,
            'warranty'=>$request->warranty?? null,
            'subCategory_id'=>$request->subCategory_id,
            'user_id'=>auth()->id(),
            'status'=>$request->status,
            ]);
            
        //delete the relationships
        foreach($product->attributes as $item){
            $item->delete();
        }
            
        $attributes = json_decode($request->attr);

        foreach($attributes as $attr){
            $product->attributes()->create([
                'uid'=>$attr->uid,
                'type'=>$attr->type,
                'attribute'=>$attr->attribute,
                'stock'=>$attr->stock,
                'live'=>$attr->live,
            ]);
        }

        return redirect(route('product.index'))->with('success','Product updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success','Product deleted');
    }
}
