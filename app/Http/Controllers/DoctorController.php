<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;

use Notification;

use App\Notifications\SendEmailNotification;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors=Doctor::all();
        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'speciality' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female', // Adjust the possible values as needed
            'room_num' => 'required|string|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed file types and size as needed
        ]);
        
        
        
        $doctor = new Doctor;
        $doctor->id = $request->doctor;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->gender = $request->gender;
        $doctor->room_num = $request->room_num;
        
        if ($request->hasFile('image')) {
            $doctor->image = $request->file('image')->store('doctor');
        } else {
            return redirect()->back()->with('error', 'Please upload an image')->withInput();
        }

        $doctor->save();
        return redirect('/doctors')->with('message', 'Doctor added successfully');

    }
    

    public function change_status(Doctor $doctor)
    {
        //
        if($doctor->status==1)
        {
            $doctor->update(['status'=>0]);
        }
        else
        {
            $doctor->update(['status'=>1]);
        }

        return redirect()->back()->with('message','Doctor status updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $doctor=Doctor::find($id);
        return view('admin.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
       
        return view('admin.doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'speciality' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'room_num' => 'required|string|max:50',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed file types and size as needed
        ]);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->gender = $request->gender;
        $doctor->room_num = $request->room_num;
        
        if ($request->hasFile('image')) {
            
            $doctor->image = $request->file('image')->store('doctor');
        }

        $doctor->save();
        return redirect('/doctors')->with('message', 'Doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
        $delete = $doctor->delete();

        if($delete)
            return redirect()->back()->with('message','Doctor deleted successfully');
    }

    public function showappointment(){
        $appointments=Appointment::all();
        return view('admin.appointment.index', compact('appointments'));
    }

    public function decline($id)
    {
        $data = Appointment::find($id);
        $data->delete();

        if($data)
        return redirect()->back()->with('message','Doctor deleted successfully');
  
    }

    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status='approved';

        $data->save();
        return redirect()->back()->with('message','Patient approved successfully');
  
    }

    public function declined($id)
    {
        $data = Appointment::find($id);
        $data->status='declined';

        $data->save();
        return redirect()->back()->with('message','Patient Declined successfully');
  
    }

    public function emailview($id)
    {
        $data = Appointment::find($id);
        return view('admin.email_view',compact('data'));
    }

    public function sendemail(Request $request, $id)
    {
        $data = Appointment::find($id);

        $details = [
            'greeting' => $request->greeting,

            'body' => $request->body,

            'actiontext' => $request->actiontext,

            'actionurl' => $request->actionurl,

            'endpart' => $request->endpart,

        ];

        Notification::send($data,new SendEmailNotification($details));
        return redirect()->back()->with('message','Notification sent successfully');
    }

    
}
