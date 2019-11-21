<?php

namespace App\Http\Controllers\Architect;

use App\ProjectFile;

use Input;
use Validator;
use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function getView(){
    	return view('architect/file/uploadfile');
    }

    public function insertFile(){



    	$filetitle=Input::get('file_title');
    	$file= Input::file('filenam');



    	$rules = array(
            'file_title' => 'required',
            'filenam' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg'
            ); 

    	// 'image' => 'required|mimes:jpeg,png,jpg,gif,svg,csv,xls,xlsx,doc,docx|m‌​ax:2048'



        // do the validation ----------------------------------
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);

		  if ($validator->fails()) {

            // redirect our user back with error messages       
            $messages = $validator->messages();
		    // send back to the page with the input data and errors
		    return Redirect::to('uploadfile')->withInput()->withErrors($validator);

		  }else if ($validator->passes()){

		    // checking file is valid.
		    if (Input::file('filenam')->isValid()) {

		      //$destinationPath = 'images/profile/'; // upload path
		     $extension = Input::file('filenam')->getClientOriginalExtension(); // getting image extension
		    $filename = rand(11111,99999).'.'.$extension; // renameing image


		  // uploading file to given path

		    	$destinationPath = '../uploads';//its refers proj/uploads
               // $destinationPath = 'up_file';//its refers proj/public/up_file directry


                $data=array(
                    'file_title' => $filetitle,
                    'file_name' => $filename,
                );


                FileModel::insert($data);


                $upload_success = $file->move($destinationPath, $filename);
                $notification = array(
                    'message' => 'File Uploaded successfully!', 
                    'alert-type' => 'success'
                );

                return Redirect::to('uploadfile')->with($notification);

       
		    }
		    else {
		      // sending back with error message.
		      

                $notification = array(
                        'message' => 'uploaded file is not valid!', 
                        'alert-type' => 'error'
                    );

                return Redirect::to('uploadfile')->with($notification);
		    }
  		}



    }
}
