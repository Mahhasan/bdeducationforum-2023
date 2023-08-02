<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Participant;
use Illuminate\Support\Facades\Validator;

class ParticipantsController extends Controller
{
    
    //Create participants
    public function create_participants(){
        return view('create_participants');
    }

    public function validator(array $request)
    {
        return Validator::make($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:participants'],
            'vc_email' => ['required', 'string', 'vc_email', 'max:255', 'unique:participants'],
        ]);
    }
    //Store participants
    public function store_participants(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:participants'],
            
        ]);
        $participants = Participant::create([
            'institute_name' => $request->institute_name,
            'address' => $request->address,
            'email' => $request->email,
            'vc_name' => $request->vc_name,
            'vc_email' => $request->vc_email,
            'vc_cell' => $request->vc_cell,
            'contact_name' => $request->contact_name,
            'contact_cell' => $request->contact_cell,
            'message' => $request->message,
        ]);
        return redirect('/')->with('success','Registration  Successfully');
    }

    //Store participants by admin
    public function store_participants_byadmin(Request $request)
    {
        $participants = Participant::create([
            'institute_name' => $request->institute_name,
            'address' => $request->address,
            'email' => $request->email,
            'vc_name' => $request->vc_name,
            'vc_email' => $request->vc_email,
            'vc_cell' => $request->vc_cell,
            'contact_name' => $request->contact_name,
            'contact_cell' => $request->contact_cell,
            'message' => $request->message,
        ]);
        return redirect('/home')->with('success','Registration  Successfully');
    }
}