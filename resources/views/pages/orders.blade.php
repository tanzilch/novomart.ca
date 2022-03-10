@extends('layouts.main')

@section('title', 'Dashbaord')

@section('content')
<!-- CONTAINER -->
<div class="main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Orders</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <form action="{{route('filter.order')}}" method="POST">
    @csrf
        <div class="row px-0 mb-2">
            <div class="col-md-3 pl-0">
                <label class="mb-1">From</label>
                <input type="date" class="form-control" name="start_date">
                @error('start_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <label class="mb-1">To</label>
                <input type="date" class="form-control" name="end_date">
                @error('end_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <input type="submit" class="mt-5 btn btn-success" name="filter_btn">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-12 p-2 bg-white shadow-sm mb-5">
            <!-- Shopping cart table -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-left">
                        <tr>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Sr. #</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">User</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Status</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Product</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase text-center">Action</div>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="product-row">
                            <td class="text-center align-middle">1</td>
                            <td scope="row" class="align-middle">
                                {{$product->email}}
                            </td>
                            <td class="align-middle">
                                @if($product->status=="0")
                                <strong class="py-1 px-2 text-danger rounded-circle">Received</strong>
                                @else
                                <strong class="py-1 px-2 text-success rounded-circle">Delivered</strong>
                                @endif
                            </td>
                            <td class="align-middle">
                                <div class="h-100 d-flex align-middle">
                                    <button type="submit" data-toggle="modal" data-target="#myModal{{$product->id}}" 
                                    class="text-white btn btn-info submit-btn">View</button>
                                </div>
                            </td>
                            
                            <td class="align-middle text-center">
                                <div class="h-100 d-flex justify-content-center align-middle">
                                    <a href="{{route('product.status',['id'=>$product->id])}}" style="@if($product->status=='1') pointer-events:none; @endif" class="text-white btn btn-success submit-btn">Delivered</a>
                                </div>
                            </td>
                        </tr>
                        <!-- Popup -->
                        
                        <div class="modal fade  come-from-modal right cart-modal" id="myModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content bg-teal-lightest">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">{{$product->first_name.' '.$product->last_name}}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    @php
                                        $items = json_decode($product->products);
                                    @endphp
                                    <div class="modal-body pt-0">
                                        @foreach($items as $item)
                                            @php
                                                $title = explode('---', $item->name);
                                            @endphp
                                        <div class="align-items-center p-2 bg-white mt-4 px-3 ">
                                            <div class="d-flex flex-row justify-content-between">
                                                <div class="mr-2">
                                                    <img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="50">
                                                </div>
                                                <div class="d-flex flex-column align-items-start product-details w-75">
                                                    <span class="font-weight-bold pr-3">{{$title[0]}}</span>
                                                    <div class="d-flex flex-row product-desc">
                                                        <div class="size mr-1">
                                                            <span class="text-black-50 font-weight-bold">Category:</span>
                                                        </div>
                                                        <div class="color">
                                                            <span class="text-black-50">{{$title[1]}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 d-flex justify-content-between">
                                                <div></div>
                                                <div class="w-25">Qty: <span class="text-black-50">{{$item->qty}}</span></div>
                                                <h5 class="text-grey">${{$item->price}}</h5>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                         <a href="{{route('product.status',['id'=>$product->id])}}" style="@if($product->status=='1') pointer-events:none; @endif" class="text-white btn btn-success submit-btn">Delivered</a>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                        <!-- Popup end -->
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End -->
        </div>
    </div>
    
</div>
<!-- CONTAINER END -->
@endsection