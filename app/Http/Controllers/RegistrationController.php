<?php

namespace App\Http\Controllers;

use App\Models\Charity;
use App\Models\Donor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrationController extends Controller
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
    public function storeDonor(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'user_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'contact_phone' => 'required|string|max:20',
            'contact_email' => 'required|email|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming image validation
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->role = 'donor';
        $user->save();

        $donor = new Donor();
        $donor->user_id = $user->id;
        $donor->type = $request->type;
        $donor->name = $validated['user_name'];
        $donor->location = $validated['location'];
        $donor->contact_phone = $validated['contact_phone'];
        $donor->contact_email = $validated['contact_email'];

        if ($request->hasFile('image')) {
            $image_name = $validated['user_name'] . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('donors_images', $image_name, 'public');
            $donor->image =  $path;
        }

        $donor->save();

        Alert::success('تم إنشاء الحساب بنجاح، قم بالدخول الان');
        return redirect('/donor/login');
    }
    public function storeCharity(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'user_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'contact_phone' => 'required|string|max:20',
            'contact_email' => 'required|email|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming image validation
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->role = 'charity';
        $user->save();

        $donor = new Charity();
        $donor->user_id = $user->id;
        $donor->name = $validated['user_name'];
        $donor->service_area = $validated['location'];
        $donor->contact_phone = $validated['contact_phone'];
        $donor->contact_email = $validated['contact_email'];

        if ($request->hasFile('image')) {
            $image_name = $validated['user_name'] . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('charities_images', $image_name, 'public');
            $donor->image =  $path;
        }

        $donor->save();

        Alert::success('تم إنشاء الحساب بنجاح، قم بالدخول الان');
        return redirect('/charity/login');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
