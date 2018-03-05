<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\User;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

=======
use Illuminate\Http\Request;

class UserController extends Controller
{
>>>>>>> 0d4279e290f7da84f242b09682b016d9f6f70347
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $users = DB::table('users')->get();
        return view('Pages.User.show', ['users' => $users]);
=======
        //
>>>>>>> 0d4279e290f7da84f242b09682b016d9f6f70347
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
<<<<<<< HEAD

        $rules = [
            'username' => "unique:users",
            'email' => 'email|unique:users'
        ];

       $this->validate($request,$rules);


        $user = new User();
        $user->fullname=$request->user_fullname;
        $user->username=$request->username;
        $user->adresse=$request->user_adresse;
        $user->email=$request->email;
        $user->tele=$request->user_tele;

        $pic = Input::file('user_picture');
        if ($pic==null){
            $picture_local='assets/img/avatars/avatar.png';
        }else{
            $picture_name = $request->username.'.'.$request->user_picture->extension();
            $picture_local='assets/img/avatars/'.$picture_name;
            $pic->move('assets/img/avatars', $picture_name);
        }

        $user->picture=$picture_local;
        $user->password=bcrypt($request->user_password);
        $user->admin=$request->user_permission;
        $user->save();


        return redirect('/users');
=======
        //
>>>>>>> 0d4279e290f7da84f242b09682b016d9f6f70347
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
<<<<<<< HEAD
//        DB::table('users')
//            ->where('id', $id)
//            ->update(['' =>$request->fullname ]);
//
//
//        return redirect('/services');
=======
        //
>>>>>>> 0d4279e290f7da84f242b09682b016d9f6f70347
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/users');
    }





    /**

     * Display a listing of the myform.

     *

     * @return \Illuminate\Http\Response

     */

    public function myform()

    {

        return view('Pages.User.ajax');

    }


    /**

     * Display a listing of the myformPost.

     *

     * @return \Illuminate\Http\Response

     */

    public function myformPost(Request $request)

    {


//        $validator = Validator::make($request->all(), [
//
////            'email' => 'require',
//
//             'username' => "required|string|min:6",
////
//            'email' => 'required|email|unique:users',
////
////            'address' => 'required',
//
//        ]);

        $rules = [
            'username' => "required|string|min:6|unique:users",
            'email' => 'required|email|unique:users',
        ];
        $messages = [
            'username.required' => "mother fucker",
            'email.unique' => 'okkkk',

        ];


        $validator = Validator::make($request->all(), $rules, $messages);



        if (!$validator->fails()) {

            return response()->json(['success'=>'Added new records.']);

        }


        return response()->json(['error'=>$validator->errors()->all()]);

=======
        //
>>>>>>> 0d4279e290f7da84f242b09682b016d9f6f70347
    }
}