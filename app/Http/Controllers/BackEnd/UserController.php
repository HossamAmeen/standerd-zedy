<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Image , Auth;

class UserController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request){

        $requestArray = $request->all();
        if(isset($requestArray['password']) )
        $requestArray['password'] =  Hash::make($requestArray['password']);
        if(isset($requestArray['image']) )
        {
            $fileName = $this->uploadImage($request );
            $requestArray['image'] =  $fileName;
        }

        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');

        $data=[
           "message" => "create new account for this email "
        ];
        // Mail::send('front-end.account_mail',$data,function($message) use ($data){

        //     $message->from( "" );
        //     $message->to($request->email);
        //     $message->subject("verification");
        // });

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , Request $request){



        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  Hash::make($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        if(isset($requestArray['image']) )
        {
            $fileName = $this->uploadImage($request );
            $requestArray['image'] =  $fileName;
        }

        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);

        $data=[
            "message" => "update account for this email "
         ];
        //  Mail::send('back-end.account_mail',$data,function($message) use ($data){

        //      $message->from( "" );
        //      $message->to($request->email);
        //      $message->subject("verification");
        //  });

        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
    
    public function editAccount( Request $request)
    {
        $row = $this->model->FindOrFail( Auth::user()->id );
        if($request->isMethod('post')){
           
            $requestArray = $request->all();
            if(isset($requestArray['password']) && $requestArray['password'] != ""){
                $requestArray['password'] =  Hash::make($requestArray['password']);
            }else{
                unset($requestArray['password']);
            }
            // if(isset($requestArray['image']) )
            // {
            //     $fileName = $this->uploadImage($request );
            //     $requestArray['image'] =  $fileName;
            // }
    
            $requestArray['user_id'] = Auth::user()->id;
            $row->update($requestArray);
            session()->flash('action', 'تم التحديث بنجاح');
            return redirect()->back()->withInput();
        }
        $routeName="users";
        $folderName=$routeName;
        return view('back-end.users.edit-account' , compact('routeName' , 'row','folderName'));
        return redirect()->route('users.edit', ['id' => Auth::user()->id]);
    }

}
