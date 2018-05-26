<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    //เพิ่ม คอร์ส ไป DB
    function insertcourse(Request $req)
    {

      $Group = $req->input('Group');
      $Name = $req->input('Name');
      $Price = $req->input('Price');
      $TName = $req->input('TName');
      $LTime = $req->input('LTime');
      $DStart = $req->input('DStart');
      $DStop = $req->input('DStop');

      $data = array('Group'=>$Group,'Name'=>$Name,'Price'=>$Price,'TName'=>$TName,'LTime'=>$LTime,'DStart'=>$DStart,"DStop"=>$DStop);

      DB::table('course')->insert($data);

      return view('managecourse');
    }

    //อ่าน DB คอร์ส
    function readcourse(Request $req) {
      $Group = $req->input('Selgroup');

      $course['user'] = DB::table('course')->where('Group', $Group)->get();
      //dd($course);
      //$users['user'] = \App\User::all();
      return view('listuser', $course);
    }




    //ลบคอร์ส
    function deletecourse($id,$Group){

      DB::table('course')->where('id',$id)->delete();

      //return view('managecourse');
      return $this->updatecourse($Group);
    }

    function updatecourse($Group)
    {
      $course['user'] = DB::table('course')->where('Group', $Group)->get();

      return view('listuser', $course);
    }






    function deleteuser($id){

      DB::table('users')->where('id',$id)->delete();

      //return view('managecourse');
      return $this->updateuser();
    }


    function updateuser()
    {
      $users['user'] = \App\User::all();

      return view('manageuser', $users);
    }



    //อ่าน DB คอร์ส
    function listcourse() {
      $course['user'] = DB::table('course')->get();
      //dd($course);
      //$users['user'] = \App\User::all();
      $id = Auth::user()->id;
      $go['go'] = DB::table('mcourse')->where('iduser', $id)->get();


      return view('coursechoose', $course,$go);
    }


 //เพิ่ม วิชาที่ลงทะเบียน
    function addchoose($idcourse)
    {
      $id = Auth::user()->id;
      $data = array('iduser'=>$id,'idcourse'=>$idcourse);

      DB::table('mcourse')->insert($data);

      return $this->listcourse();
    }

    //ลบ วิชาที่ลงทะเบียน
       function deletechoose($id){

         DB::table('mcourse')->where('id',$id)->delete();

         //return view('managecourse');
         return $this->listcourse();
       }


}
