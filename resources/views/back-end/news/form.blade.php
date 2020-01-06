 @php $input = "title"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">عنوان الخبر</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
           class="form-control" required>
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
           @enderror
    </div>
 </div>  
 @php $input = "en_title"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> عنوان الخبر بالانجلزي</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
           class="form-control">
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
           @enderror
    </div>
 </div>   
  
 
     
@php $input = "image"; @endphp          
<div class="form-group">
        <label class="col-md-2 control-label">الصورة</label>
        <div class="col-md-10 ls-group-input">
            <input name="{{ $input }}" id="file-3" type="file" multiple="true" >
        </div>
        @error($input)
        <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
        </span>
        @enderror
        <span style="margin-right: 15%">يفضل رفع الصورة 400 * 400 </span>
</div>  
@php $input = "date"; @endphp
 <div class="form-group">
      <label class="col-lg-2 control-label">التاريخ</label>
      <div class="col-lg-10">
          <input type="date" id="date" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
            class="form-control">
            @error($input)
            <span class="invalid-feedback" role="alert" required>
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
      </div>
  </div>    
<label class="col-md-2 control-label">الوصف بالعربي</label>
@php $input = "description"; @endphp
<div class="panel-body no-padding" >
           <textarea class="summernote"style="margin-right: 25%"  name="{{ $input }}"  id="demo"  rows="10" cols="100">
                    {{ isset($row) ? $row->{$input} : '' }}
   </textarea>
</div><br>
@error($input)
<span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
</span>
@enderror

<label class="col-md-2 control-label">الوصف بالانجلزي</label>
@php $input = "en_description"; @endphp
<div class="panel-body no-padding" >
           <textarea class="summernote"style="margin-right: 25%"  name="{{ $input }}"  id="demo"  rows="10" cols="100" >
                    {{ isset($row) ? $row->{$input} : '' }}
   </textarea>
</div><br>
@error($input)
<span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
</span>
@enderror

