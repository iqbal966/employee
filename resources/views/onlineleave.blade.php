@extends ('layouts.app')

@section('content')
<form method="POST" action="/onlineleave" name="application_leave_form">
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
                        <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required autocomplete="start_date" autofocus>
                            
                        @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label" for="datepickerend">End Date</label>
                     <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}" required autocomplete="end_date" autofocus>
                            
                        @error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label>Reason</label>
                        <input id="reason" type="text" class="form-control @error('reason') is-invalid @enderror" name="reason" value="{{ old('reason') }}" required autocomplete="reason" autofocus>
                    </div>
                    @error('reason')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror  
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
    function apply()
        {
            var empt = document.forms["application_leave_form"]["leave_type", "start_date" , "end_date", "reason"].value;
            if (empt == ""){
                alert("Please complete the leave application form!");
            return false;
            }
            else {
                alert('Your leave application have been send!');
            return true; 
            }
        }
</script>