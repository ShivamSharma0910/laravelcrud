@extends('layout')
@section('viewuser')
<style>
img {
  border-radius: 100%;
}
</style>

<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                          
                            <div class="card-body">
                                <div class="table-responsive">
                                <div class="text-right">
                                <a class="nav-link" href="{{url('adduser')}}">Add User</a>
                                  
                                </div>  </br>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Salary</th>
                                                <th>Profile Picture</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($users as $user)
                                        </thead>
                                        <tbody>
                                           	

                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->fname }}</td>
                                                <td>{{ $user->lname }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->age }}</td>
                                                <td>{{ $user->salary }}</td>
                                                <td> <img src="{{ asset('' .$user->uprofilepic) }}"  style="width:200px"/> </td>
                                                <td><a href ="{{url('edituser/'. $user->id )}}">Edit</a>&nbsp&nbsp&nbsp<a href ="{{url('delete/'. $user->id)}}">Delete</a></td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>

@stop