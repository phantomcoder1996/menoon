<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\user_info;

class approval_admin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users=DB::table('Users')->select('fname','lname','id','username')->where('confirmed',0)->get();

        return view('pages.Admin.adminApproval',['users'=>$users]);
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

        if($request->has('birth_certificate_no'))
        {
            //echo $request->get('birth_certificate_no');
            DB::table('user_birth_certificates')->where('user_id',$request->get('id'))->update(['approved'=>1]);

        }
        if($request->has('passport_no'))
        {
            DB::table('user_passport_info')->where('user_id',$request->get('id'))->update(['approved'=>1]);

        }
        if($request->has('national_id_no'))
        {
            DB::table('user_national_ids')->where('user_id',$request->get('id'))->update(['approved'=>1]);

        }

        DB::table('Users')->where('id',$request->get('id'))->update(['confirmed'=>1]);

        return redirect('/approvalAdmin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id the id of a particular user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user=new user_info;

        $user_names=DB::table('Users')->select('fname','lname','id','username','address')->where('id',$id)->get();
        $user->setname($user_names[0]->fname,$user_names[0]->lname,$user_names[0]->username);
        $user->setId($user_names[0]->id);
    //next get users phone numbers
        $emails=DB::table('user_emails')->select('email')->where('user_id',$id)->get()->toArray();

        $user->addEmails($emails);

        $address=$user_names[0]->address;
        $user->setAddress($address);

         //add phone numbers later$phonenumbers=DB::table()
        $birth_info=DB::table('user_birth_certificates')->select('birth_certificate_no','birth_certificate_photocopy')->where('user_id',$id)->get();//->toArray();
//echo $birth_info;
if($birth_info->count()>0)
        $user->addBirthCertificate($birth_info->toArray());

        $passport_info=DB::table('user_passport_info')->select('passport_no','passport_photo')->where('user_id',$id)->get();//->toArray();
//echo $passport_info;
if($passport_info->count()>0)
        $user->addPassport($passport_info->toArray());

        $national_id_info=DB::table('user_national_ids')->select('national_id_no','national_id_photocopy')->where('user_id',$id)->get();//->toArray();
//echo $national_id_info;
        if($national_id_info->count()>0)
        $user->addNationalId($national_id_info->toArray());

        $arr=array();
        $arr[0]=$user;
        return view('pages.Admin.userAdminApproval',['user'=>$arr]);
        //return view('pages.Admin.adminApproval',['users'=>$users]);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('Users')->where('id',$id)->delete();
        return view('pages.Admin.adminApproval');

    }
}
