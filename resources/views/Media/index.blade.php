@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 6vw;
}

.m-b-md {
    margin-bottom: 30px;
}
.color {
    color: black;
    font-weight: bold;
    padding: 15px;
    border-left: 2px solid #ccc;
}
img {
    border-radius: 4px;
    box-shadow: 0 0 10px 3px #bbb;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            News & Media
        </div>
    </div>
    <br>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#loc"><b>Location</b></a></li>
        <li><a data-toggle="tab" href="#contact"><b>Contact</b></a></li>
    </ul>
    <div class="tab-content">
    <div id="loc" class="tab-pane active">
        <h3>Location</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <table class="table">
                             <thead>
                                <th>Media Room</th>
                                <th>Media Enclosure</th>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                            <img src="{{asset('images/dummyimage.png')}}" alt="image" width="450" height="300">
                            <span class="color">
                                Near CIR Office......
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="tab-pane fade">
        <h3>Contacts</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                      <table class="table">
                         <thead>
                            <th>Name</th>
                            <th>Phone</th>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                        <div class="panel-body">
                            <img src="{{asset('images/dummyimage.png')}}" alt="image" width="450" height="300">
                            <span class="color">
                                Type location details here......
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
@include('layouts.footer')

@endsection
