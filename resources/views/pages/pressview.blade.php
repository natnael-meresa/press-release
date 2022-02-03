@extends('layouts.app')

@section('content')
<div class="writing-container">
        @if(\Session::has('error'))
            <div class="alert alert-danger">{{ \Session::get('error') }}</div>
            {{ \Session::forget('error') }}
          @endif
          @if(\Session::has('success'))
              <div class="alert alert-success">{{ \Session::get('success') }}</div>
              {{ \Session::forget('success') }}
          @endif
    <div class="col-md-6">
        
        Press Release Posted : 0  Remaining Credits : 1 
        <a href="/pressrelease" class="btn btn-primary">
            Add Press Release &nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i>
        </a>
    </div>
    <div class="filter-container">
        <div class="col-sm-6">

            <div class="row mb-3">
                <form class="filter-form" action="#" method="GET" class="pull-right" style="padding-right:15px;">
                <div class="col-sm-8">
                    <input type="search" name='search' class="form-control input-sm"  placeholder="Search.." aria-controls="datatable">
                </div>
                <button type="submit"><i class="fa fa-search"></i></button>

            </form>
            </div>
            
           
        </div>
    </div>
    <div class="row">

    <div class="col-sm-12">
        <table id="datatable" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="datatable_info">
            <thead class="thead-dark">
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Slno.: activate to sort column descending" style="width: 76.2812px;">Slno.</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="PR ID: activate to sort column ascending" style="width: 81.1719px;">PR ID</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Headline: activate to sort column ascending" style="width: 114.266px;">Headline</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Release Date: activate to sort column ascending" style="width: 159.625px;">Release Date</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Last Modified: activate to sort column ascending" style="width: 164.438px;">Last Modified</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 89.7656px;">Status</th>
                    <th style="width:200px;" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Pressroom: activate to sort column ascending">Pressroom</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 90.4531px;">Action</th></tr>
            </thead>
            <tbody>
                <tr class="odd">
                    
            </tr>

                @if(count($presses) >= 1)
                    @foreach ($presses as $press)
                        <tr>
                            <td>{{$press->id}}</td>    
                            <td>PR ID</td>    
                            <td>{{$press->headline}}</td>    
                            <td>-</td>    
                            <td>{{$press->updated_at}}</td>    
                            <td>up</td>
                            <td>{{$press->p_room}}</td>    
                            <td>
                                <button>Edit</button>    
                                <button>Delte</button>    
                            </td>    
                        </tr>   
                    @endforeach
                    
                @else
                    <tr class="odd">
                        <td valign="top" style="text-align:center;" colspan="8" class="dataTables_empty">
                            <div class="no-pro" >
                                You have not added any press release yet. <br> Please post press release.
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    
</div>
</div>

@endsection