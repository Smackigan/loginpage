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
            'password' => 'required|min:4',
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors(['loginError' => 'Password or email is incorrect!']);
        }

        return redirect()->intended('/success');
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
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'registerEmail' => 'required|email|unique:users,email',
            'registerPassword' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/',
            'confirmPassword' => 'required|same:registerPassword',
            'checkbox' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // valudation passed
        $user = User::create([
            'firstname' => $request->input('firstName'),
            'lastname' => $request->input('lastName'),
            'email' => $request->input('registerEmail'),
            'password' => bcrypt($request->input('registerPassword')),
            'subscribed' => $request->input('checkbox', false),
        ]);

        return redirect('/')->with('success', 'User registered successfully!');
    }

    /**
     * Display a success message for logged-in users
     *
     */
    public function success()
    {
        // implement check if the user is authorized
        // if (true) {
        //     return view('page.success')->with(['firstname' => 'John', 'lastname' => 'Smith']);
        // }

        return redirect('/');
    }
}
