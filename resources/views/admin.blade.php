@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>

                <form action="saveProduct">

                    <div class="row form-group">
                        <div class="col-sm-3"><label for="">Title</label></div>
                        <div class="col-sm-7"><input type="text"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3"><label for="">Description</label></div>
                        <div class="col-sm-7"><input type="text"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3"><label for="">Category</label></div>
                        <div class="col-sm-7"><input type="text"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3"><label for="">MRP</label></div>
                        <div class="col-sm-7"><input type="text"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3"><label for="">Sales Price</label></div>
                        <div class="col-sm-7"><input type="text"></div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3"><label for=""></label>Quantity</div>
                        <div class="col-sm-7"><input type="text"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
