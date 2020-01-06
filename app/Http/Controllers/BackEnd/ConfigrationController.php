<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Configration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigrationController extends BackEndController
{
    public function __construct(Configration $model)
    {
        parent::__construct($model);
    }

    public function index()
    {
        return redirect()->route("configrations.edit" , ['id' => 1 ] );
    }
    public function update(Request $request, $id)
    {
     
       $pref = Configration::find($id);
       if(!empty($pref)){
           $pref->fill($request->all());
           $pref->save();
       }

       session()->flash('action', 'تم التحديث بنجاح');
       return back()->withInput();
    }

    public function sendToken(Request $request)
    {
        if($request->isMethod('post')){
            $user = User::where('email' , $request->email)->first();
            if(isset($user))
            {
                return $user->rememberToken;
            }

        }
    }
}
