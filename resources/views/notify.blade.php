@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard'
])

@section('content') 
    @foreach ($subscriptions as $sub)
        <form action="/admin/sendNotif/5" method="POST">
            Sub #{{$sub->id}}
            <input class="py-1 my-2" type="text" name="title" placeholder="title">
            <input class="py-1 my-2" type="text" name="body" placeholder="body">
            <input class="py-1 my-2" type="text" name="url" placeholder="url">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="btn btn-primary my-2" type="submit" value="Send">
        </form>
    @endforeach
@endsection