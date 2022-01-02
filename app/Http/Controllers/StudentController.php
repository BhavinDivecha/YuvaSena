<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;
use App\Model\District;
use App\Model\Vidhansabha;
use App\Model\Taluka;

use Yajra\DataTables\DataTables;
use PDF;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $students = Student::all();

            return Datatables::of($students)
               ->addColumn('district', function ($student) {
                    return $student->district->name;
                })->addColumn('vidhansabha', function ($student) {
                    return $student->vidhansabha->name;
                })->addColumn('taluka', function ($student) {
                    return $student->taluka->name;
                })->make(true);
        }

        return view('student.index', [ 'students' => Student::all() ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::pluck('name','id')->all();
        $vidhansabha = Vidhansabha::pluck('name','id')->all();
        $taluka = Taluka::pluck('name','id')->all();
        return view('student.register',compact('districts','vidhansabha','taluka'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone_no' => 'required|min:10|unique:students',
            'email' => 'required|email|max:255|unique:students',
        ]);
        // $district = District::find($request->district_id);
        // $latestdistrict = District::orderBy('created_at','DESC')->first();
        // $hall_ticket_number = $district->prefix.str_pad($latestdistrict->id + 1, 4, "0", STR_PAD_LEFT);
        $hall_ticket_number = "001";
        $data = $request->except('_token');
        $data['hall_ticket_number'] = $hall_ticket_number;
        $data['address'] = $data['address_line_1'] ." ".$data['address_line_2'];
        
        $student = Student::create($data);
        return redirect('success/'.$student['id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Student::find($id);
        $categories = QuestionCategory::pluck('name','id')->all();
        $types = QuestionType::pluck('name','id')->all();
        $difficulty = ['easy','medium','hard'];
        return view('question.edit',compact('question','categories','types','difficulty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        \DB::beginTransaction();

            $question = Student::find($id);
            $data = $request->all();
            Student::find($id)->update($data);

            OptionMaster::where('question_id',$id)->delete();
            foreach ($request->option as $key => $option) {
                $optionInfo = [];
                $optionInfo['question_id'] = $id;
                $optionInfo['option'] = $option;
                if($request->correct_answer == $key)
                    $optionInfo['is_correct'] = 1;
                else
                    $optionInfo['is_correct'] = 0;
                
                OptionMaster::create($optionInfo);
            }


        \DB::commit();
        return redirect('admin/question-master');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hallTicket($id)
    {
        
        $student = Student::find($id);
        return view('success',compact('student'));
        return $student;
    }

    public function hallTicketDownload($id)
    {
        $student = Student::find($id);
        $pdf = PDF::loadView('hall_ticket',compact('student'));
    
        return $pdf->download('hall_ticket.pdf');

    }

    public function importData()
    {
        $district = array(
          array('id' => '1','name' => 'District 1','prefix' => 'DA','created_at' => NULL,'updated_at' => NULL),
          array('id' => '2','name' => 'District 2','prefix' => 'DB','created_at' => NULL,'updated_at' => NULL)
        );

        foreach ($district as $key => $value) {
            District::create($value);
        }


        $taluka = array(
          array('id' => '1','name' => 'Taluka 1','center_name' => 'Center 1','center_code' => '001','created_at' => NULL,'updated_at' => NULL),
          array('id' => '2','name' => 'Taluka 2','center_name' => 'Center 2','center_code' => '002','created_at' => NULL,'updated_at' => NULL)
        );

        foreach ($taluka as $key => $value) {
            Taluka::create($value);
        }


        $users = array(
          array('id' => '2','name' => 'Admin','email' => 'admin@admin.com','email_verified_at' => NULL,'password' => '$2y$10$oJ1FDR3rrTDHoeFh6/IHJ.fFf1u7WD9I0t5RjDemv47H8/h47kRTi','remember_token' => NULL,'created_at' => '2021-12-30 10:37:17','updated_at' => '2021-12-30 10:37:17')
        );

        foreach ($users as $key => $value) {
            User::create($value);
        }

        /* `mcqtest`.`vidhansabha` */
        $vidhansabha = array(
          array('id' => '1','name' => 'Vidhansabha 1','created_at' => NULL,'updated_at' => NULL),
          array('id' => '2','name' => 'Vidhansabha 2','created_at' => NULL,'updated_at' => NULL)
        );

        foreach ($vidhansabha as $key => $value) {
            Vidhansabha::create($value);
        }
    }
}
