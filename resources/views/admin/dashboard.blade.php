@extends('layouts.app')

@section('content')

@include('admin.menus.adminMenus');
@include('includes.dashboardheader');

<div class="row">
    <div class="col-12">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Capial</th>
      <th scope="col">Working Capital</th>
           <th scope="col">Sales</th>
      <th scope="col">Withdrawals</th>
    <th scope="col">Profits</th>
        <th scope="col"><a href="{{url('initiate')}}"><button class="btn btn-block btn-success">Initiate Business</button></a></th>


    </tr>
  </thead>
  <tbody>

    @foreach ($investments as $investment)
        
   
    <tr>
      <th>{{$investment -> capital}}</th>
      <td>{{ $investment }}</td>
      <td>{{ $investment }}</td>
      <td>{{ $investment }}</td>
      <td>{{ $investment }}</td>
    </tr>

     @endforeach
  </tbody>

</table>
    </div>
</div>
    
@endsection
@include('includes.dashboardfooter');
