@extends('layouts.app')

@section('content')
<div class="writing-container">
<div class=" container pt-5">
    <h1><center>CREATE BUSINESS PROFILE   </center></h1>
</div>
<div class="row">
    <div class="col-md-8 writing-form container ">
        <form action="/profile/create" enctype="multipart/form-data" method="POST">
            @csrf

            <div class=" form-group row mb-3">
                <label for="business_name" class="col-sm-4 col-form-label">Business Name  <span style="color:red;">*</span> </label>
                <div class="col-sm-8">
                <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" required placeholder="business name">
                @error('business_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                @enderror
                </div>
            </div>
            <div class=" form-group row mb-3">
                <label for="contact_email" class="col-sm-4 col-form-label">Contact Email  <span style="color:red;">*</span> </label>
                <div class="col-sm-8">
                <input type="email" name="contact_email" class="form-control @error('contact_email') is-invalid @enderror" required placeholder="Enter contact email">
                @error('contact_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                @enderror
                </div>
            </div>
            <div class=" form-group row mb-3">
                <label for="website" class="col-sm-4 col-form-label">Website </label>
                <div class="col-sm-8">
                <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" required placeholder="Enter website">
                @error('website')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                @enderror
                </div>
            </div>
            <div class=" post_pr_btn mt-3">
                <button class=" btn btn-custom btn-fx btn-promote" type="submit" >
                    CREATE PROFILE
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection