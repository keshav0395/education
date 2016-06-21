<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
