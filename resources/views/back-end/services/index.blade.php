@extends('back-end.layout.app')
@php $row_num = 1; $pageTitle = "خدماتنا " @endphp
@section('title')
{{$pageTitle}}
@endsection

@section('content')

@component('back-end.layout.header')

@slot('nav_title')
{{$pageTitle}}
{{-- <a href="{{ route($routeName.'.create') }}">
<button class="alert-success"> <i class="fa fa-plus"></i> </button>
</a> --}}
@endslot
@endcomponent
<div class="alert alert-success" id="messageId" style="display: none">
    <strong>تمت الاضافه بنجاح</strong>
</div>
<div id="error">

</div>
<form id="addForm">

    <div class="col-md-12">
        <div class="row">
            @php $input = "name"; @endphp
            <div class="col-md-2 col-sm-4">
                <label class="">الخدمة</label>
                <input type="text" class="form-control ls-group-input" name="{{ $input }}"
                    value="{{isset($row) ? $row->{$input}:Request::old($input)}}" required>
            </div>
            @php $input = "en_name"; @endphp
            <div class="col-md-2 col-sm-4">
                <label class=""> الخدمة بالانجليزي</label>
                <input type="text" class="form-control ls-group-input" name="{{ $input }}"
                    value="{{isset($row) ? $row->{$input}:Request::old($input)}}" required>
            </div>
            @php $input = "icon"; @endphp
            <div class="col-md-2 col-sm-4">
                <label class="">icon</label>
                <input type="text" class="form-control ls-group-input" name="{{ $input }}"
                    value="{{isset($row) ? $row->{$input}:Request::old($input)}}" placeholder="fas fa-book" required>
            </div>


        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-4">
            <button class="btn btn-info col-md-2" type="submit"> حفظ </button>
        </div>
    </div>
</form><br><br><br><br><br><br>
@component('back-end.shared.table' )
@if (session()->get('action') )
<div class="alert alert-success">
    <strong>{{session()->get('action')}}</strong>
</div>
@endif
<table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
    <thead>
        <tr>
            <th>#</th>
            <th>الخدمة</th>
            <th>الرمز</th>


            <th>المستخدم</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="cont-data">
        @foreach ($rows as $key => $item)
        <tr>
            <td> {{$key+1}}</td>
            <td>{{$item->name}}</td>
            <td><i class="{{$item->icon}}"></i>{{$item->icon}}</td>
            <td>{{ isset($item->user) ? $item->user->user_name : '' }}</td>
            <td>
                @include('back-end.shared.buttons.delete')
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endcomponent
@endsection
@push('js')
<script>
    $.ajaxSetup({
                    headers:
                    {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


        $("#addForm").submit(function(e)
        {
            e.preventDefault();
            var formData  = new FormData(jQuery('#addForm')[0]);
            // console.log(formData);
            $.ajax({
                url:"{{route($routeName.'.store')}}",
                type:"POST",
                data:formData,
                contentType: false,
                processData: false,
                success:function(dataBack)
                {

                    console.log("success");
                    document.getElementById("addForm").reset();
                    document.getElementById("messageId").style.display="block";
                    // showSelectReasonExchange('reasonExchange',  document.getElementById("in_or_out")) ;
                    
                    $(".cont-data").prepend(dataBack)
                    

                }, error: function (xhr, status, error)
                {

                    console.log("errror " + xhr.responseJSON.errors);
                    $.each(xhr.responseJSON.errors,function(key,item)
                    {

                        // $("#error").html("<li class='alert alert-danger text-center p-1'>"+ item +" </li>");
                    })
                }
            })

        })




</script>
@endpush