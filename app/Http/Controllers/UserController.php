<?php

namespace App\Http\Controllers;

use App\Models\Scopes\UserScope;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $user =User::where('status',1)->get();
      //  $user =User::with('posts')->active()->get();
        //  ->whereCity('lahore')->get();
        //  ->whereIn([" ",""]);
        // ->orderBy('name','asc')->get();
        // ->sort()->get();
        
        // global scope
        // $user=User::get();
        
        // remove global scope
        $user=User::withoutGlobalScope(UserScope::class)->get();
       
        return $user;
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
