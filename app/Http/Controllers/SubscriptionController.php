<?php

namespace App\Http\Controllers;

use App\Models\subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    public function rules(Request $request)
{
 
    
        
    return redirect('/posts');
}
    public function new_subscription (Request $request) {
        $subscription=$request->all();
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        subscription::create([
            "email"=> $$validated["email"],
        ]);
        return redirect("/");
}

}