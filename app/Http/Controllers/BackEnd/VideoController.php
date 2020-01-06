<?php

namespace App\Http\Controllers\BackEnd;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\BackEnd\VideoRequest;
use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends BackEndController
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }
    public function store(VideoRequest $request){
            $requestArray = $request->all();
            
          //  return $request->video;
            if($request->hasFile('video'))
          {
            $fileName = $this->uploadvideo( $request , 800 , 600 );
            // return $fileName;
            if($fileName != false)

            $requestArray['video'] =  $fileName;
          }
           
            $requestArray['user_id'] = Auth::user()->id;
            $this->model->create($requestArray);
            session()->flash('action', 'تم الاضافه بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
    
        public function update($id , VideoRequest $request){
            $requestArray = $request->all();
            if($request->hasFile('video'))
            {
              $fileName = $this->uploadvideo( $request , 800 , 600 );
              if(isset($requestArray['video']) )
              $requestArray['video'] =  $fileName;
            }

           
            $row = $this->model->FindOrFail($id);
           
           
            $requestArray['user_id'] = Auth::user()->id;
            $row->update($requestArray);
            session()->flash('action', 'تم التحديث بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
}
