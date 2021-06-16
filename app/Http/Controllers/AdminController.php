<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller

{

    public function addadmin(Request $req){
  $data = new Admin;

  $data->Name = $req->Name;
  $data->Userame = $req->Userame;
  $data->DateOfBirth = $req->DateOfBirth;
  $data->Email = $req->Email;
  $data->TelephoneNo = $req->TelephoneNo;
  $data->NIC_no = $req->NIC_no;
  $data->Gender = $req->Gender;
  $data->Password = $req->Password;
  $data->Reenter_Password = $req->Reenter_Password;

  $data->save();
  return redirect('admin');
    }

public function getdata(){
    $data = Admin::all();
    
    return view('fetchdata',['detail' => $data]);
}
    
}
