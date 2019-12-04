@extends ('layouts.app')

@section('content')
<form method="POST" action="/onlineleave">
    @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                        <label for="leave-type">Leave Type</label>
                        <select name="leave_type" id="leave_type" class="form-control" title="Please select a Leave Type" required>
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
                        <input type="date" class="form-control" id="datepickerstart" name="start_date">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datepickerend">End Date</label>
                        <input type="date" class="form-control" id="datepickerend" name="end_date">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>Reason</label>
                        <textarea class="form-control" id="reason" name="reason"></textarea>
                    </div>
                </div>
                {{-- <div class="col-12">
                    <div class="custom-control custom-checkbox pmd-checkbox">
                        <input class="custom-control-input" type="checkbox" value="" id="inverse_defaultCheck1"/>
                        <label class="custom-control-label" for="inverse_defaultCheck1">
                            Is it a Half Day?
                        </label>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" onclick="apply()" class="btn btn-primary pmd-ripple-effect pmd-btn-raised">Apply Leave</button> 
            <a href="/" class="btn btn-danger">Back</a>
        </div>
    </form>
    @endsection

<script>
    function apply(){
        alert("Your leave application have been send!");
    }
</script>