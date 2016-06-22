<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;

use App\Http\Requests;

class AdminController extends Controller
{

    public function index(){
    	return view('pages.admin.index');
    }

    /************************************************************/
    public function addCmsPage(){
        return view('pages.admin.addcmspage');
    }
    
    public function postAddCmsPage(Request $request){
        $data = $request->all();
        $data['status'] = 1;
        unset($data['_token']);

        $validator = Validator::make($data, [
            'title' => 'required',
            'description' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'detail' => 'required',
            'position' => 'required',
            'order' => 'required',
        ]);
        
        if(count($validator->errors()->all()) > 0){
            return back()->withInput()->withErrors($validator);
        }else{
            if(Page::create($data)){
                return redirect()->route('publishedCmsPages')->with('alert-success', 'Page is created successfully');
            }
        }

    }

    /************************************************************/
    public function publishedCmsPages(){
    	return view('pages.admin.publishedcmspages');
    }

    /************************************************************/
    public function draftCmsPages(){
    	return view('pages.admin.draftcmspages');
    }

    /************************************************************/

    public function login(){
    	return view('pages.admin.login');
    }



}
