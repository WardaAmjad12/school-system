<?php

namespace App\Http\Controllers;
use Auth;
use app\User;
use App\Student;
use App\TimeTable;
use App\Attendence;
use App\Notes;
use DB;
use Excel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
     public function teacher(){
            $user=Auth::user();
        $data['user'] =  $user;
    return view('theme.teacher.dashboard',$data,["consumer"=>"teacher"]);
    // dd($user);
    }
    //  public function student(){
    //     $user=Auth::user();
    //     $data['user'] =  $user;
    // return view('theme.dashboard',$data);
       
    // }
     public function edit(){
          $user=Auth::user();
        $data['user'] =  $user;



            return view('theme.profile',$data,["consumer"=>"teacher"]);
    }
    public function update(Request $request){
        $user = User::where('id', $request->id)->firstorfail();
        $user->name   = $request->name;
        $user->email   = $request->email;
        $user->Fname   = $request->fname;
        $user->Lname   = $request->lname;
        $user->city   = $request->city;
        $user->Pcode   = $request->pcode;
        $user->address   = $request->address;
        $user->comment   = $request->comment;

       
        // $user->image = $request->hasfile('image');
        $file        =$request->file('image');
        $file_name   = $file->getClientOriginalName();
        $destinationPath = $file->move(public_path('/images'),$file_name);
        $user->image =$file_name;
        $user->save();
        
        return redirect('/teacher');


     }
     public function demo(){
        return view('dashboard');
     }
          public function show_timetable()
{
  $alldata=TimeTable::all();
  return view('theme.teacher.timetable')->withdata($alldata);
}
public function attendence()
{
   return view('theme.teacher.attendence');
}
public function attendence_login(Request $request)
{
    $teacher = User::where('email', $request->email)->firstorfail();
    $student = Student::where([
    ['class', '=', $teacher->class],
    ['section', '=', $teacher->section],
   
])->get();
    // dd($student);
    if ($teacher->email==$request->email && $teacher->class==$request->class && $teacher->section==$request->section && Hash::check($request->password , $teacher->password)) {
        return view('theme.teacher.attendence_login')->withprofile($teacher)
                                                     ->withrecords($student);
    }
    else{
        echo "Invalid Email And Password";
    }
    
}
public function excel(){
    $teacher = Auth::User();
    $student_data = Student::where([
    ['class', '=', $teacher->class],
    ['section', '=', $teacher->section],
   
])->get()->toArray();
    // dd($student_data);
    $student_array[] =array('Student Name','Roll No');
    foreach ($student_data as $student) {
        // dd($student->["id"]);
        $student_array[] = array('Student Name' => $student['name'],
                                'Roll No' => $student['roll_no']);
    }
    Excel::create('Student Data',function($excel)use($student_array){
        $excel->setTitle('Student Data');
        $excel->sheet('Student Data',function($sheet)use($student_array){
            $sheet->with($student_array,null,'A1',false,false);
        });
    })->download('xlsx');
    return back();
}
public function store_excel(Request $request){
    $teacher = Auth::User();
    $attendence = new Attendence();
    $extensions = array("xls","xlsx","xlm","xla","xlc","xlt","xlw");

    $result = array($request->file('import_file')->getClientOriginalExtension());
    $file=$request->file('import_file');
    $file_name= $file->getClientOriginalName();
    $destinationPath = $file->move(public_path('/attendence'),$file_name);
      
    if(in_array($result[0],$extensions)){
        $attendence->attendence_file =$file_name;
    $attendence->class=$teacher->class;
    $attendence->section=$teacher->section;
    $attendence->teacher_name=$teacher->name;
    $attendence->save();
    
    }else{
       echo "only xls and xlsx files are acceptable";
    }
    return 'successful';

   
}
  public function notes_uploads(Request $request){
    switch($request->input('submit')) {

    case 'PDF_save': 
    $teacher = Auth::User();
    $file=$request->upload_pdf;
    $class=$teacher->class;
    $section=$teacher->section;
    // $rules = array('upload_pdf' => 'required|mimes:pdf,jpg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
    //     $validator = Validator::make(array('upload_pdf'=> $file), $rules);
    //     if($validator->passes()){
    //       $destinationPath = public_path('/written-notes'); // upload folder in public directory
    //       $filename = $file->getClientOriginalName();
    //       $upload_success = $file->move($destinationPath, $filename);
    //     $extension = $file->getClientOriginalExtension();
          $attendence = new Notes();
          // $attendence->mime = $file->getClientMimeType();
          $attendence->written_notes = $file;
          // $attendence->filename = $file->getFilename().'.'.$extension;
          dd($class);
    $attendence->class=$teacher->class;
    $attendence->section=$teacher->section;
    $attendence->teacher_name=$teacher->name;
    switch($class && $section) {
    case ('playgroup' && 'A'):
      $attendence->value ='P.A.W';
      break;
    case ('playgroup' && 'B'):
      $attendence->value ='P.B.W';
      break;
    case ('playgroup' && 'C'):
      $attendence->value ='P.C.W';
      break;
    case ('playgroup' && 'D'):
      $attendence->value ='P.D.W';
      break;
    case ('nersury' && 'A'):
      $attendence->value ='N.A.W';
      break;
    case ('nersury' && 'B'):
      $attendence->value ='N.B.W';
      break;
    case ('nersury' && 'C'):
      $attendence->value ='N.C.W';
      break;
    case ('nersury' && 'D'):
      $attendence->value ='N.D.W';
      break;
    case ('prep' && 'A'):
      $attendence->value ='Pr.A.W';
      break;
    case ('prep' && 'B'):
      $attendence->value ='Pr.B.W';
      break;
    case ('prep' && 'C'):
      $attendence->value ='Pr.C.W';
      break;
    case ('prep' && 'D'):
      $attendence->value ='Pr.D.W';
      break;
    case ('one' && 'A'):
      $attendence->value ='O.A.W';
      break;
      case ('one' && 'B'):
      $attendence->value ='O.B.W';
      break;
      case ('one' && 'C'):
      $attendence->value ='O.C.W';
      break;
      case ('one' && 'D'):
      $attendence->value ='O.D.W';
      break;
      case ('two' && 'A'):
      $attendence->value ='T.A.W';
      break;
      case ('two' && 'B'):
      $attendence->value ='T.B.W';
      break;
    case ('two' && 'C'):
      $attendence->value ='T.C.W';
      break;
    case ('two' && 'D'):
      $attendence->value ='T.D.W';
      break;
    case ('three' && 'A'):
      $attendence->value ='Th.A.W';
      break;
    case ('three' && 'B'):
      $attendence->value ='Th.B.W';
      break;
    case ('three' && 'C'):
      $attendence->value ='Th.C.W';
      break;
    case ('three' && 'D'):
      $attendence->value ='Th.D.W';
      break;
    case ('four' && 'A'):
      $attendence->value ='F.A.W';
      break;
    case ('four' && 'B'):
      $attendence->value ='F.B.W';
      break;
    case ('four' && 'C'):
      $attendence->value ='F.C.W';
      break;
    case ('four' && 'D'):
      $attendence->value ='F.D.W';
      break;
    case ('five' && 'A'):
      $attendence->value ='Fi.A.W';
      break;
    case ('five' && 'B'):
      $attendence->value ='Fi.B.W';
      break;
    case ('five' && 'C'):
      $attendence->value ='Fi.C.W';
      break;
    case ('five' && 'D'):
      $attendence->value ='Fi.D.W';
      break;
    case ('six' && 'A'):
      $attendence->value ='S.A.W';
      break;
    case ('six' && 'B'):
      $attendence->value ='S.B.W';
      break;
    case ('six' && 'C'):
      $attendence->value ='S.C.W';
      break;
    case ('six' && 'D'):
      $attendence->value ='S.D.W';
      break;
    case ('seven' && 'A'):
      $attendence->value ='Se.A.W';
      break;
    case ('seven' && 'B'):
      $attendence->value ='Se.B.W';
      break;
    case ('seven' && 'C'):
      $attendence->value ='Se.C.W';
      break;
    case ('seven' && 'D'):
      $attendence->value ='Se.D.W';
      break;
    case ('eight' && 'A'):
      $attendence->value ='E.A.W';
      break;
    case ('eight' && 'B'):
      $attendence->value ='E.B.W';
      break;
    case ('eight' && 'C'):
      $attendence->value ='E.C.W';
      break;
    case ('eight' && 'D'):
      $attendence->value ='E.D.W';
      break;
    case ('nine' && 'A'):
      $attendence->value ='Ni.A.W';
      break;
    case ('nine' && 'B'):
      $attendence->value ='Ni.B.W';
      break;
    case ('nine' && 'C'):
      $attendence->value ='Ni.C.W';
      break;
    case ('nine' && 'D'):
      $attendence->value ='Ni.D.W';
      break;
    case ('ten' && 'A'):
      $attendence->value ='Te.A.W';
      break;
    case ('ten' && 'B'):
      $attendence->value ='Te.B.W';
      break;
    case ('ten' && 'C'):
      $attendence->value ='Te.C.W';
      break;
    case ('ten' && 'D'):
      $attendence->value ='Te.D.W';
      break;
    }
    
    $attendence->save();
    
   
    return 'successful';
    break;
  
  case 'Pics_save': 
    $teacher = Auth::User();
    $attendence = new Notes();
    $this->validate($request,[
      'upload_pics' =>'required|image|mimes:jpeg,png,jpg,gif|max:2084'
    ]);
    $file =$request->file('upload_pics');
    $new_name =$file->getClientOriginalExtension();
    $file->move("written-notes/",$new_name->getClientOriginalName());
    
    $attendence->written_notes =$file;
    $attendence->class=$teacher->class;
    $attendence->section=$teacher->section;
    $attendence->teacher_name=$teacher->name;
    dd($attendence->written_notes);
    switch($teacher->class && $teacher->section) {

    case ('playgroup' && 'A'):
      $attendence->value =='P.A.W';
      break;
    case ('playgroup' && 'B'):
      $attendence->value =='P.B.W';
      break;
    case ('playgroup' && 'C'):
      $attendence->value =='P.C.W';
      break;
    case ('playgroup' && 'D'):
      $attendence->value =='P.D.W';
      break;
    case ('nersury' && 'A'):
      $attendence->value =='N.A.W';
      break;
    case ('nersury' && 'B'):
      $attendence->value =='N.B.W';
      break;
    case ('nersury' && 'C'):
      $attendence->value =='N.C.W';
      break;
    case ('nersury' && 'D'):
      $attendence->value =='N.D.W';
      break;
    case ('prep' && 'A'):
      $attendence->value =='Pr.A.W';
      break;
    case ('prep' && 'A'):
      $attendence->value =='Pr.A.W';
      break;
    case ('prep' && 'A'):
      $attendence->value =='Pr.A.W';
      break;
    case ('prep' && 'A'):
      $attendence->value =='Pr.A.W';
      break;
    case ('one' && 'A'):
      $attendence->value =='O.A.W';
      break;
      case ('one' && 'B'):
      $attendence->value =='O.B.W';
      break;
      case ('one' && 'C'):
      $attendence->value =='O.C.W';
      break;
      case ('one' && 'D'):
      $attendence->value =='O.D.W';
      break;
      case ('two' && 'A'):
      $attendence->value =='T.A.W';
      break;
      case ('two' && 'B'):
      $attendence->value =='T.B.W';
      break;
    case ('two' && 'C'):
      $attendence->value =='T.C.W';
      break;
    case ('two' && 'D'):
      $attendence->value =='T.D.W';
      break;
    case ('three' && 'A'):
      $attendence->value =='Th.A.W';
      break;
    case ('three' && 'B'):
      $attendence->value =='Th.B.W';
      break;
    case ('three' && 'C'):
      $attendence->value =='Th.C.W';
      break;
    case ('three' && 'D'):
      $attendence->value =='Th.D.W';
      break;
    case ('four' && 'A'):
      $attendence->value =='F.A.W';
      break;
    case ('four' && 'B'):
      $attendence->value =='F.B.W';
      break;
    case ('four' && 'C'):
      $attendence->value =='F.C.W';
      break;
    case ('four' && 'D'):
      $attendence->value =='F.D.W';
      break;
    case ('five' && 'A'):
      $attendence->value =='Fi.A.W';
      break;
    case ('five' && 'B'):
      $attendence->value =='Fi.B.W';
      break;
    case ('five' && 'C'):
      $attendence->value =='Fi.C.W';
      break;
    case ('five' && 'D'):
      $attendence->value =='Fi.D.W';
      break;
    case ('six' && 'A'):
      $attendence->value =='S.A.W';
      break;
    case ('six' && 'B'):
      $attendence->value =='S.B.W';
      break;
    case ('six' && 'C'):
      $attendence->value =='S.C.W';
      break;
    case ('six' && 'D'):
      $attendence->value =='S.D.W';
      break;
    case ('seven' && 'A'):
      $attendence->value =='Se.A.W';
      break;
    case ('seven' && 'B'):
      $attendence->value =='Se.B.W';
      break;
    case ('seven' && 'C'):
      $attendence->value =='Se.C.W';
      break;
    case ('seven' && 'D'):
      $attendence->value =='Se.D.W';
      break;
    case ('eight' && 'A'):
      $attendence->value =='E.A.W';
      break;
    case ('eight' && 'B'):
      $attendence->value =='E.B.W';
      break;
    case ('eight' && 'C'):
      $attendence->value =='E.C.W';
      break;
    case ('eight' && 'D'):
      $attendence->value =='E.D.W';
      break;
    case ('nine' && 'A'):
      $attendence->value =='Ni.A.W';
      break;
    case ('nine' && 'B'):
      $attendence->value =='Ni.B.W';
      break;
    case ('nine' && 'C'):
      $attendence->value =='Ni.C.W';
      break;
    case ('nine' && 'D'):
      $attendence->value =='Ni.D.W';
      break;
    case ('ten' && 'A'):
      $attendence->value =='Te.A.W';
      break;
    case ('ten' && 'B'):
      $attendence->value =='Te.B.W';
      break;
    case ('ten' && 'C'):
      $attendence->value =='Te.C.W';
      break;
    case ('ten' && 'D'):
      $attendence->value =='Te.D.W';
      break;
    }
    $attendence->save();
    
       return 'successful';
    

//     $extensions = array("JPEG","JPG","PNG","GIF");
// // dd($request->upload_pics);
//     $result = array($request->file('upload_pics')->getClientOriginalExtension());
//     $file=$request->file('upload_pics');
//     $file_name= $file->getClientOriginalName();
//     $destinationPath = $file->move(public_path('/Pics_folder'),$file_name);
      
//     if(in_array($result[0],$extensions)){
    // $validator = Validator::make($request->file('upload_pics'), [
    //         'resume'   => 'mimes:JPEG,JPG,PNG,GIF'
    //     ]);
    
    break;
    case 'Docs_save': 
    $teacher = Auth::User();
    $attendence = new Attendence();
    $extensions = array("DOC","DOCX","PPT","PPTX","TXT");

    $result = array($request->file('upload_docs')->getClientOriginalExtension());
    $file=$request->file('upload_docs');
    $file_name= $file->getClientOriginalName();
    $destinationPath = $file->move(public_path('/Documents_folder'),$file_name);
      
    if(in_array($result[0],$extensions)){
        $attendence->written_notes =$file_name;
    $attendence->class=$teacher->class;
    $attendence->section=$teacher->section;
    $attendence->teacher_name=$teacher->name;
    switch($teacher->class && $teacher->section) {

    case ('playgroup' && 'A'):
      $attendence->value =='P.A.W';
      break;
    case ('playgroup' && 'B'):
      $attendence->value =='P.B.W';
      break;
    case ('playgroup' && 'C'):
      $attendence->value =='P.C.W';
      break;
    case ('playgroup' && 'D'):
      $attendence->value =='P.D.W';
      break;
    case ('nersury' && 'A'):
      $attendence->value =='N.A.W';
      break;
    case ('nersury' && 'B'):
      $attendence->value =='N.B.W';
      break;
    case ('nersury' && 'C'):
      $attendence->value =='N.C.W';
      break;
    case ('nersury' && 'D'):
      $attendence->value =='N.D.W';
      break;
    case ('prep' && 'A'):
      $attendence->value =='Pr.A.W';
      break;
    case ('prep' && 'A'):
      $attendence->value =='Pr.A.W';
      break;
    case ('prep' && 'A'):
      $attendence->value =='Pr.A.W';
      break;
    case ('prep' && 'A'):
      $attendence->value =='Pr.A.W';
      break;
    case ('one' && 'A'):
      $attendence->value =='O.A.W';
      break;
      case ('one' && 'B'):
      $attendence->value =='O.B.W';
      break;
      case ('one' && 'C'):
      $attendence->value =='O.C.W';
      break;
      case ('one' && 'D'):
      $attendence->value =='O.D.W';
      break;
      case ('two' && 'A'):
      $attendence->value =='T.A.W';
      break;
      case ('two' && 'B'):
      $attendence->value =='T.B.W';
      break;
    case ('two' && 'C'):
      $attendence->value =='T.C.W';
      break;
    case ('two' && 'D'):
      $attendence->value =='T.D.W';
      break;
    case ('three' && 'A'):
      $attendence->value =='Th.A.W';
      break;
    case ('three' && 'B'):
      $attendence->value =='Th.B.W';
      break;
    case ('three' && 'C'):
      $attendence->value =='Th.C.W';
      break;
    case ('three' && 'D'):
      $attendence->value =='Th.D.W';
      break;
    case ('four' && 'A'):
      $attendence->value =='F.A.W';
      break;
    case ('four' && 'B'):
      $attendence->value =='F.B.W';
      break;
    case ('four' && 'C'):
      $attendence->value =='F.C.W';
      break;
    case ('four' && 'D'):
      $attendence->value =='F.D.W';
      break;
    case ('five' && 'A'):
      $attendence->value =='Fi.A.W';
      break;
    case ('five' && 'B'):
      $attendence->value =='Fi.B.W';
      break;
    case ('five' && 'C'):
      $attendence->value =='Fi.C.W';
      break;
    case ('five' && 'D'):
      $attendence->value =='Fi.D.W';
      break;
    case ('six' && 'A'):
      $attendence->value =='S.A.W';
      break;
    case ('six' && 'B'):
      $attendence->value =='S.B.W';
      break;
    case ('six' && 'C'):
      $attendence->value =='S.C.W';
      break;
    case ('six' && 'D'):
      $attendence->value =='S.D.W';
      break;
    case ('seven' && 'A'):
      $attendence->value =='Se.A.W';
      break;
    case ('seven' && 'B'):
      $attendence->value =='Se.B.W';
      break;
    case ('seven' && 'C'):
      $attendence->value =='Se.C.W';
      break;
    case ('seven' && 'D'):
      $attendence->value =='Se.D.W';
      break;
    case ('eight' && 'A'):
      $attendence->value =='E.A.W';
      break;
    case ('eight' && 'B'):
      $attendence->value =='E.B.W';
      break;
    case ('eight' && 'C'):
      $attendence->value =='E.C.W';
      break;
    case ('eight' && 'D'):
      $attendence->value =='E.D.W';
      break;
    case ('nine' && 'A'):
      $attendence->value =='Ni.A.W';
      break;
    case ('nine' && 'B'):
      $attendence->value =='Ni.B.W';
      break;
    case ('nine' && 'C'):
      $attendence->value =='Ni.C.W';
      break;
    case ('nine' && 'D'):
      $attendence->value =='Ni.D.W';
      break;
    case ('ten' && 'A'):
      $attendence->value =='Te.A.W';
      break;
    case ('ten' && 'B'):
      $attendence->value =='Te.B.W';
      break;
    case ('ten' && 'C'):
      $attendence->value =='Te.C.W';
      break;
    case ('ten' && 'D'):
      $attendence->value =='Te.D.W';
      break;
    }
    $attendence->  save();
    
    }else{
       echo "only DOC, DOCX, TXT, PPT, PPTX file trequired";
    }
    return 'successful';
  break;
  }
}
  public function notes(){

    return view('theme.teacher.notes');
  }
  public function upload_notes(){

    return view('theme.teacher.upload_notes');
  }
  public function upload_videos(){
    return view('theme.teacher.upload_videos');
  }
  public function upload_books(){
    return view('theme.teacher.upload_books');
  }
  public function view_notes(){
    return view('theme.teacher.view_notes');
  }
  public function view_videos(){
    return view('theme.teacher.view_videos');
  }
  public function view_books(){
    return view('theme.teacher.view_books');
  }
}

