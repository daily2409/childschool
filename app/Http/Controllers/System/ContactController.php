<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Model\Log;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function getListContact(Request $req) {
        $contact = Contact::where('status', 1)->orderBy('id', 'desc');
        if($req->id_search){
            $contact->where('id', $req->id_search);
        }
        if($req->name_search){
            $contact->where('name', 'like', '%'.$req->name_search.'%');
        }
        if($req->email_search){
            $contact->where('email', 'like', '%'.$req->email_search.'%');
        }
        if($req->question_search){
            $contact->where('question', 'like', '%'.$req->question_search.'%');
        }
        $contact = $contact->paginate(20);
        return view('System.Contact.ListContact', compact('contact'));
    }
    public function getEditContact($id) {
        $contact = Contact::find($id);
        return view('System.Contact.EditContact', compact('contact'));
    }
    public function postAddContact(Request $req){
        $arr_insert = [
            'title' => $req->title,
            'name' => $req->fullname,
            'phonenumber' => $req->phone,
            'email' => $req->email,
        ];
        $insert = Contact::addContact($arr_insert);
        if($insert){
            $user = Auth::user();
            $action = 17;
            $comment = 'Create new contact by ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            return response(array('status'=>true, 'msg'=> 'Create new menu success !'), 200);
        }
        return response(array('status'=>false, 'msg'=> 'Create new menu fail !'), 200);
    }
    public function postEditContact(Request $req){
        $id = $req->id;
        $name = $req->name;
        $email = $req->email;
        $question = $req->question;
        $update_contact = Contact::where('id', $id)->update(['name' => $name, 'email' => $email ,'question' => $question]);
        if($update_contact){
            $user = Auth::user();
            $action = 21;
            $comment = 'Update contact ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
           return redirect()->route('system.contact.getListContact')->with(['flash_level' => 'success', 'flash_message' => 'Edit contact successfully!']);
        }else{
            return redirect()->back()->with(['flash_level' => 'error', 'flash_message' => 'Edit contact error!']);
        }
    }

    public function getDeleteContact(Request $req){
        $id = $req->id;
        $delete_contact = Contact::where('id', $id)->update(['status' => 0]);
        if($delete_contact){
            $user = Auth::user();
            $action = 22;
            $comment = 'Delete contact ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            echo true;
        }else{
            echo false;
        }
    }

}