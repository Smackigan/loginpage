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


    public function index(): Response
    {
        return response()->view('page.account');
    }

    // LOGIN
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors(['loginError' => 'Password or email is incorrect!']);
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect('/success');
        }

        return redirect('/')->withErrors(['loginError' => 'Password or email is incorrect!']);
    }

    // SUCCESS
    public function success()
    {
        //implement check if the user is authorized
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // Pass the user's first name and last name to the view
            return view('page.success')->with(['firstName' => $user->firstName, 'lastName' => $user->lastName]);
        }

        return redirect('/');
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    // REGISTER
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
}
