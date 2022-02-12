<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DeletedFeedback;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view("user.profile.index", compact("user", $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate form
        $validator = \Validator::make($request->all(),[
            'current_password'=>[
                'required', function($attribute, $value, $fail){
                    if( !\Hash::check($value, Auth::user()->password) ){
                        return $fail(__('The current password is incorrect'));
                    }
                },
             ],
             'new_password'=>'required',
             'c_new_password'=>'required|same:new_password'
         ],[
             'current_password.required'=>'Enter your current password',
             'new_password.required'=>'Enter new password',
             'c_new_password.required'=>'ReEnter your new password',
             'c_new_password.same'=>'New password and Confirm new password must match'
         ]);

        if( !$validator->passes() ){
            return response()->json(['status'=>0,'msg'=>$validator->errors()->toArray()]);
        }else{
             
         $update = Auth::user()->update(['password'=>\Hash::make($request->new_password)]);

         if( !$update ){
             return response()->json(['status'=>0,'msg'=>'Something went wrong, Failed to update password in db']);
         }else{
             return response()->json(['status'=>1,'msg'=>'Your password has been changed successfully']);
         }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $validator = \Validator::make($request->all(),[
             'reason'=>'required',
         ],[
             'reason.required'=>'Please check one box',
         ]);

        if( !$validator->passes() ){
            return response()->json(['status'=>0,'msg'=>$validator->errors()->toArray()]);
        }else{
             
            $feedback = new DeletedFeedback();
            $feedback->user_id = Auth::id();
            $feedback->reason = $request->input('reason');
            $feedback->message = $request->input('message');
            $user = Auth::user();
            if($feedback->save() && $user->delete()){
                return response()->json(['status'=>1,'msg'=>'Your account has been deleted successfully']);
            }else{
                return response()->json(['status'=>0,'msg'=>'There was an error while deleting your account']);
            }
        }
    }
}
