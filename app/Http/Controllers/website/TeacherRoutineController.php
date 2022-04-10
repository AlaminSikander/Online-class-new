<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\Exam;
use App\Models\Subject;


class TeacherRoutineController extends Controller
{
    public function routine()
    {
        
        $data=Routine::where('subject_id',auth()->user()->subject_id)->get();
        return view('website.layouts.teacher_routine',compact('data'));
    }

    
    public function exam()
    {
        
        $exam=Exam::where('subject_id',auth()->user()->subject_id)->get();
        return view('website.layouts.teacher_exam',compact('exam'));
    }

}
