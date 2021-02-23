<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('public.shop.index');
    }
    
    public function show($id)
    {
        $product = Product::where('id', $id)->with('productImage','category','attributes')->first();
        $product->image = $product->productImage->first();

        $questions = $product->getQuestions()->with('user')->paginate(6);
        $mightAlsoLike = Product::where('id', '!=', $product->id)->inRandomOrder()->with('productImage')->take(6)->get();

        return view('public.shop.show')->with([
            'product' => $product,
            'questions' => $questions,
            'mightAlsoLike' => $mightAlsoLike
        ]);

        return view('public.shop.show');
    }

    public function showById(Product $id){
        return redirect($id->path());
    }

    public function catalog(Request $request)
    {
        //get random sub categories
        $cats = Category::where('is_parent',0)->take(20)->get();

        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                'title',
                'subCategory_id',
                AllowedFilter::scope('min_price'),
                AllowedFilter::scope('max_price'),
            ])
            ->with('productImage')
            ->paginate(20);

        return view('public.shop.catalog')->with([
            'cats' => $cats,
            'products' => $products
        ]);
    }

    public function about(){
        return view('public.shop.about');
    }

    public function contact(){
        return view('public.shop.contact');
    }

    public function terms(){
        return view('public.shop.terms');
    }    
}
