<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slide;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;
use App\Model\Log;

class SlideController extends Controller
{
    public function getListSlide (Request $req) {
        $Slide = Slide::where('status', 1)->orderBy('id', 'desc');
        if($req->id_search){
            $Slide->where('id', $req->id_search);
        }
        if($req->name_search){
            $Slide->where('name', 'like', '%'.$req->name_search.'%');
        }
        $Slide = $Slide->paginate(20);
        return view('System.Slides.index', compact('Slide'));
    }

    public function postAddSlide(Request $req) {


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

        $arrayInsert = [
            'Title' => $req->title,
            'Description' => $req->description,
            'Image' =>  'test.jpg',
            'Link' => $req->link,
            'Status' => 1,
        ];
        $insert = Slide::addSlide($arrayInsert);

        if($insert){
            $action = 6;


            $comment = 'Add Slide by ID: '. $user->id;
            Log::insertLog($user->id, $action, $comment);
            return response(array('status'=>true), 200);
        }
        return response(array('status'=>false), 200);
    }

    public function getEditNews($id) {
        $news = Slide::find($id);
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
        $update_news = Slide::where('id', $id)->update(['name' => $name, 'slug' => $slug, 'image' => $image, 'alt' => $alt, 'content' => $content, 'summary_content' => $summary_content]);
        if($update_news){
            $user = Auth::user();
            $action = 19;
            $comment = 'Update Slide ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
           return redirect()->route('system.Slide.getListSlide')->with(['flash_level' => 'success', 'flash_message' => 'Edit Slide successfully!']);
        }else{
            return redirect()->back()->with(['flash_level' => 'error', 'flash_message' => 'Edit Slide error!']);
        }
    }

    public function getDeleteSlide(Request $req){
        $id = $req->id;
        $delete_Slide = Slide::where('id', $id)->update(['status' => 0]);
        if($delete_Slide){
            $user = Auth::user();
            $action = 20;
            $comment = 'Delete Slide ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            echo true;
        }else{
            echo false;
        }
    }
    public function showSlide(){
        $lstNew = Slide::where('status', 1)->get()->toArray();
        dd($lstNew);
    }

}
