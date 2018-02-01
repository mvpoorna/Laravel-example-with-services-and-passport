@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Messages</div>
                <div class="panel-body">
                    <a href="{{ url('/') }}/messages/create" class="text-right btn btn-primary">Create</a>
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $msg)
                                <tr>
                                    <td>{{$msg->id}}</td>
                                    <td>{{$msg->email}}</td>
                                    <td>{{$msg->name}}</td>
                                    <td class="text-center"><a href="{{ url('/') }}/messages/{{$msg->id}}/edit"><span class="fa fa-pencil"></span></a></td>
                                    <td class="text-center">
                                        <form action="{{ url('/') }}/messages/{{$msg->id}}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <button type="submit" href=""><span class="fa fa-trash"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection