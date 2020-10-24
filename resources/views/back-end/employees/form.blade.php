@php $input = "name"; @endphp
<div class="form-group">
    <label class="col-lg-3 control-label">الاسم</label>
    <div class="col-lg-6">
        <input type="text" class="form-control" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" />
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@php $input = "en_name"; @endphp
<div class="form-group">
    <label class="col-lg-3 control-label"> الاسم بالانجليزي</label>
    <div class="col-lg-6">
        <input type="text" class="form-control" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" />
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@php $input = "jpb"; @endphp
<div class="form-group">
    <label class="col-lg-3 control-label">الوظفية</label>
    <div class="col-lg-6">
        <input type="text" class="form-control" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" />
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@php $input = "en_job"; @endphp
<div class="form-group">
    <label class="col-lg-3 control-label"> الوظفية بالانجليزي</label>
    <div class="col-lg-6">
        <input type="text" class="form-control" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" />
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
        <input name="{{ $input }}" id="file-3" type="file">
    </div>
    @error($input)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <span style="margin-right: 15%">يفضل رفع الصوره 400 * 400 </span>
</div>
