<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;
use App\Model\Log;

class BlogController extends Controller
{
    public function getListNews (Request $req) {
        $news = Blog::where('status', 1)->orderBy('id', 'desc');
        if($req->id_search){
            $news->where('id', $req->id_search);
        }
        if($req->name_search){
            $news->where('name', 'like', '%'.$req->name_search.'%');
        }
        $news = $news->paginate(20);
        return view('System.News.ListNews', compact('news'));
    }

    public function postAddBlog(Request $req) {


        $user = Auth::user();
        // $this->validate(
        //     $req,
        //     [
        //         'name' => 'required|min:3',
        //         'content' => 'required',
        //         'alt_image' => 'required',
        //         'summary_content' => 'required',
        //     ]
        // );

        $arrayInsert = [];
        // foreach($req->all() as $k=>$v){
        //     if(is_numeric($v)){
        //         $arrayInsert[$k] = (float)$v;
        //     }else{
        //         $arrayInsert[$k] = $v;
        //     }

        // }
        $arrayInsert = [
            'name' => $req->title,
            'slug' =>   $req->title.'-'.$req->title,
            'content' => $req->content,
            'summary_content' =>  $req->summary_content,
            'status' => 1,
            'image' => '/photos/6/Sports & Entertainment.jpg',
            'alt' => 'this is a news'.rand(1, 100)
        ];
        $insert = Blog::addNews($arrayInsert);
        // $news = new News;
        // $news->name = $req->name;
        // $news->slug = changeTitle($req->name);
        // $news->image = $req->image;
        // $news->alt = $req->alt_image;
        // $news->content = $req->content;
        // $news->summary_content = $req->summary_content;
        // $news->save();
        if($insert){
            $action = 6;


            $comment = 'Add News by ID: '. $user->id;
            Log::insertLog($user->id, $action, $comment);
            return response(array('status'=>true), 200);
        }
        return response(array('status'=>false), 200);
    }

    public function getEditNews($id) {
        $news = News::find($id);
        return view('System.News.EditNews', compact('news'));
    }

    public function postEditNews(Request $req){
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
        $update_news = News::where('id', $id)->update(['name' => $name, 'slug' => $slug, 'image' => $image, 'alt' => $alt, 'content' => $content, 'summary_content' => $summary_content]);
        if($update_news){
            $user = Auth::user();
            $action = 19;
            $comment = 'Update news ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
           return redirect()->route('system.news.getListNews')->with(['flash_level' => 'success', 'flash_message' => 'Edit news successfully!']);
        }else{
            return redirect()->back()->with(['flash_level' => 'error', 'flash_message' => 'Edit news error!']);
        }
    }

    public function getDeleteNews(Request $req){
        $id = $req->id;
        $delete_news = News::where('id', $id)->update(['status' => 0]);
        if($delete_news){
            $user = Auth::user();
            $action = 20;
            $comment = 'Delete news ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            echo true;
        }else{
            echo false;
        }
    }
    public function showNews(){
        $lstNew = News::where('status', 1)->get()->toArray();
        dd($lstNew);
    }

}
