@extends('layouts.app')

@section('content')

@include('admin.menus.adminMenus');
@include('includes.dashboardheader');

<div class="row">
    <div class="col-12">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Items Sold</th>
      <th scope="col">Quantity</th>
       <th scope="col">Selling Price Per Item</th> 
      <th scope="col">Total selling price</th>
         <th scope="col"><a href="{{-- url('initiate') --}}"><button class="btn btn-block btn-success">Initiate Sale</button></a></th>
        <th scope="col"><button class="btn btn-block btn-success" data-bs-toggle="modal" data-bs-target="#addstock">Sales Returns</button></th>

      </tr>
  </thead>
  <tbody>
    @foreach($stocks as $stock)
     
    <tr>
      <th>{{$stock->itemstocked}}</th>
      <td>{{ $stock->stockquantity}}</td>
       <td>{{ $stock->stockprice}}</td>
      <td>{{ $stock->stockamount}}</td>
           <td>{{ $stock->sellingprice}}</td>
         <td>{{ $stock->profits}}</td>
    </tr>

     @endforeach
  </tbody>

</table>
    </div>
</div>
    
@endsection


{{-- add capital modal --}}

<div class="modal" tabindex="-1" id="addstock">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Initiate Sale</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{url('/initiateSale')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
      <div class="modal-body">
        <input type="text" class="form-control mb-4" name="stockitem" id="" placeholder="Enter Stock Item">
        <input class="form-control mb-4" type="number" name="quantity" id="" min="0" placeholder="Input Stock Quantity">
        {{-- <input class="form-control mb-4" type="number" name="sellingprice" id="" min="0" placeholder="Input Selling Price Per Item"> --}}
        {{-- <input class="form-control mb-4" type="number" name="sellingprice" id="" min="0" placeholder="Input Sales Price"> --}}
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --}}
        <button class="btn btn-success" type="submit">Add Sale</button>
      </div>
       </form>
    </div>
  </div>
</div>

@include('includes.dashboardfooter');


  