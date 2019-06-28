<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\contact;
use App\Rules\ContactRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create() {
        return view('contact');
    }

    public function store(ContactRequest $request) {
//        Coding to email
//        $request->validate([
//            'email' => new ContactRule($request->email)
//        ]);
        Mail::to($request->email)->send(new contact($request->pesan));


        return view('welcome');
    }

//    public function edit() {
//
//    }
//
//    public function update() {
//
//    }
}

