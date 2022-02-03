@extends('layouts.app')

@section('content')
    <div class="content-all">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-xs-6 blk  mobile_block p-3">
                    <a href="/guideline">
                        <div class="col-md-12" id="blk5">
                            <div class="col-md-12 fa-block text-center" style="padding: 20px;">
                                <i class="fas fa-info-circle fa-5x"></i>
                            </div><br>
                            <div class="col-md-12 text-center no-pad" style="text-decoration: none;font-size: 14px;">Guidelines</div>
                            <div class="clearfix"></div><br>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-6 blk  mobile_block p-3">
                    <a href="/profile/viewprofile" >
                        <div class="col-md-12" id="blk5">
                            <div class="col-md-12 fa-block text-center" style="padding: 20px;">
                                <i class="fas fa-id-card fa-5x"></i>
                            </div><br>
                            <div class="col-md-12 text-center no-pad" style="text-decoration: none;font-size: 14px;">Business Profile</div>
                            <div class="clearfix"></div><br>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-6 blk  mobile_block p-3">
                    <a href="pressrelease/view">
                        <div class="col-md-12" id="blk5">
                            <div class="col-md-12 fa-block text-center" style="padding: 20px;">
                                <i class="fas fa-newspaper fa-5x"></i>
                            </div><br>
                            <div class="col-md-12 text-center no-pad" style="text-decoration: none;font-size: 14px;">Press Release</div>
                            <div class="clearfix"></div><br>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-6 blk  mobile_block p-3">
                    <a href="dashboard/writingpanel" >
                        <div class="col-md-12" id="blk5">
                            <div class="col-md-12 fa-block text-center" style="padding: 20px;">
                                <i class="fas fa-pen-square fa-5x"></i>
                            </div><br>
                            <div class="col-md-12 text-center no-pad" style="text-decoration: none;font-size: 14px;">Writing Panel</div>
                            <div class="clearfix"></div><br>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-6 blk  mobile_block p-3">
                    <a href="/subscription" >
                        <div class="col-md-12" id="blk5">
                            <div class="col-md-12 fa-block text-center" style="padding: 20px;">
                                <i class="fas fa-credit-card fa-5x"></i>
                            </div><br>
                            <div class="col-md-12 text-center no-pad" style="text-decoration: none;font-size: 14px;">Add Credits</div>
                            <div class="clearfix"></div><br>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-6 blk  mobile_block p-3">
                    <a href="profile/userprofile">
                        <div class="col-md-12" id="blk5">
                            <div class="col-md-12 fa-block text-center" style="padding: 20px;">
                                <i class="fas fa-user fa-5x"></i>
                            </div><br>
                            <div class="col-md-12 text-center no-pad" style="text-decoration: none;font-size: 14px;">Profile</div>
                            <div class="clearfix"></div><br>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection