<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Menu;
use App\Model\News;
use Illuminate\Support\Facades\Auth;
use App\Model\Log;
use App\Model\Service;
use App\Model\Product;

class MenuController extends Controller
{
    public function getListMenu(Request $req)
    {
        $menu = Menu::where(['status' => 1, 'menu_id' => NULL])->get();
        $service = Service::where('status', 1)->get();
        $product = Product::where('status', 1)->get();
        return view('System.Menu.ListMenu', compact('menu', 'service', 'product'));
    }
    public function postAddMenu(Request $req){
        $arr_insert = [
            'name' => $req->name,
            'service_id' => $req->service,
            'product_id' => $req->product,
            'href' => $req->href,
            'menu_id' => $req->menu,
            'status' => 1
        ];
        $inser =
    }
    public function postEditMenu(Request $request)
    {
        Menu::truncate();
        $data_json_menu = $request->input('data_json_menu');
        $menu = json_decode($data_json_menu);
        foreach($menu as $item)
        {
            $menu_insert = new Menu;
            $menu_insert->name = $item->name;
            if($item->service_id != ''){
                $menu_insert->service_id = $item->service_id;
            }
            if($item->product_id != ''){
                $menu_insert->product_id = $item->product_id;
            }
            if($item->url != ''){
                $menu_insert->href = $item->url;
            }
            $menu_insert->save();
            if(isset($item->children))
            {
                foreach($item->children as $child)
                {
                    $menu_child_insert = new Menu;
                    $menu_child_insert->name = $child->name;
                    if($child->service_id != ''){
                        $menu_child_insert->service_id = $child->service_id;
                    }
                    if($child->product_id != ''){
                        $menu_child_insert->product_id = $child->product_id;
                    }
                    if($child->url != ''){
                        $menu_child_insert->href = $child->url;
                    }
                    $menu_child_insert->menu_id = $menu_insert->id;
                    $menu_child_insert->save();
                }
            }
        }
        $user = Auth::user();
        $action = 17;
        $comment = 'Update Menu by ID: '.$user->id;
        Log::insertLog($user->id, $action, $comment);
        echo true;
    }
}
