<tr id="{{$item->id}}">
<td> {{$item->id+1}}</td>

<td>{{$item->name}}</td>
<td>{{$item->icon}}</td>
<td>{{ isset($item->user) ? $item->user->user_name : '' }}</td>
<td>
    <form action="{{ route($routeName.'.destroy' , ['id' => $item]) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        {{-- <a href="{{ route($routeName.'.edit' , ['id' => $item]) }}" rel="tooltip" title="" class="btn btn-xs btn-info">
            <i class="fa fa-pencil-square-o"></i>
    
        </a> --}}
        <a href="{{ route($routeName.'.edit' , ['id' => $item]) }}" rel="tooltip" title="" class="btn btn-xs btn-info"
            data-original-title="Edit">
            <i class="fa fa-pencil-square-o"></i>
    
        </a>
        <button type="submit" rel="tooltip" title=""  onclick="check()" class="btn btn-xs btn-danger"><i
            class="fa fa-minus"></i></button>
    </form>
</td>
</tr> 