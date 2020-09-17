<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use Validator;
use App\Model\Contact;
use App\Model\Log;
use App\Model\News;
class HomeController extends Controller
{
	public function getIndex(){
		return view('Home.Index');
    }
    public function getNews(Request $req){
        $data = News::where('menu_id', $req->menu_id)->get();
        return view();
    }
    public function getIndexAdmin(){
		return view('System.Dashboard.Index');
	}

	public function getSolution(){
		return view('Home.Solution');
	}

	public function getProduct(){
		return view('Home.Product');
	}

	public function getNewDetail(){
		return view('Home.NewDetail');
	}

	public function getNew(){
		return view('Home.New');
    }
    public function getBlog(){
		return view('Home.New');
	}

	public function getAppGame(){
		return view('Home.AppGame');
	}
	public function postIndex(Request $req){
		$this->validate($req,[
			'Email' => 'required',
			'Phone' => 'required|numeric',
		],[
			'Email.required' => 'Vui lòng nhập lại tên của bạn!!!',
			'Phone.required' => 'Vui lòng nhập số điện thoại của bạn!!!',
			'Phone.numeric' => 'Số điện thoại không hợp lệ!!!'
		]);
		$add = [
			'Name' => $req->Email,
			'SDT' => $req->Phone,
		];
		DB::table('user')->insert($add);
		return redirect()->back()->with(['flash_level'=>'success', 'flash_message'=>'Gửi thành công!!!']);

	}
}
