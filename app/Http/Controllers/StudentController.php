<?php

namespace App\Http\Controllers;
use Auth;
use app\Student;
use App\TimeTable;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }



     public function student(){
        $student=Auth::user();
        
        $dataa['student'] =  $student;
    return view('theme.student.dashboard',$dataa,["consumer"=>"student"]);
       
    }
 //    public function save(request $request){
 //      switch($request->input('submit')) {

 //    case 'save': 
 //      $name=$request->name;
 //      $email=$request->email;
 //      $fname=$request->fname;
 //      $lname=$request->lname;
 //      $address=$request->address;
 //      $city=$request->city;
 //      $pcode=$request->pcode;
 //      $class=$request->class;
 //      $roll_no=$request->roll_no;
 //      $dob=$request->dob;
 //      $gender=$request->gender;
 //      $image=$request->image;
 //      $password=bcrypt($request['password']);
 //      $obj=new Student();
 //      $obj->name=$name;
 //      $obj->email=$email;
 //      $obj->Fname=$fname;
 //      $obj->Lname=$lname;
 //      $obj->address=$address;
 //      $obj->city=$city;
 //      $obj->Pcode=$pcode;
 //      $obj->class=$class;
 //      $obj->roll_no=$roll_no;
 //      $obj->dob=$dob;
 //      $obj->gender=$gender;
 //      $obj->image=$image;
 //      $obj->password=$password;
 //      $obj->save();
 //      return back();
 //      break;
 //    }
 // }
     public function editstudent(){
          $student=Auth::user();
        $dataa['student'] =  $student;



            return view('theme.profile',$dataa,["consumer"=>"student"]);
    }
    
    public function update(Request $request){
        $student = Student::where('id', $request->id)->firstorfail();
        $student->name   = $request->name;
        $student->email   = $request->email;
        $student->Fname   = $request->fname;
        $student->Lname   = $request->lname;
        $student->city   = $request->city;
        $student->Pcode   = $request->pcode;
        $student->address   = $request->address;
        $student->comment   = $request->comment;

       
        
        $file        =$request->file('image');
        $file_name   = $file->getClientOriginalName();
        $destinationPath = $file->move(public_path('/images'),$file_name);
        $student->image =$file_name;
        $student->save();
        
        return redirect('/student');


     }
     public function show_timetable()
{
  $alldata=TimeTable::all();
  return view('theme.student.timetable')->withdata($alldata);
}
}
