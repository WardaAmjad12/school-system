<?php

namespace App\Http\Controllers;
use app\Admin;
use App\Student;
use App\User;
use App\TimeTable;
use Image;
use validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
	 public function index()
    {
        return view('theme.admin.pannel');
    }
    public function admin_dashboard()
    {
        return view('theme.admin.dashboard');
    }
    public function save(request $request){
      switch($request->input('submit')) {

    case 'save': 
     // $password=$request->password;
      $obj=new Student();
      $obj->name=$request->name;
      $obj->email=$request->email;
      $obj->Fname=$request->fname;
      $obj->Lname=$request->lname;
      $obj->address=$request->address;
      $obj->city=$request->city;
      $obj->Pcode=$request->pcode;
      $obj->section=$request->section;
      $obj->class=$request->class;
      $obj->roll_no=$request->roll_no;
      $obj->dob=$request->dob;
      $obj->gender=$request->gender;
      // $obj->image = $request->hasfile('image');
      $file=$request->file('image');

      $file_name= $file->getClientOriginalName();
      $destinationPath = $file->move(public_path('/images'),$file_name);
      $obj->image =$file_name;
      $obj->password=Hash::make(Input::get('pass'));
      $obj->save();
      return back();
      break;
    
    case 'update':
      $student = Student::where('email', $request->email)->firstorfail();
        $student->name   = $request->name;
        $student->email   = $request->email;
        $student->Fname   = $request->fname;
        $student->Lname   = $request->lname;
        $student->city   = $request->city;
        $student->Pcode   = $request->pcode;
        $student->address   = $request->address;
        $student->class  =$request->class;
        $student->roll_no=$request->roll_no;
        $student->dob=$request->dob;
        $student->gender=$request->gender;

       
        
        $file        =$request->file('image');
        $file_name   = $file->getClientOriginalName();
        $destinationPath = $file->move(public_path('/images'),$file_name);
        $student->image =$file_name;
        $student->password=Hash::make(Input::get('pass'));
        $student->save();
        return back();
      break;
 }
}
public function show_students()
{
  $alldata=Student::all();
  return view('theme.admin.all_students')->withstudent($alldata);
}
     public function student_profile()
    {
        return view('theme.admin.std_admit');
    }
    //

    public function save_teacher(request $request){
      switch($request->input('submit')) {

    case 'save': 
     // $password=$request->password;
      $obj=new User();
      $obj->name=$request->name;
      $obj->email=$request->email;
      $obj->Fname=$request->fname;
      $obj->Lname=$request->lname;
      $obj->address=$request->address;
      $obj->city=$request->city;
      $obj->Pcode=$request->Pcode;
      $obj->phone=$request->phone;
      $obj->dob=$request->dob;
      $obj->class=$request->class;
      $obj->section=$request->section;
      $obj->subject=$request->subject;
      $obj->id_no=$request->id_no;
      $obj->gender=$request->gender;
      // $obj->image = $request->hasfile('image');
      $file=$request->file('image');

      $file_name= $file->getClientOriginalName();
      $destinationPath = $file->move(public_path('/images'),$file_name);
      $obj->image =$file_name;
      $obj->password=Hash::make(Input::get('pass'));
      $obj->save();
      return back();
      break;
    
    case 'update':
      $student = Student::where('email', $request->email)->firstorfail();
        $student->name   = $request->name;
        $student->email   = $request->email;
        $student->Fname   = $request->fname;
        $student->Lname   = $request->lname;
        $student->city   = $request->city;
        $student->phone   = $request->phone;
        $student->Pcode   = $request->Pcode;
        $student->address   = $request->address;
        $student->subject  =$request->subject;
        $student->section  =$request->section;
        $student->id_no=$request->id_no;
        $student->dob=$request->dob;
        $student->gender=$request->gender;

       
        
        $file        =$request->file('image');
        $file_name   = $file->getClientOriginalName();
        $destinationPath = $file->move(public_path('/images'),$file_name);
        $student->image =$file_name;
        $student->password=Hash::make(Input::get('pass'));
        $student->save();
        return back();
      break;
 }
}
public function show_teachers()
{
  $alldata=User::all();
  return view('theme.admin.all_teachers')->withteacher($alldata);
}
public function teacher_profile()
    {
        return view('theme.admin.add_teacher');
    }
public function edit($id)
{
   $obj=Student::where('id',$id)->first();
   return view('theme.admin.std_admit')->withdata($obj);

  # code...
}
public function delete($id){

$obj=Student::where('id',$id)->first();

//dd($obj);
$obj->delete();
return back();
}
public function view($id){

$obj=Student::where('id',$id)->first();


return view('theme.admin.view_student')->withstudent($obj);
}
public function edit_teacher($id)
{
   $obj=User::where('id',$id)->first();
   //dd($obj);
   return view('theme.admin.add_teacher')->withdata($obj);

  # code...
}
public function delete_teacher($id){

$obj=User::where('id',$id)->first();

//dd($obj);
$obj->delete();
return back();
}
public function view_teacher($id){

$obj=User::where('id',$id)->first();


return view('theme.admin.view_teacher')->withteacher($obj);
}
public function table(){

$data = TimeTable::all();
return view('theme.admin.edittimetable',['data'=>$data]);
}

public function table_insert(Request $request){

$class_name = $request->input('class_name');
$section_name = $request->input('section_name');
$teacher_name = $request->input('teacher_name');
$subject_name = $request->input('subject_name');
$time = $request->input('time');
  

foreach ($class_name as $i => $value) {
  
    $obj = new TimeTable([
      'class_name' => $class_name[$i],
      'section_name' => $section_name[$i],
      'teacher_name' => $teacher_name[$i],
      'subject_name' => $subject_name[$i],
      'time' => $time[$i],
    ]);
    $obj->save();
   }
  

return back();
   


}
public function delete_timetable(){

$obj=TimeTable::truncate();

// dd($obj);
// $obj->delete();
return back();
}
public function attendence(){
  return view('theme.admin.attendence');
}
}



