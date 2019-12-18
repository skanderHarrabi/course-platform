@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-lg-offset-2">
            
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                         Cources
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{$cources_count}}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                           Categories
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center">{{$categorie_count}}</h1>
                        </div>
                    </div>
            </div>

            <div class="col-lg-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading text-center">
                             Rooms
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center">{{$room_count}}</h1>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    <div class="row">
            <div class="col-md-10 col-lg-offset-3">

            <div class="col-lg-3">
                    <div class="panel panel-success">
                        <div class="panel-heading text-center">
                             Students
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center">{{$students_count}}</h1>
                        </div>
                    </div>
            </div>

            <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                             Teachers
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center">{{$teachers_count}}</h1>
                        </div>
                    </div>
            </div>
            </div>
    </div>
    <div class="row">
            <div class="col-md-10 col-lg-offset-4">    
            <div class="col-lg-3">
                    <div class="panel ">
                        <div class="panel-heading text-center">
                             Orders
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center">{{$reserved_cources_count}}</h1>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
@endsection
