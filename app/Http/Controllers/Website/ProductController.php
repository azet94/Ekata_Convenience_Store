<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Model\BannerImage;
use App\Model\Category;
use App\Model\Product;
use App\Model\ReviewImage;
use App\Model\Service;
use App\Model\WebsiteDetail;
use http\Env\Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $getProduct = Product::with(array('category', 'brand', 'tags', 'image' => function ($query) {
            return $query->take(1);
        }))->get();
        $discountedProducts = Product::with(array('category', 'brand', 'tags', 'image'))->where('discount', '>', 0)->limit(4)->latest()->get();
        $latestProduct = Product::with(array('category', 'brand', 'tags', 'image'))->limit(10)->latest()->get();
        $bannerImage = BannerImage::where('active', 1)->get();
        $reviewImage = ReviewImage::where('active', 1)->get();
        $getWebsiteDetail = WebsiteDetail::all();
        $getcategory = Category::where('parent_id','=',NULL)->with('product','images')->get();
        $bestSelling = Product::inRandomOrder()->limit(3)->where('discount', '=', NULL)->with(array('category', 'brand', 'tags', 'image'))->get();

        return view('website.index',
            [
                'getProduct' => $getProduct,
                'discountedProducts' => $discountedProducts,
                'latestProduct' => $latestProduct,
                'bannerImage' => $bannerImage,
                'getCategory' => $getcategory,
                'bestSelling' =>$bestSelling,
                'reviewImage' =>$reviewImage,
                'websiteDetail' =>$getWebsiteDetail,
            ]);
    }
    public function showCategory($id){
        $getcategory = Category::where('parent_id','=',NULL)->with('product','parent','children')->get();
        $getsingleCategory = Category::where('id',$id)->with('product','parent','children')->get();
        $getWebsiteDetail = WebsiteDetail::all();
        //dd($getsingleCategory);
        return view('website.category',
            [
                'getsingleCategory' => $getsingleCategory,
                'getCategory' => $getcategory,
                'websiteDetail' =>$getWebsiteDetail



            ]);
    }
    public function showMainCategory($id){
        $getcategory = Category::where('parent_id','=',NULL)->with('product','parent','children')->get();
        $getsingleCategory = Category::where('id',$id)->with('product','parent','children')->get();
        $getWebsiteDetail = WebsiteDetail::all();
        //dd($getsingleCategory);
        return view('website.mainCategory',
            [
                'getsingleCategory' => $getsingleCategory,
                'getCategory' => $getcategory,
                'websiteDetail' =>$getWebsiteDetail


            ]);
    }
    public function SingleProductPage($id){
        //dd($id);
        $getcategory = Category::where('parent_id','=',NULL)->with('product','parent','children')->get();
        $singleproduct = Product::where('id',$id)->with(array('category', 'brand', 'tags', 'image'))->get();
        //dd($singleproduct[0]->category->id);
        $category = Category::where('id',$singleproduct[0]->category->id)->with('product','parent','children')->get();
        $getWebsiteDetail = WebsiteDetail::all();
        return view('website.singleProduct',
            [
                'getCategory' => $getcategory,
                'singleProduct' => $singleproduct,
                'websiteDetail' =>$getWebsiteDetail,
                'category' =>$category

            ]);
    }
    public function showProducts(Request $request){
        $products=Product::where('product_name','LIKE','%'.$request->search."%")->
        with(array('category', 'brand', 'tags', 'image'))->get();
        $getcategory = Category::where('parent_id','=',NULL)->with('product','parent','children')->get();
        $getWebsiteDetail = WebsiteDetail::all();
        $getproduct = Product::inRandomOrder()->where('discount', '=', NULL)->with(array('category', 'brand', 'tags', 'image'))->get();
        return view('website.products',
            [
                'products' => $products,
                'getproduct' => $getproduct,
                'getCategory' => $getcategory,
                'websiteDetail' =>$getWebsiteDetail
            ]);
    }
    public function service(){
        $Service = Service::all();
        $getWebsiteDetail = WebsiteDetail::all();
        return view('website.services',[
           'services' => $Service,
            'websiteDetail' =>$getWebsiteDetail

        ]);
    }
    public function serviceDetails($id){
        $Service = Service::where('id',$id)->get();
        $getWebsiteDetail = WebsiteDetail::all();
        return view('website.servicedetails',[
            'services' => $Service,
            'websiteDetail' =>$getWebsiteDetail

        ]);
    }
}
