@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Attendance</div>

                <div class="row text-center mt-3"> 
                <div class="col-md-6"> 
                    <span>Outlet</span>
                </div>
                <div class="col-md-6">
                    <span><input type="text"></span>
                </div>
            </div>

            <div class="row text-center mt-3"> 
                    <div class="col-md-6"> 
                        <span>Name</span>
                    </div>
                    <div class="col-md-6">
                        <span><input type="text"></span>
                    </div>
                </div>

                <div class="row text-center mt-3"> 
                        <div class="col-md-6"> 
                            <span>ID</span>
                        </div>
                        <div class="col-md-6">
                            <span><input type="text"></span>
                        </div>
                    </div>

                    <div class="row text-center mt-3"> 
                            <div class="col-md-6"> 
                                <span>Password</span>
                            </div>
                            <div class="col-md-6">
                                <span><input type="text"></span>
                            </div>
                        </div>

             
                        <div class="row text-center mt-5 mb-5">
                            <div class="col-md-4">
                        <button class="btn btn-danger btn-xs" type="button">
                            <a class= "text-white" href="/laravel-project/public/onlineleave
                            ">Leave Application</a> 
                        </button>
                        </div>
                        <div class="col-md-4">
                                <button class="btn btn-info btn-xs" onclick="checkin()" 
                                 type="button">Punch in</button>
                        </div>
                        <div class="col-md-4">
                                <button class="btn btn-info btn-xs" type="button">Punch Okhiojojoojojut</button>
                        </div>
                       
            </div>



        </div>


    </div>
</div>
<script>
        function checkin(){
            alert("You are here");
        }
        </script>
        
@endsection
