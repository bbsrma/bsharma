<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Visitor;
use App\Message;
class ApiController extends Controller
{
    //
    public function getdata(Request $request ){

    		$visitors = Visitor::all();

    		return Response::json($visitors);
}
	public function postdata(Request $request){

			//$data = $request->json()->all();

			
    if($request->ajax()){
        $data = json_encode($request->all());

        $parse = json_decode($data);
        
    }

			// return response($data)
   //          ->header('Content-Type', 'application/json');
			//return Response::json($data);

		//$response = $next($request);
		// return $request->all();

  //       return $response;


	}


}
