@extends('admin.master')
@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Update Class Schedule</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.routine.update',$routine->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Time Table</span></h5>
                            </div>
                            
                           
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select required name="class" value="{{$routine->class}}" class="form-control select">
                                        <option value="">Select Class</option>
                                        <option @if($routine->class == "1") selected @endif>1</option>
                                        <option @if($routine->class == "2") selected @endif>2</option>
                                        <option @if($routine->class == "3") selected @endif>3</option>
                                        <option @if($routine->class == "4") selected @endif>4</option>
                                        <option @if($routine->class == "5") selected @endif>5</option>
                                        <option @if($routine->class == "6") selected @endif>6</option>
                                        <option @if($routine->class == "7") selected @endif>7</option>
                                        <option @if($routine->class == "8") selected @endif>8</option>
                                        <option @if($routine->class == "9") selected @endif>9</option>
                                        <option @if($routine->class == "10") selected @endif>10</option>
                                        <option @if($routine->class == "11") selected @endif>11</option>
                                        <option @if($routine->class == "12") selected @endif>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select required name="subject" value="{{$routine->subject}}" class="form-control select">
                                    <option @if($routine->subject == "Select One") selected @endif>Select One</option>
                                        <option @if($routine->subject == "Bangla") selected @endif>Bangla</option>
                                        <option @if($routine->subject == "English") selected @endif>English</option>
                                        <option @if($routine->subject == "Math") selected @endif>Math</option>
                                        <option @if($routine->subject == "Science") selected @endif>Science</option>
                                        <option @if($routine->subject == "Social Science") selected @endif>Social Science</option>
                                        <option @if($routine->subject == "Relegion") selected @endif>Relegion</option>
                                        <option @if($routine->subject == "Ict") selected @endif>Ict</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Link</label>
                                    <input required type="text" name="link" value="{{$routine->link}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input required name="date" value="{{$routine->date}}" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Time</label>
                                    <input required type="time" name="time" value="{{$routine->time}}" class="form-control">
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
