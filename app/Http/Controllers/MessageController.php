<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert ;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
