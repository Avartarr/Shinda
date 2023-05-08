<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Shop;
use Shmop;

class ShopController extends Controller
{
    // public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }


    function index()
    {
   return view("Shop.index");
    }

    function Lashes(){
        $getPro = Admin::Where("category", "lash")->get();
        $featured = Admin::Where("standard", "Featured")->get();
        return view("Shop.Lashes",["getPro"=>$getPro, 'featured' =>$featured]);
    }

    function nails(){
        $getPro = Admin::Where("category", "nails")->get();
        $featured = Admin::Where("standard", "Featured")->get();
        return view("Shop.nails",["getPro"=>$getPro, 'featured' =>$featured]);
    }

    function average(){
        $getPro = Admin::Where("standard", "average")->get();
        $featured = Admin::Where("standard", "Featured")->get();
        return view("Shop.average",["getPro"=>$getPro, 'featured' =>$featured]);
    }


    function standard(){
        $getPro = Admin::Where("standard", "standard")->get();
        $featured = Admin::Where("standard", "Featured")->get();
        return view("Shop.standard",["getPro"=>$getPro, 'featured' =>$featured]);
    }


    function premium(){
        $getPro = Admin::Where("standard", "premium")->get();
        $featured = Admin::Where("standard", "Featured")->get();
        return view("Shop.premium",["getPro"=>$getPro, 'featured' =>$featured]);
    }


    function homepage()
    {
   return view("Shop.homePage");
    }
    function shop(){
        $getPro = Admin::get();
        $featured = Admin::Where("standard", "Featured")->get();
        return view("Shop.shop",["getPro"=>$getPro, 'featured' =>$featured]);
    }

    function addproduct()
    {
       $getPro = Admin::get();
       return view("Shop.addProduct",["getPro"=>$getPro]);
    }

    function cart()
    {
        $cartItem = Cart::get();
        return view("Shop.cart",['cartItem'=>$cartItem]);
    }



    function store()
    {
        $input = request()->validate([
            "frontimage"=>"required",
            "prodName"=>"required",
            "qty"=>"required",
            "category"=>"required",
            "Oldprice"=>"required",
            "price"=>"required",
            "standard"=>"required",
            "%"=>"required",
            "sellingStatus" =>"required"

        ]);
        if(request("frontimage")){
            $input["frontimage"] = request("frontimage")->store("Admin");
        }
        Admin::create($input);
        return back();
    }
}
