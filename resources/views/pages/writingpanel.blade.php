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
<div class=" container pt-5">
    <h3><center>PRESS RELEASE</center></h3>
</div>
<div class="writing-table">
    <div class="writing-btn">
        <a href="/dashboard/writing" class="btn btn-warning pull-right">
            Avail Writing Service
        </a>
    </div>
    <div class="row table-container" style="overflow-x: auto;">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th>Sl no.</th>                 
                <th>Writing Keywords</th>
                <th>Writing Description</th>
                <th>Writing Added</th>
                <th>Writing Package</th>
                <th>Writing Amount</th>                              
                <th>Business Profile</th>
                <th>Action</th>                                 
                               
            </tr>    
            

                @if(count($services) >= 1)
                    @foreach ($services as $service)
                        <tr>
                            <td>{{$service->id}}</td>    
                            <td>{{$service->title}}</td>    
                            <td>{{$service->desc}}</td>    
                            <td>{{$service->nopackage}}</td>
                            <td>{{$service->package}}</td>    
                            <td>{{$service->nopackage * $service->package}}</td>    
                            <td>{{$service->bname}}</td>    
                            <td>
                                <button>Edit</button>    
                                <button>Delte</button>    
                            </td>    
                        </tr>   
                    @endforeach
                    
                @else
                    <tr>
                          <td colspan="9" style="text-align:center;"><strong>No writing details found.</strong></td>
                    </tr>
                @endif
                     
            </tbody>
        </table>
       </div>
</div>
</div>
@endsection