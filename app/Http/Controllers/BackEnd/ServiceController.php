<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Image , Auth;
class ServiceController extends BackEndController
{
    public function __construct(Service $model)
    {
        parent::__construct($model);
    }
    public function store(Request $request){
            $requestArray = $request->all();
            $requestArray['user_id'] = Auth::user()->id;
            $item=  $this->model->create($requestArray );
            $routeName = $this->getRouteName();
            return view('back-end.'.$routeName .'.row' , compact('item' , 'routeName'));
        }

        public function update($id , Request $request){
            $row = $this->model->FindOrFail($id);
            $requestArray = $request->all();
            $requestArray['user_id'] = Auth::user()->id;
            $row->update($requestArray);
            session()->flash('action', 'تمت التحديث بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
   
}
