@extends ('layouts.app')

@section('content')
<form id="apply-leave" method="post" action="">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                        <label for="leave-type">Leave Type</label>
                        <select name="leave-type" id="leave-type" class="form-control" title="Please select a Leave Type" required>
                            <option></option>
                            <option>Sick Leave</option>
                            <option>Casual Leave</option>
                            <option>EBL</option>
                            <option>Unpaid Leave</option>
                            <option>Hourly Leave</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datepickerstart">Start Date</label>
                        <input type="text" class="form-control" id="datepickerstart" name="datepickerstart">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datepickerend">End Date</label>
                        <input type="text" class="form-control" id="datepickerend" name="datepickerend">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>Reason</label>
                        <textarea class="form-control" id="reason" name="reason"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="custom-control custom-checkbox pmd-checkbox">
                        <input class="custom-control-input" type="checkbox" value="" id="inverse_defaultCheck1"/>
                        <label class="custom-control-label" for="inverse_defaultCheck1">
                            Is it a Half Day?
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary pmd-ripple-effect pmd-btn-raised" name="applyleave" value="Apply Leave">Apply Leave</button> 
            <a href="/" class="btn btn-danger">Back</a>
        </div>
    </form>
    @endsection