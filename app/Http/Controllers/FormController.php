<?php

namespace App\Http\Controllers;
use App\Models\Form;
use App\Mail\Testmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FormController extends Controller
{
    public function index(){
        $details = Form::orderBy('id','desc')->paginate(5);
        return view('forms.index' , compact('details'));
    }

    public function store(Request $request)
    {
    $data = new Form();

    $data->name = $request->input('name');
    $data->lastname = $request->input('lastname');
    $data->age = $request->input('age');
    $data->contactnum = $request->input('contactnum');

    if ($request->hasFile('imagefile')) {
        $image = $request->file('imagefile');
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $data->imagefile = $profileImage;
    }

    if($request->hasFile('resume')){
        $resume = $request->file('resume');
        $profile = date('YmdHis') . '.' . $resume->getClientOriginalExtension();
        $destination = 'imagess/';
        $resume->move($destination, $profile);
        $data->resume = $profile;
    }

    $data->save();  

    $mailings = [
        'name' => $data->name,
        'age' => $data->age,
        'contactnum' => $data->contactnum,
        'imagefile' => $data->imagefile,
        'resume' => $data->resume,
        'title' => 'Mail from Laravel',
        'body' => 'This is a test email from Laravel using Gmail SMTP.',
        'sender' => 'Sharmila Gunasekaran',
        'date' => '12-02-2024',
    ];

    $recipients = ['sharmiguna2627@gmail.com', 'sharmilaguna27@gmail.com'];

    Mail::to($recipients)
        ->send(new Testmail($mailings));

    return redirect()->route('indexpage');
    }


    public function create(){
        return view('forms.create');
    }
}
