<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
class servicesController extends Controller
{
    public function insertServiceOrder()
    {
    	//start validate
    	$this->validate(request(), [
    		'username' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required|numeric',
    		'message' => 'required'
    	]);
    	//start save in the database
    	$serve = new Services;
    	$serve->username = request('username');
    	$serve->email = request('email');
    	$serve->phone = request('phone');
    	$serve->message = request('message');
    	$serve->save();
    	return back();
    }

    public function servAdmin(Request $request)
    {
        // $all_services = Services::all();
        $all_services = Services::orderBy('id', 'desc')->paginate();
        return view('adminServ', ['services' => $all_services]);
    }
    public function fetchDelsData(){
        $all_dels = Services::onlyTrashed()->orderBy('id', 'desc')->paginate();
        return view('recyleSer', ['deels'=>$all_dels]);
    }

    public function deleteData($id=null){
        if($id != null){
            $del = Services::find($id);
            $del->delete();
        }elseif(request()->has('id') and request()->has('softdelete')){
            Services::destroy(request('id'));
        }elseif(request()->has('id') and request()->has('restore')){
            Services::whereIn('id', request('id'))->restore();
        }
        return back();
    }
}
