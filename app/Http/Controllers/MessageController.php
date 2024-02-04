<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert ;

class MessageController extends Controller
{

    /**
     * Store a newly created resource in storage.#
     
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        if(auth()->user() && auth()->user()->role !== 'admin'){
            $message->is_user = true;
            $message->user_id = auth()->user()->id;
        };
        $message->save();
        Alert::success(' تم الإرسال، سنرد عليك في أقرب وقت');
        return redirect('/contact-us');
    }
}
