@extends('admin.master')
@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Subject</h3>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.subject.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Subject Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject Name</label>
                                    <!-- <input required name="subject_name" type="text" class="form-control"> -->
                                    <select required name="subject_name" class="form-control select">
                                        <option>Select Subject</option>
                                        <option>Bangla</option>
                                        <option>English</option>
                                        <option>Math</option>
                                        <option>Science</option>
                                        <option>Social Science</option>
                                        <option>Relegion</option>
                                        <option>Ict</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select required name="subject_class" class="form-control select">
                                        <option>Select Class</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
