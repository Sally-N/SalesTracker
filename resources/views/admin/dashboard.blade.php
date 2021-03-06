@extends('layouts.app')

@section('content')

@include('admin.menus.adminMenus');
@include('includes.dashboardheader');

<div class="row">
    <div class="col-12">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Capital</th>
      <th scope="col">Working Capital</th>
           <th scope="col">Sales</th>
      <th scope="col">Withdrawals</th>
    <th scope="col">Profits</th>
        <th scope="col"><a href="{{url('initiate')}}"><button class="btn btn-block btn-success">Initiate Business</button></a></th>
        <th scope="col"><button class="btn btn-block btn-success" data-bs-toggle="modal" data-bs-target="#addcapital">Add Capital</button></th>

      </tr>
  </thead>
  <tbody>
    @foreach($investments as $investment)
     
    <tr>
      <th>{{$investment->capital}}</th>
      <td>{{ $investment->workingcapital}}</td>
      <td>{{ $investment->sales}}</td>
      <td>{{ $investment->withdrawals}}</td>
      <td>{{ $investment->profits}}</td>
    </tr>

     @endforeach
  </tbody>

</table>
    </div>
</div>
    
@endsection


{{-- add capital modal --}}

<div class="modal" tabindex="-1" id="addcapital">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Capital</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{url('/addcapital')}}" method="post" enctype="multipart/form-data">
             {{method_field('post')}}
          {{ csrf_field() }}
      <div class="modal-body">
   <input class="form-control mb-4" type="number" name="capital" id="" min="0" placeholder="Input Capital">
       
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --}}
        <button class="btn btn-success" type="submit">Add Capital</button>
      </div>
       </form>
    </div>
  </div>
</div>

@include('includes.dashboardfooter');
