@extends('layout.plain')

@section('content')
<div class="x_content">
    <br>
    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" id="first-name" required="required" class="form-control is-invalid">
                <small  class="text-danger">
                    Must be 8-20 characters long.
                </small>       
            </div> 
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <textarea class="form-control is-invalid" rows="2"></textarea>
                <small  class="text-danger">
                    Must be 8-20 characters long.
                </small>       
            </div> 
        </div>
        
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control">
            </div>
        </div>
        <div class="item form-group">
            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name / Initial</label>
            <div class="col-md-6 col-sm-6 ">
                <input id="middle-name" class="form-control" type="text" name="middle-name">
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
            <div class="col-md-6 col-sm-6 ">
                <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="gender" value="male" class="join-btn" data-parsley-multiple="gender"> &nbsp; Male &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="gender" value="female" class="join-btn" data-parsley-multiple="gender"> Female
                    </label>
                </div>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="date" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                <script>
                    function timeFunctionLong(input) {
                        setTimeout(function() {
                            input.type = 'text';
                        }, 60000);
                    }
                </script>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Time of bell <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-3 ">
            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="date" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                <script>
                    function timeFunctionLong(input) {
                        setTimeout(function() {
                            input.type = 'text';
                        }, 60000);
                    }
                </script>
            </div>
            <div class="col-md-3 col-sm-3 ">
                <input id="bellring" class="time-picker form-control" placeholder="HH:MM" type="time" required="required" onfocus="this.type='time'" onmouseover="this.type='time'" onclick="this.type='time'" onblur="this.type='time'" onmouseout="timeFunctionLong2(this)">
                <script>
                    function timeFunctionLong2(input) {
                        setTimeout(function() {
                            input.type = 'text';
                        }, 60000);
                    }
                </script> 
            </div>
        </div>
            
        
             
            <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Time of bell <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input id="bellring" class="time-picker form-control" placeholder="HH:MM" type="time" required="required" onfocus="this.type='time'" onmouseover="this.type='time'" onclick="this.type='time'" onblur="this.type='time'" onmouseout="timeFunctionLong2(this)">
                <script>
                    function timeFunctionLong2(input) {
                        setTimeout(function() {
                            input.type = 'text';
                        }, 60000);
                    }
                </script> 
            </div>

        </div>
        <div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <button class="btn btn-primary" type="button">Cancel</button>
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection