<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Contacts;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
       
        return view('contact.index');
    }
}
