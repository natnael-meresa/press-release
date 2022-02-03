@extends('layouts.app')

@section('content')
<div class="writing-container">
<div class=" container pt-5">
    <h1><center>Profile</center></h1>
    @if(\Session::has('error'))
    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
    {{ \Session::forget('error') }}
  @endif
  @if(\Session::has('success'))
      <div class="alert alert-success">{{ \Session::get('success') }}</div>
      {{ \Session::forget('success') }}
  @endif
</div>
<div class="row">
    <div class="col-md-9 writing-form container ">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="credits-tab" data-bs-toggle="tab" data-bs-target="#credits" type="button" role="tab" aria-controls="credits" aria-selected="false">Credits</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="promotion-tab" data-bs-toggle="tab" data-bs-target="#promotion" type="button" role="tab" aria-controls="promotion" aria-selected="false">Promotion</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">Writing Payments</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Change Password</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
            <div class="col-md-12 profiledetails pt-2">
                <form method="POST"  action="{{route('users.update', ['id' => $user->id])}}" >
                    @csrf
                    @method('PATCH')
                    <div class=" form-group row mb-3">
                        <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$user->firstname}}">
                        </div>
                    </div>
                    <div class=" form-group row mb-3">
                        <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{$user->lastname}}">
                        </div>
                    </div>
                    <div class=" form-group row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" value="{{$user->email}}" name="email">
                        </div>
                    </div>
                    <div class=" form-group row mb-3">
                        <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{$user->mobile}}">
                        </div>
                    </div>
                    <div class=" post_pr_btn mt-3">
                        <button class=" btn btn-custom btn-fx btn-promote" type="submit">
                            UPDATE
                        </button>
                    </div>
            </form>
            </div>
            
        </div>
        <div class="tab-pane fade" id="credits" role="tabpanel" aria-labelledby="credits-tab">
            <div class="row table-container" style="overflow-x: auto;">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>Sl no.</th>                 
                        <th>Transaction ID</th>
                        <th>Payment Amount</th>
                        <th>No. of Credits</th>
                        <th>Payment Date</th>
                        <th>Payment Status</th>                                                 
                    </tr>    
                    <tr>
                        <td colspan="9" style="text-align:center;"><strong>No details found.</strong></td>
                    </tr>         
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            <div class="row table-container" style="overflow-x: auto;">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>Sl no.</th>                 
                        <th>Transaction ID</th>
                        <th>Pr ID</th>
                        <th>Services</th>
                        <th>Amounts</th>
                        <th>Payment Date</th>
                        <th>Payment Status</th>                                                 
                    </tr>    
                    <tr>
                        <td colspan="9" style="text-align:center;"><strong>No details found.</strong></td>
                    </tr>         
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
            <div class="row table-container" style="overflow-x: auto;">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>Sl no.</th>                 
                        <th>Transaction ID</th>
                        <th>Writing Package</th>
                        <th>Qnty</th>
                        <th>Amounts</th>
                        <th>Payment Date</th>
                        <th>Payment Status</th>                                                 
                    </tr>    
                    <tr>
                        <td colspan="9" style="text-align:center;"><strong>No details found.</strong></td>
                    </tr>         
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
            <div class="col-md-12 profiledetails pt-2">
                <form method="POST" action="{{route('change.password')}}">
                    @csrf
                    @method('PATCH')
                    <div class=" form-group row mb-3">
                        <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                        <div class="col-sm-10">
                        <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required placeholder="Enter current password">
                        @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>

                        @enderror
                        </div>
                    </div>
                    <div class=" form-group row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Enter the new password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        
                        @enderror
                        </div>
                    </div>
                    <div class=" form-group row mb-3">
                        <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                        <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"required placeholder="Enter same password">
                        @error('confirm_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        
                        @enderror
                        </div>
                    </div>
                    <div class=" post_pr_btn mt-3">
                        <button class=" btn btn-custom btn-fx btn-promote" type="submit"  name="submit">
                            UPDATE PASSWORD
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

