@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h1>Add your institute</h1> </div>
                <br>
                <form action=" ">

                    <div class="row form-group">
                        <div class="col-sm-3"><label for="">Title</label></div>
                        <div class="col-sm-7"><input type="text"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3"><label for="">Description</label></div>
                        <div class="col-sm-7"><input type="text"></div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
