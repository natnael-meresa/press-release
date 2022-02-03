@extends('layouts.app')

@section('content')
<div class="writing-container">
    <div class=" container pt-2">
        <div class="col-md-12">
            <br><br>
            <div class="col-md-12">
                <div class="col-md-12 text-center" style="font-size: 25px;font-weight: bold;">
                    View Business Profile</div>
                <div class="hidden-md">
                    @if(\Session::has('error'))
                    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    {{ \Session::forget('error') }}
                  @endif
                  @if(\Session::has('success'))
                      <div class="alert alert-success">{{ \Session::get('success') }}</div>
                      {{ \Session::forget('success') }}
                  @endif
            </div>
            <div class="container row profile-button">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                    <a href="/profile" class="btn btn-warning">
                        Create Business Profile  &nbsp;  <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    <a href="/pressrelease" class="btn btn-success">
                        Add Press Release   &nbsp;  <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </a>
                 </div>
                </div>
            </div>
                        
         </div>

         @if (count($profiles) >= 1)
             @foreach ($profiles as $profile)
                <div class="row mt-3 container">
                    <div class="col-md-6  view-blk view-blk-left" style="height: 176px;">
                        <div class="col-md-12 bpros" style="    padding: 23px;min-height: 172px;">
                            <h2>{{$profile->contact_email}}</h2>
                            <div class="bpro-proname">
                                Profile : {{$profile->business_name}} 
                            </div>
                            <div class="bpro-desc" style="display: block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            </div>
                            <div class="clearfix"></div><br>
                            <div class="col-md-12 text-center">
                            <a href="#" class="btn btn-warning btn-sm" value="52155">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  view-blk ml-2 " style="height: 176px;">
                        <div class="col-md-12 bpros" style="    padding: 23px;min-height: 172px;">
                            <span class="">Email</span> : {{$profile->contact_email}} <br>
                            <span class="">Address</span> : N/A <br>
                            <span class="">Phone</span> : N/A <br>
                            <span class="">Website</span> :{{ $profile->website}}<br>
                            <a download="" href="/press.rss" target="_blank" rel="nofollow noopener">
                                <span class="label label-warning"><i class="fa fa-rss" aria-hidden="true"></i>All RSS Feed</span>
                            </a>  
                            <a href="/presses.rss" target="_blank" rel="nofollow noopener">
                                <span class="label label-warning"><i class="fa fa-rss" aria-hidden="true"></i>Latest RSS Feed</span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            @endforeach
         @else
            <div class="row mt-3 container">
                <h1>no Bussiness Profile.</h1>
            </div>
         @endif

    </div>
</div>
@endsection
