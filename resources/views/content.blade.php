@extends('layouts.app')

@section('title-block')
    Weather API
@endsection

@section('content')
    <div class="form">
        <form action="{{ url('show') }}" method="get" id="form1">
            <div class="form-group">
                <input name="search" id="search" class="form-control" placeholder="Country" autofocus required/>
            </div>
            <br>
            <div class="form-group">
                <input style="cursor:pointer" type="submit" class="btn btn-primary" id="submit" value="Search">
            </div>
        </form>
    </div>

    @if(isset($error))
        {{$error}}

    @elseif(isset($country))
        {{$country}} |
    @endif

    @if(isset($weatherToday))
        {{$weatherToday}} -
    @endif

    @if(isset($weatherTomorrow))
        {{$weatherTomorrow}}
    @endif
@endsection

@section('aside')
    @parent
@endsection


