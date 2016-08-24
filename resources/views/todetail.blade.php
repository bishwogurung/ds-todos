@extends('layouts.app')

@section('content')


<div class="panel-body">
    @include('common.errors')
</div>

<div class="panel panel-default">
    <div class="panel-heading">
    <h1 style="color:red">ToDo Details<h1>
    </div>

    <div class="panel-body">

        <h2 style="color:blue">{{$id->name}}<h2>
        <h3 style="color:orange">{{$id->description}}</h3>
    </div>
</div>

@endsection