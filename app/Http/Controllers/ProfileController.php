<?php

namespace App\Http\Controllers;

use App\Model\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use View;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\User;
use App\Http\Requests\PhotoRequest;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{



    /**
     * Display the profile Info.
     *
     * @param  none
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $profile =Profile::where('user_id',Auth::user()->id)->first();
        return view('auth.profile')
            ->with('title', 'Profile')
            ->with('user', Auth::user())
            ->with('profile', $profile);
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  ProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request)
    {
        try{
            Profile::where('id','=',Auth::user()->id)->update([
                'name'=>  $request->name,
                'gender'=> $request->gender,
                'dob'=> $request->dob,
                'hometown'=> $request->hometown,
                'interests'=> $request->interests,
                'aboutme'=> $request->aboutme,
            ]);

            return Redirect::route('profile')->with('success','Profile updated Successfully');
        }catch(Exception $e){
            return redirect()->back()->with('error','Something went wrong, Please try Again.');
        }

    }







    /**
     * Update PROFILE photo.
     *
     * @param PhotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function photoUpload(PhotoRequest $request){


        if ($request->hasFile('image'))
        {
            $image = $request->file('image');


            //deleting previous file
            $prev_avatar_url = Auth::user()->profile->img_url;
            if($prev_avatar_url != 'upload/profile/default/avatar.jpg'){
                if (\File::exists($prev_avatar_url)) {
                    \File::delete($prev_avatar_url);
                }

            }

            $avatar_url = 'upload/profile/avatar/avatar-'.Auth::user()->id. '.' . $image->getClientOriginalExtension();


            Image::make($image)->resize(200, 200)->save(public_path($avatar_url));


            $profile = Profile::where('user_id',Auth::user()->id)
                ->update(array(
                    'img_url' => $avatar_url,
                ));

            if($profile){
                return redirect()->back()->with('success','Avatar updated successfully');
            }else{
                return redirect()->back()->with('error','Something went wrong');
            }

        }else{

            return redirect()->back()->with(['error'=>'Image could not be uploaded']);
        }
    }

}
