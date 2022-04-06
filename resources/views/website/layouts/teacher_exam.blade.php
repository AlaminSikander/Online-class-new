@extends('website.master')
@section('content')


<div class="hero-arera course-item-height" data-background="{{url('assets/img/slider/course-slider.jpg')}}">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-course-1-text">
                     <h2>Exam Schedule</h2>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
<div class="content container-fluid pt-30 pb-30">
    <div id="divToPrint" class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Exam ID</th>
                                    <th>Exam Name</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Exam Link</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($exam as $key=>$a)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <h2>

                                            {{$a->exam_name}}
                                        </h2>

                                    </td>
                                    <td>{{$a->class}}</td>
                                    <td>{{$a->subject}}</td>
                                    <td>{{$a->link}}</td>
                                    <td>{{$a->start_time}}</td>
                                    <td>{{$a->end_time}}</td>
                                    <td>{{$a->link}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection