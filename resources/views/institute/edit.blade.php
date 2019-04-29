@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h1>Edit institute details</h1> </div>
                <br>
                <form action="{{ route('institute.update', $institute->id) }}" class="form" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <?php // TODO: Institute details  ?>
                  <div class="row form-group">
                      <div class="col-md-4">
                        <label for="name">Name</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" name='name' class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $institute->name }}" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="tuition_type" class="col-md-4">Type of Tuition</label>

                      <div class="col-md-6">
                          <select class="form-control" name="tuition_type" required>
                            <option value="Private">Private Tuitions</option>
                            <option value="Group">Group Tuitions</option>
                          </select>

                          @if ($errors->has('tuition_type'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('tuition_type') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="board_type" class="col-md-4 ">Board</label>

                      <div class="col-md-6">
                          <select class="form-control" name="board_type" required>
                            <option value="CBSE">CBSE</option>
                            <option value="GSEB">GSEB</option>
                            <option value="ICSE">ICSE</option>
                          </select>

                          @if ($errors->has('board_type '))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('board_type') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="class_from" class="col-md-4">Class from</label>

                      <div class="col-md-6">
                          <select class="form-control" name="class_from">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>

                          @if ($errors->has('class_from'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('class_from') }}</strong>
                              </span>
                          @endif
                      </div>

                      <label for="class_to" class="col-md-4 ">Class to</label>

                      <div class="col-md-6">
                          <select class="form-control" name="class_to">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>

                          @if ($errors->has('class_to'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('class_to') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="email" class="col-md-4">E-Mail Address</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"value="{{ $institute->email }}" required>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="phone" class="col-md-4 ">Contact Number</label>

                      <div class="col-md-6">
                          <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $institute->phone }}" required autofocus>

                          @if ($errors->has('phone'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="mobile" class="col-md-4 ">Mobile Number</label>

                      <div class="col-md-6">
                          <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ $institute->mobile }}" required autofocus>

                          @if ($errors->has('mobile'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('mobile') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="row form-group">
                      <div class="col-md-4">
                        <label for="address">Address</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ $institute->address }}" required>
                      </div>
                  </div>
                  <div class="row form-group">
                      <div class="col-md-4">
                        <label for="location">Location</label>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control" name="location">
                          <option value="Bapunagar">Bapunagar</option>
                          <option value="Kalupur">Kalupur</option>
                          <option value="Shahibaug">Shahibaug</option>
                          <option value="Bodakdev">Bodakdev</option>
                          <option value="Maninagar">Maninagar</option>
                          <option value="Vastrapur">Vastrapur</option>
                          <option value="Ambawadi">Ambawadi</option>
                          <option value="Ellis Bridge">Ellis Bridge</option>
                          <option value="Navrangpura">Navrangpura</option>
                          <option value="Naranpura">Naranpura</option>
                          <option value="Naroda">Naroda</option>
                          <option value="Paldi">Paldi</option>
                          <option value="Bopal">Bopal</option>
                          <option value="Ranip">Ranip</option>
                          <option value="Gota">Gota</option>
                          <option value="Sarkhej">Sarkhej</option>
                          <option value="Vejalpur">Vejalpur</option>
                          <option value="C.G. Road">C.G. Road</option>
                          <option value="Law Garden">Law Garden</option>
                          <option value="Lal Darwaja">Lal Darwaja</option>
                          <option value="Satellite">Satellite</option>
                          <option value="Motera">Motera</option>
                          <option value="Chandkheda">Chandkheda</option>
                          <option value="Odhav">Odhav</option>
                          <option value="Gulbai Tekra">Gulbai Tekra</option>
                          <option value="Memnagar">Memnagar</option>
                          <option value="Shahpur">Shahpur</option>
                          <option value="Thaltej">Thaltej</option>
                          <option value="Sabarmati">Sabarmati</option>
                          <option value="Sabarmati">Sabarmati</option>
                        </select>

                        @if ($errors->has('class_to'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                        @endif
                      </div>
                  </div>
                  <div class="row form-group">
                      <div class="col-md-4">
                        <label for="featured_image">Image</label>
                      </div>
                      <div class="col-md-6">
                        <input type="file" name="featured_image">
                      </div>
                  </div>

                  <div class="row form-group">
                      <div class="col-md-4">
                        <label for="description">Description</label>
                      </div>
                      <div class="col-md-6">
                        <textarea name="description" class="form-control">{{ $institute->address }}</textarea>
                      </div>
                  </div>
                  <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" name="submit" value="Submit" class="btn btn-success btn-block">
                      </div>
                  </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
