<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Image , Auth;
class EmployeeController extends BackEndController
{
    public function __construct(Employee $model)
    {
        parent::__construct($model);
    }
    public function store(Request $request){

        $requestArray = $request->all();
        
        if(isset($requestArray['image']) )
        {
            $fileName = $this->uploadImage($request );
            $requestArray['image'] =  $fileName;
        }
        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , Request $request){
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        if(isset($requestArray['image']) )
        {
            $fileName = $this->uploadImage($request );
            $requestArray['image'] =  $fileName;
        }
        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
}
