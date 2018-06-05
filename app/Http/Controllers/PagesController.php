<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'index']);
    }

    public function about() {

        return view('pages.about');
    }

    public function contact() {

        return view('pages.contact');
    }

    public function store(ContactRequest $contactRequest)
    {
        $contact = new Contact();

        $contact->title_contact = request('title_contact');
        $contact->mail_contact = request('mail_contact');
        $contact->body_contact = request('body_contact');
        $contact->save();

        return redirect()->route('posts.index');
    }

    public function index()
    {
        $messages = Contact::latest('created_at', 'DESC')->get();

        return view('info.index', compact('messages'));
    }
}
