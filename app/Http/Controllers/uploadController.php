<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{  
    public function store(Request $request)  
 {  
    $company_name=$request('company_name');
    $contact_person=$request('contact_person');
    $email = $request('email');
    $phone = $request('phone');
    $address_address=$request('address_address');
    $address_latitude=$request('address_latitude');
    $address_longitude=$request('address_longitude');

    $image=new image;  
    if($request->hasfile('image'))
    {  
        $file=$request->file('image');  
        $extension=$file->getClientOriginalExtension();  
        $filename=time().'.'.$extension;  
        $file->move('storage/app/public/users/images/',$filename);  
        $image->image=$filename;  
     }  
    else  
    {  
        return $request;  
        $image->image='';  
    }  
    if($request->hasfile('file'))
    {
        $file_f=$request->file('file');
        $extension=$file_f->getClientOriginalExtension();
        $fname=time().'.'.$extension;
        $file_f->move('storage/apppublic/users/files/',$fname);
        $file->file=$file_f;
    }
    else
    {
        return $request;
        $file->file='';
    }
    $image->save();  
    $file->save();

    return $path;
    return view('welcome');  
 }  
 }  
