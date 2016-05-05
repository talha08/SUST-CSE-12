<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Validator;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Profile;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register')
                    ->with('title', 'Register');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'name'                  => 'required',
            'email'                 => 'required|unique:users,email',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);

            if($user->save()){
                //profile table update
                $profile = new Profile();
                $profile->user_id = $user->id;

                if($profile->save()){
                    //role assign
                    $role = Role::find(2);
                    $user->attachRole($role);

                    //if save then logout the user and send him login view
                    Auth::logout();
                    return redirect()->route('login')
                        ->with('success','Registered successfully. Sign In Now.');
                }else{
                    //if not save then  delete the user table data of this user
                    User::destroy($user->id);
                    return redirect()->back()
                        ->with('error','Something went wrong.Please Try again.');
                }

            }else{
                return redirect()->route('dashboard')
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
    }







}
