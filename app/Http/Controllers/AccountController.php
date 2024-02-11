<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{

    /**
     * Display my account page
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('page.account');
    }

    /**
     * Login user in to the system
     *
     * @param Request $request
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->intended('/success');
        }

        return redirect()->back()->with('error', 'Invalid email or password')->withInput();
    }



    /**
     * Logout user from the system
     *
     */
    public function logout()
    {
        // implement logout functionality

        return redirect('/');
    }

    /**
     * Register user in the system
     *
     * @param Request $request
     */
    public function register(Request $request)
    {
        // implement register functionality
    }

    /**
     * Display a success message for logged-in users
     *
     */
    public function success()
    {
        // implement check if the user is authorized
        if (true) {
            return view('page.success')->with(['firstname' => 'John', 'lastname' => 'Smith']);
        }

        return redirect('/');
    }
}
