@extends('admin.master')
@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Update Result</h3>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.result.update',$result->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Exam Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{$result->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Student ID</label>
                                    <input type="text" name="user_id" value="{{$result->user_id}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="class" value="{{$result->class}}" class="form-control select">
                                        <option value="">Select Class</option>
                                        <option @if($result->class == "1") selected @endif>1</option>
                                        <option @if($result->class == "2") selected @endif>2</option>
                                        <option @if($result->class == "3") selected @endif>3</option>
                                        <option @if($result->class == "4") selected @endif>4</option>
                                        <option @if($result->class == "5") selected @endif>5</option>
                                        <option @if($result->class == "6") selected @endif>6</option>
                                        <option @if($result->class == "7") selected @endif>7</option>
                                        <option @if($result->class == "8") selected @endif>8</option>
                                        <option @if($result->class == "9") selected @endif>9</option>
                                        <option @if($result->class == "10") selected @endif>10</option>
                                        <option @if($result->class == "11") selected @endif>11</option>
                                        <option @if($result->class == "12") selected @endif>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select required name='subject' value="{{$result->subject}}" type="text" class="form-control">
                                        <option @if($result->subject == "Select One") selected @endif>Select One</option>
                                        <option @if($result->subject == "Bangla") selected @endif>Bangla</option>
                                        <option @if($result->subject == "English") selected @endif>English</option>
                                        <option @if($result->subject == "Math") selected @endif>Math</option>
                                        <option @if($result->subject == "Science") selected @endif>Science</option>
                                        <option @if($result->subject == "Social Science") selected @endif>Social Science</option>
                                        <option @if($result->subject == "Relegion") selected @endif>Relegion</option>
                                        <option @if($result->subject == "Ict") selected @endif>Ict</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Grade</label>
                                    <input type="text" name="link" value="{{$result->grade}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input name="start_time" type="time" value="{{$result->status}}" class="form-control">
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
