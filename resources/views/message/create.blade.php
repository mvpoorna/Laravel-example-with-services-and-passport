@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Message</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ url('/') }}/messages" method="POST">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="form-group">
                            <label class="label control-label col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label control-label col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success" onclick="this.form.submit(); this.disabled=true; this.value='Sending…';">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection