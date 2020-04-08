<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $email)
    {
        //print $request->email;
        return \DB::table('communities')->where($request->tableName, $request->value)->get();
    }

    public function testEndpoint(Request $request, $email)
    {
        print 'Welcome '.$request->email.'. <br /> You have succesfully tested the endpoint and you can now make requests to the /communities/{email} endpoint.';
        die();
    }
}
