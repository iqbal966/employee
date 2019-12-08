@extends('layouts.app')

@section('content')

<form id="staff-name" method="post" action="">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                        <label for="leave-type">staff-name</label>
  <select name="leave-type" id="leave-type" class="form-control" title="Please select a Staff Name" required>
                            <option></option>
                            <option>ema</option>
                            <option>wani</option>
                            <option>judin</option>
                            <option>anuar</option>
                            <option>ayoy</option>
                        </select>
                    </div>
                </div>
        <form id="shift" method="post" action="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                 <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                                    <label for="leave-type">shift</label>
 <select name="leave-type" id="leave-type" class="form-control" title="Please select a Shift Type" required>
                                        <option></option>
                                        <option>Morning</option>
                                        <option>Middle</option>
                                        <option>Night</option>
                                        
                                    </select>
                                </div>
                            </div>
         <form id="shift" method="post" action="">
                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                 <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                                     <label for="leave-type">shift</label>
         <select name="leave-type" id="leave-type" class="form-control" title="Please select a Staff ID" required>
                                                    <option></option>
                                <option>Morning</option>
                                <option>Middle</option>
                                <option>Night</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                            
        




                @endsection


