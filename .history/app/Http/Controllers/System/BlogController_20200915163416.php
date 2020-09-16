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
    public function getListBlog (Request $req) {
        $Blog = Blog::where('status', 1)->orderBy('id', 'desc');
        if($req->id_search){
            $Blog->where('id', $req->id_search);
        }
        if($req->name_search){
            $Blog->where('name', 'like', '%'.$req->name_search.'%');
        }
        $Blog = $Blog->paginate(20);
        return view('System.Blogs.index', compact('Blog'));
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
            'Title' => $req->title,
            'Description' => $req->description,
            'Image' =>  'test.jpg',
            'Link' => $req->link,
            'Status' => 1,
        ];
        $insert = Blog::addBlog($arrayInsert);
        // $News = new News;
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
        $news = Blog::find($id);
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
        $update_news = Blog::where('id', $id)->update(['name' => $name, 'slug' => $slug, 'image' => $image, 'alt' => $alt, 'content' => $content, 'summary_content' => $summary_content]);
        if($update_news){
            $user = Auth::user();
            $action = 19;
            $comment = 'Update Blog ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
           return redirect()->route('system.Blog.getListBlog')->with(['flash_level' => 'success', 'flash_message' => 'Edit Blog successfully!']);
        }else{
            return redirect()->back()->with(['flash_level' => 'error', 'flash_message' => 'Edit Blog error!']);
        }
    }

    public function getDeleteBlog(Request $req){
        $id = $req->id;
        $delete_Blog = Blog::where('id', $id)->update(['status' => 0]);
        if($delete_Blog){
            $user = Auth::user();
            $action = 20;
            $comment = 'Delete Blog ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            echo true;
        }else{
            echo false;
        }
    }
    public function showBlog(){
        $lstNew = Blog::where('status', 1)->get()->toArray();
        dd($lstNew);
    }

}
