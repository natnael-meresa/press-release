@extends('layouts.app')

@section('content')
<div class="writing-container">
    <div class="row">
        <div class="col-md-10 writing-form container ">
            <h4 style="text-transform: uppercase;font-size: 22px;
                font-weight: bold;"><center>Create Press Release</center>
            </h4>
            <form class="form-horizontal" action="/pressrelease/create" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="blk" style="padding: 30px;background: #f2f2f2">
                <div class="form-group row ml-3">
                    <label for="p_room" class="col-md-3 col-sm-4 control-label pl-5">Pressroom <font color="red">*</font></label>
                    <div class="col-md-9 col-sm-8">
                        <select name="p_room" id="p_room" class="form-control">
                            <option value="">Select Pressroom</option>
                            <option bname="natnaelmeresa6gmail.com" bsdesc="" badd="" bemail="Natnaelmeresa6@gmail.com" bweb="http://you.com" value="52155">
                                natnaelmeresa6gmail.com - natnaelmeresa6gmail-com
                            </option>                            
                        </select>

                        <small>or <a href="https://www.issuewire.com/profile?reffer=press">Create New Pressroom</a></small>
                        <div id="p_room_err" class="err"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <input type="hidden" name="dist_tier" value="0">
            </div>
            <div class="mt-3" style="padding: 30px;background: #f2f2f2">
                <div class="form-group row">
                    <label for="headline" class="col-md-3 col-sm-4 control-label">Headline <font color="red">*</font> <sup><i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" title="Headline"></i></sup></label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" name="headline" id="headline" onfocusout="myFunction()" placeholder="Press Release Headline" required="" maxlength="120" minlength="30">
                        <small>Min=30, Entered=<span id="headlinemax">0</span>, Max=120</small>
                    <div id="headline_err" class="err"></div>
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="subhead" class="col-md-3 col-sm-4 control-label">Subhead <sup>
                        <i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" title="Subhead"></i></sup></label>
                    <div class="col-md-9 col-sm-8">

                        <small> Optional - Do not repeat headline or body </small>

                        <textarea rows="1" class="form-control" name="subhead" id="subhead" placeholder="Sub Heading" maxlength="250"></textarea>

                        <small>Entered=<span id="subheadmax">0</span>, Max=250</small>

                        <div id="subheadline_err" class="err"></div>
                    </div>
                </div>
            </div>
            <div class="mt-3" style="padding: 30px;background: #f2f2f2">
                <div class="form-group row">
                    <label for="r_date" class="col-md-3 col-sm-4 control-label">Release Data <font color="red">*</font> <sup>
                        <i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" 
                        title="To make the PR public as soon as possible after submission, select 'As Soon As Possible'
                        To make the PR public at a later time, select the desired date/time.
                        Release date will automatically appear in the starting of the press release.
                        The date will be shown based on PST (Los Angeles Time) ."></i></sup></label>
                    <div class="col-md-9 col-sm-8">

                        <small>Release date will automatically appear in the starting of the press release.
                            The date will be shown based on <b>PST (Los Angeles Time)</b> .</small>

                        <br>

                        <input type="radio" name="r_dates" id="r_dates1" value="now" checked=""> Immediate <br>
                        <input type="radio" name="r_dates" id="r_dates2" value="later"> Future Date/Time <b>( PST Time )</b> <br>
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label class="col-md-3 col-sm-4 control-label" for="c_country">Country <font color="red">*</font></label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" name="headline" id="headline" onfocusout="myFunction()" placeholder="Select Country" required="" maxlength="120" minlength="30">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label class="col-md-3 col-sm-4 control-label" for="c_country">State/Province <font color="red">*</font></label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" name="headline" id="headline" onfocusout="myFunction()" placeholder="Select Country" required="" maxlength="120" minlength="30">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label class="col-md-3 col-sm-4 control-label" for="c_country">City/Towen <font color="red">*</font></label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" name="headline" id="headline" onfocusout="myFunction()" placeholder="Select Country" required="" maxlength="120" minlength="30">
                    </div>
                </div>

            </div>
            <div class="mt-3" style="padding: 30px;background: #f2f2f2">
                <div class="form-group row">
                        <label for="p_content" class="col-md-3 col-sm-4 control-label">Press Release Body <font color="red">*</font> </label>
                        <div class="col-md-9 col-sm-8">
                        <textarea class="form-control " id="summary-ckeditor" name="press_body"></textarea>
                        </div>
                </div>




                <div class="form-group row mt-2">
                    <label for="sourceCompany" class="col-md-3 col-sm-4 control-label">Source
                        Company <font color="red">*</font> <sup><i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip"
                             title="Must be the name of the company the release is about.
                              You must have permission from the source company to post this news release on their behalf. You may be legally liable if you use a company's name without their permission.
                              Person name can't be used unless it's also the name of the company. For example - Book Authors."></i></sup></label>
                    <div class="col-md-9 col-sm-8">
                        <small> 
                            Enter the name of the company the release is about.<br>You may be <b>legally liable</b> if you use a company's name without their permission. 
                        </small>
                        <input type="text" class="form-control" name="sourceCompany" id="sourceCompany" onchange="txt()" placeholder="Source Company" required="">
                        <div id="sourceCompany_err" class="err"></div>
                    </div>
                </div>



            </div>

            <div class="mt-3" style="padding: 30px;background: #f2f2f2">

                <h4 class="text-center">Media Contact</h4>
                <br>
                <div class="form-group row mt-2">
                    <label for="c_name" class="col-md-3 col-sm-4 control-label">Contact Name <font color="red">*</font></label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="c_name" onchange="cntct_hndl()" name="c_name" placeholder="Contact Name" required="">
                        <span id="c_name_error" class="err"></span>
                                                    <div id="c_name_err" class="err"></div>
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="c_email" class="col-md-3 col-sm-4 control-label">Contact Email <font color="red">*</font></label>
                    <div class="col-md-9 col-sm-8">
                        <input type="email" class="form-control" id="c_email" onchange="cnemail_hndl()" name="c_email" placeholder="Contact Email" value="Natnaelmeresa6@gmail.com" required="">
                        <span id="c_email_error" class="err"></span>
                                                    <div id="c_mail_err" class="err"></div>
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="c_email" class="col-md-3 col-sm-4 control-label">Do you want to hide email ?</label>
                    <div class="col-md-9 col-sm-8">
                        <input id="c_email_hide" name="c_email_hide" value="true" type="radio"> Yes<input id="c_email_hide" name="c_email_hide" value="false" type="radio">No
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="c_phone" class="col-md-3 col-sm-4 control-label">Contact Phone</label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Contact Phone">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="c_mobile" class="col-md-3 col-sm-4 control-label">Contact Mobile</label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="c_mobile" name="c_mobile" placeholder="Contact Mobile">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="c_address" class="col-md-3 col-sm-4 control-label">Contact Address</label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Contact Address">
                    </div>
                </div>

                <div class="form-group row mt-2">
                    <label for="c_website" class="col-md-3 col-sm-4 control-label">Contact Website</label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="c_website" name="c_website" placeholder="Contact Website">
                    </div>
                </div>


                <div class="form-group row mt-2 ">
                    <label for="mapAddress" class="col-md-3 col-sm-4 control-label">Google Map Link</label>
                    <div class="col-md-9 col-sm-8">
                        <input type="text" class="form-control" id="mapAddress" name="mapAddress" placeholder="Issuewire">                            <small>Organization name / Place / Google Embed Map Link</small>
                    </div>
                </div>

            </div>
            <div  class="mt-3" style="padding: 30px;background: #f2f2f2">
                <div class="form-group row mt-2">
                    <label for="formFileMultiple" class="form-label">Photo</label>
                    <input class="form-control" type="file" id="formFile" name='image'>
                </div>
            </div>

            {{-- <div class="mt-3" style="padding: 30px;background: #f2f2f2">
                <div class="form-group row mt-2">
                    <label for="r_industry" class="col-md-3 col-sm-4 control-label">Industry <font color="red">*</font></label>
                    <div class="col-md-9 col-sm-8">
                        <input  type="text" id="search_industry" class="form-control"  placeholder="Search Industry">
                        <div class="industry mt-2" >
                            <div class="col-md-4 ins" ins-name="Accounting">
                                <label for="checkboxes-0">
                                    <input name="industry[]" class="ad_check" id="checkboxes-0" value="Accounting" type="checkbox">
                                    Accounting
                                </label>
                            </div>
                            <div class="col-md-4 ins" ins-name="Advertising" style="">
                                <label for="checkboxes-1">
                                    <input name="industry[]" class="ad_check" id="checkboxes-1" value="Advertising" type="checkbox">
                                    Advertising                                        </label>
                            </div>
                        </div>    
                    </div>
                    
                    
                </div>
            </div> --}}




            <div class="mt-3" style="padding: 30px;background: #f2f2f2">
                <div class="form-group row">
                    <div class="priview-btn">
                        <button type="submit" class="btn btn-primary" onclick="chkdetails(this);" id="preview-btn" data-type="preview">Preview</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection