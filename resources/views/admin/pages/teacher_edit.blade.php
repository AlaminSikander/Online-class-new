@extends('admin.master')
@section('content')


<div class="content container-fluid">

<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Update Teachers</h3>
            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.teacher.update',$users->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title"><span>Basic Details</span></h5>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" value="{{$users->name}}" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input  name="image" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <select name="subject" value="{{$users->subject}}" class="form-control select">
                                    <option @if($users->subject == "Select One") selected @endif>Select One</option>
                                    <option @if($users->subject == "Bangla") selected @endif>Bangla</option>
                                    <option @if($users->subject == "English") selected @endif>English</option>
                                    <option @if($users->subject == "Math") selected @endif>Math</option>
                                    <option @if($users->subject == "Science") selected @endif>Science</option>
                                    <option @if($users->subject == "Social Science") selected @endif>Social Science</option>
                                    <option @if($users->subject == "Relegion") selected @endif>Relegion</option>
                                    <option @if($users->subject == "Ict") selected @endif>Ict</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" value="{{$users->gender}}" class="form-control select">
                                    <option @if($users->gender == "Male") selected @endif>Male</option>
                                    <option @if($users->gender == "Female") selected @endif>Female</option>
                                    <option @if($users->gender == "Others") selected @endif>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input name="mobile"  value="{{$users->mobile}}" type="string" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <h5 class="form-title"><span>Login Details</span></h5>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Email ID</label>
                                <input name="email"  value="{{$users->email}}" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" value="{{$users->password}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <h5 class="form-title"><span>Address</span></h5>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address"  value="{{$users->address}}" type="text" class="form-control">
                            </div>
                        </div>
                        

                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



    @endsection
