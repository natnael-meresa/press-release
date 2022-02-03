@extends('layouts.app')

@section('content')
<div class="writing-container">
<div class=" container pt-5">
    <h1><center>WRITING SERVICE</center></h1>
</div>
<div class="row">
    <div class="col-md-6 writing-form container ">
        <form action="/writing/create" enctype="multipart/form-data" method="POST">
            @csrf
        <fieldset class="col-md-12 package-select">

            <div class="form-group row">
                <label class=" col-sm-3" for="spack">Select Package :</label>
                <div class="col-sm-9">
                    <select name="package" class="form-control" id="pack" onchange="changepack();">
                        <option value="10" data-value="10" data-inr-value="540">Upto 200 Words</option>
                        <option value="15" data-value="15" data-inr-value="780">Upto 300 Words</option>
                        <option value="21" data-value="21" data-inr-value="1150">Upto 500 Words</option>
                        <option value="25" data-value="25" data-inr-value="1560">Upto 700 Words</option>      
                    </select>
                </div>
            </div>


            <div class="clearfix"></div>
            <br>
            <div class="form-group row">
                <label class=" col-sm-3" for="nopack">No of Package :</label>
                <div class="col-sm-9">
                    <select name="nopackage" class="form-control" id="nopack" onchange="changepack();">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>


            <div class="clearfix"></div>
            <br>

            <div class="form-group row">
                <label class=" col-sm-3">Price :</label>
                <label class=" col-sm-9" style="text-align:left; font-size: 17px;">
                    <span id="currency"><i class="fas fa-dollar-sign" aria-hidden="true"></i></span>
                    <span id="price">10</span>
                </label>
            </div>
        </fieldset>
        <fieldset class="col-md-12  package-select pt-3 mt-3">


            <div class="form-group row">
                <label class=" col-sm-3" for="keyword">Keyword <span style="color:red;">*</span> </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Keyword" value="">
                    
                </div>
            </div>

            <div class="clearfix"></div>
            <br>

            <div class="form-group row">
                <label class=" col-sm-3" for="desc">PR Details <span style="color:red;">*</span> </label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="desc" id="desc" placeholder="Describe about PR" rows="10"></textarea>
                    
                </div>
            </div>

            <div class="clearfix"></div>
            <br>

            <div class="form-group row">
                <label class=" col-sm-3">Upload File :
                    <br>
                    <span>( if you want )</span>
                </label>
                <div class="col-sm-9">
                    <div>
                        <input type="file" name="image"  id="brws" >
                    </div>
                    (gif | jpg | png | jgep | pdf | doc | docx are allowed)
                    <span id="files">
                        <br>
                    </span>
                </div>
            </div>
        </fieldset>
        <fieldset class="col-md-12 package-select mt-3">

                    
            <div class="" id="pressroomcol">

                <div class="form-group row">
                    <label class=" col-sm-3" for="bname">Business Name <span style="color:red;">*</span> </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="bname" id="bname" placeholder="Enter business name" value="">
                        
                    </div>
                </div>

                <div class="clearfix"></div>
                <br>


                <div class="form-group row">
                    <label class=" col-sm-3" for="cemail">Contact Email <span style="color:red;">*</span> </label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="contactemail" id="cemail" placeholder="Enter contact email" value="">
                        
                    </div>
                </div>

                <div class="clearfix"></div>
                <br>


                <div class="form-group row">
                    <label class=" col-sm-3" for="cweb">Business Website </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cweb" id="cweb" placeholder="Enter Website" value="">
                    </div>
                </div>

            </div>

        </fieldset>
        <div class=" post_pr_btn mt-3">
            <button class=" btn btn-custom btn-fx btn-promote" type="submit"  name="submit">
                POST YOUR PR
            </button>
        </div>
        
    </form>
    </div>
</div>
</div>
@endsection