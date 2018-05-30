<?php

namespace App\Http\Controllers;

use App\AttendanceSlot;
use App\Student;
use App\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendController extends Controller
{
    //
    public function showSlot()
    {
        return view("listSlot")->with("list", AttendanceSlot::all());
    }

    public function showAttend($id, $class)
    {

        $listStudent = StudentClass::where('classId', $class)->get();
        $listSt = array();
        $attSlot = DB::table('attendance_slots')->where('attendance_slots.id', $id)
        ->join('student_classes', 'attendance_slots.classId', '=', 'student_classes.classId')
        ->join('students', 'students.rollNumber', '=', 'student_classes.rollNumber')
        ->get();


//
//        foreach ($listStudent as $student){
//            $st = Student::where('rollNumber', $student->rollNumber)->get();
//            if ($st != null){
//                array_push($listSt, $st);
//            }
//        }




        return view("attend")->with("listStudent", $attSlot);
    }
}
