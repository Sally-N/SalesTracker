@extends('layouts.app')

@section('content')

@include('admin.menus.adminMenus')

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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td></td>
    </tr>
  </tbody>

</table>
    </div>
</div>
    
@endsection