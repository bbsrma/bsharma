<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Visitor;
use App\Message;
use URL;
use Carbon\Carbon;

class VisitorController extends Controller
{
    //
    public function getIp(Request $request){

    	//return $request->header('User-Agent');

    		$visitor= new Visitor;
            $visitedurl= URL::full();
            //save url in database

    		$ipaddress= $request->ip();
    		
    		$visitor->ip=$ipaddress;
            $visitor->name=$visitedurl;


    		$visitor->save();

    		return view('welcome')->with('ipaddress',$ipaddress);


    }
    public function sendmessage(Request $request){

    	//return 'test view';
    		$message= new Message;
    		$message->name=$request->get('name');
    		$message->email=$request->get('email');
    		$message->message=$request->get('message');
    		$message->save();

    		//return $message;
            //return Redirect::route('clients.show, $id')->with( ['data' => $data] );
            //return redirect()->back();
             // here I would just use "->with([$category, $topics, $message])"
            //return redirect('welcome')->with(compact('message'));

            //return redirect('/')->with('message', 'Profile updated!');
    		return redirect('/')->with('message',$message);


    }
    public function showform(){
        

    	return view('imageform');
    }
    public function uploadimage(Request $request ){
    	//Storage::makeDirectory('test directories');

    	//$path = $request->file('img')->store('/test directories/');
        $file=$request->file('img');
        $filename=$file->getClientOriginalName();
        $path = $request->file('img')->storeAs('test directories1', $filename );

    	return $path;

		$files = Storage::files('upload');
		return $files;
    }
}
