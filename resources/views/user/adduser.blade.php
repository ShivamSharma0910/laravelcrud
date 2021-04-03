@extends('layout')
@section('adduser')

<div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add User</h3></div>
                                    <div class="card-body">
                                        <form action ="{{url('adduserd')}}" method="post" enctype="multipart/form-data">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" id="first_name" value="{{ old('first_name') }}" name="first_name"  type="text" placeholder="Enter first name" />
                                                        @if ($errors->has('first_name'))
                                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="last_name" name="last_name" value="{{ old('last_name') }}"  type="text" placeholder="Enter last name" />
                                                        @if ($errors->has('last_name'))
                                                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="email" name="email" value="{{ old('email') }}"   type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                                @if ($errors->has('email'))
                                               <span class="text-danger">{{ $errors->first('email') }}</span>
                                               @endif
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Age</label>
                                                        <input class="form-control" type="date" value="{{ old('age') }}" id="age" name="age">
                                                        @if ($errors->has('age'))
                                                        <span class="text-danger">{{ $errors->first('age') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="startdate">Start Date</label>
                                                        <input class="form-control" type="date" value="{{ old('startdate') }}"  id="startdate" name="startdate">
                                                        @if ($errors->has('startdate'))
                                                        <span class="text-danger">{{ $errors->first('startdate') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Salary</label>
                                                        <input class="form-control" type="text"  id="salary" name="salary">
                                                        @if ($errors->has('salary'))
                                                        <span class="text-danger">{{ $errors->first('salary') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">User Profile Picture</label>
                                                        <input type="file" class="form-control-file" id="uprofilepic" name="uprofilepic">
                                                        @if ($errors->has('uprofilepic'))
                                                        <span class="text-danger">{{ $errors->first('uprofilepic') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                         @if(session('failed'))
                                        <div class="text-danger">
                                        {{session('failed')}}
                                        </div>
                                        @endif  
                                        @if(session('status'))
                                        <div class="text-success">
                                        {{session('status')}}
                                        </div>
                                        @endif 
                                            <div class="form-group mt-4 mb-0">
                                             <input type='submit'class="btn btn-primary btn-block"  value = "Add User" />
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@stop