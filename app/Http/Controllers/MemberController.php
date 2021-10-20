<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function addData(Request $req)
    {
        $member = new Member;
        $member->name =$req->name;
        $member->email =$req->email;
        $member->address =$req->address;
        $member->save();
        return redirect('add');
    }
    function show()
    {
        $data = member::all();
        return view('list',['members'=>$data]);
    }
    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }
    function edit($id)
    {
        $data = Member::find($id);
        return view('edit',['member'=>$data]);
        }
        function update(Request $req){
            $update = Member::find($req->id);
            $update->id=$req->id;
            $update->name=$req->name;
            $update->address =$req->address;
            $update->email =$req->email;
           
            $update->save();
            return redirect('list');
        }


}
