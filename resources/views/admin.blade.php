@extends('layouts.app')

@section('content')

form id="apply-leave" method="post" action="">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                        <label for="leave-type">stad name</label>
                        <select name="leave-type" id="leave-type" class="form-control" title="Please select a Leave Type" required>
                            <option></option>
                            <option>ema</option>
                            <option>wani</option>
                            <option>judin</option>
                            <option>anuar</option>
                            <option>ayoy</option>
                        </select>
                    </div>
                </div>


                @endsection


