<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Service;
use App\Model\Log;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;

class ProductController extends Controller
{
    public function getListProduct (Request $req) {
        $product = Product::where('status', 1)->orderBy('id', 'desc');
        $service = Service::where('status', 1)->get();
        if($req->id_search){
            $product->where('id', $req->id_search);
        }
        if($req->name_search){
            $product->where('name', 'like', '%'.$req->name_search.'%');
        }
        if($req->service_search != 0){
            $product->where('service_id', $req->service_search);
        }
        $product = $product->paginate(20);
        return view('System.Product.ListProduct', compact('product', 'service'));
    }

    public function postAddProduct(Request $req) {
        $user = Auth::user();
        $this->validate(
            $req,
            [
                'name' => 'required|min:3',
                'content' => 'required',
                'alt_image' => 'required',
                'summary_content' => 'required',
            ]
        );
        $product = new Product;
        $product->name = $req->name;
        $product->slug = changeTitle($req->name);
        $product->image = $req->image;
        $product->alt = $req->alt_image;
        $product->content = $req->content;
        $product->summary_content = $req->summary_content;
        $product->service_id = $req->service;
        $product->save();
        if($product){
            $action = 4;
            $comment = 'Add Product ID: '.$product->id.' by ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
        }
        return redirect()->route('system.product.getListProduct')->with(['flash_level' => 'success', 'flash_message' => 'Add product sucessfully!']);
    }

    public function getEditProduct($id) {
        $product = Product::find($id);
        $service = Service::where('status', 1)->get();
        return view('System.Product.EditProduct', compact('product', 'service'));
    }

    public function postEditProduct(Request $req){
        $this->validate(
            $req,
            [
                'name' => 'required|min:3',
                'content' => 'required',
                'alt_image' => 'required',
                'summary_content' => 'required',
            ]
        );
        $id = $req->id;
        $name = $req->name;
        $slug = changeTitle($req->name);
        $image = $req->image;
        $alt = $req->alt_image;
        $content = $req->content;
        $summary_content = $req->summary_content;
        $service_id = $req->service;
        $update_product = Product::where('id', $id)->update(['name' => $name, 'slug' => $slug, 'image' => $image, 'alt' => $alt, 'content' => $content, 'summary_content' => $summary_content, 'service_id' => $service_id]);
        if($update_product){
            $user = Auth::user();
            $action = 12;
            $comment = 'Update product ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
           return redirect()->route('system.product.getListProduct')->with(['flash_level' => 'success', 'flash_message' => 'Edit product successfully!']);
        }else{
            return redirect()->back()->with(['flash_level' => 'error', 'flash_message' => 'Edit product error!']);
        }
    }

    public function getDeleteProduct(Request $req){
        $id = $req->id;
        $delete_product = Product::where('id', $id)->update(['status' => 0]);
        if($delete_product){
            $user = Auth::user();
            $action = 11;
            $comment = 'Delete product ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            echo true;
        }else{
            echo false;
        }
    }

}