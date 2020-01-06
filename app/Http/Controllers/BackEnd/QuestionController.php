<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Requests\BackEnd\QuestionRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;

use Auth;
class QuestionController extends BackEndController
{
    public function __construct(Question $model)
    {
        parent::__construct($model);
    }
    public function store(QuestionRequest $request){
      
        // return $request->all();
        $requestArray = $request->all();
        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);

        session()->flash('action', 'تم الاضافه بنجاح');
        
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , QuestionRequest $request){
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
    
}
