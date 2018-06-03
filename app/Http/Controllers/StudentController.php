<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
class StudentController extends Controller
{
    public function index()
    {
        return view('student/index');

    }
    public function store(Request $request)
    {

        if($request->isMethod('POST'))
        {
            $name=$request->input('name');
            $gender=$request->input('gender');
            $phonenumber=$request->input('phonenumber');
            $mail=$request->input('mail');
            $schoolid=$request->input('schoolid');
            $college=$request->input('college');
            $major=$request->input('major');
            $this->validate($request, [
                'name' => 'required|min:2',
                'gender' => 'required|max:1|min:1',
                'phonenumber' => 'required|digits:11|unique',
                'mail' => 'required',
                'schoolid' => 'required|min:8',
                'college' => 'required|max:12',
                'major' => 'required|max:12',
            ]);
            if($phonenumber!=null)
            {
                DB::table('student')->where('phonenumber','$phonenumber')->update([
                    'name'=>'$name',
                    'gender'=>'$gender',
                    'phonenumber'=>'$phonenumber',
                    'mail'=>'$mail',
                    'shcoolid'=>'$schoolid',
                    'college'=>'$college',
                    'major'=>'$major',
                    'extra'=>'$extra'
                ]);
            }
            else
            {
                DB::table('student')->insert(
                    [
                        'name' => '$name',
                        'gender' => '$gender',
                        'phonenumber' => '$phonenumber',
                        'mail' => '$mail',
                        'schoolid' => '$schoolid',
                        'college' => '$college',
                        'major' => '$major',
                        'extra' => '$extra'
                    ]
                );
            }
            return redirect(url('student/index'));
        }
    }
    public function show()
    {
        $students=DB::select('select * from student');
        dd($students);
    }
}