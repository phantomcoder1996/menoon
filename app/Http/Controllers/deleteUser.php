<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class deleteUser extends Controller
{
    //
    public function deleteUser($id)
    {
        DB::table('Users')->where('id',$id)->delete();
        return redirect('/approvalAdmin');
    }

}
