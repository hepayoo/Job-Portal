<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function login()
    {
        return view('company.company');
    }

    public function doLogin(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191|unique:companies,email', // Ensure email is unique in the companies table
            'password' => 'required|string|min:8', // Consider setting a minimum length for the password
        ]);

        

        // Create a new company record
        $company = Company::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']), // Hash the password before storing it
        ]);
        
        // Log the company in
        auth()->login($company);

        // Redirect to the home page or wherever you want
        return redirect()->route('front.Home');
    }


    public function preconnect()
    {
        return view('company.connect');
    }

    public function connect(Request $request)
    {
       
        // Validate the incoming request data
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the company in
        if (!auth()->guard('company')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return redirect()->route('company.dashboard');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    public function dashboard()
    {
        return view('company.dashboard');
    }
}
