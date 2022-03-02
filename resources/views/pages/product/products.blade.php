@extends('layouts.main')

@section('title', 'Products')

@section('content')
<div class="px-4 px-lg-0">
	<!-- For demo purpose -->
	 <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Dashboard 01</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
	<!-- End -->
	<div class="pb-5">
		<div class="container">
			<div class="row">
				
			<div class="p-2 bg-success text-white d-flex justify-content-between mb-2">
				<div class="ml-2 mt-2" id="message"></div>
				<div class="mr-2"> <a href="{{route('show.cart')}}" class="btn btn-light mr-2 py-1">Show Cart</a> <i class="fas fa-cart-shopping"></i> Cart (<span id="total-item">{{Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>)</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-12 p-2 bg-white shadow-sm mb-5">

					<!-- Shopping cart table -->
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col" class="border-0 bg-light">
										<div class="p-2 px-3 text-uppercase">Product</div>
									</th>
									<th scope="col" class="border-0 bg-light">
										<div class="py-2 text-uppercase">Price</div>
									</th>
									<th scope="col" class="border-0 bg-light text-center" style="width: 30%;">
										<div class="py-2 text-uppercase">Quantity</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="border-0">
										<div class="p-2">
											<img src="https://bootstrapious.com/i/snippets/sn-cart/product-1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
											<div class="ml-3 d-inline-block align-middle">
												<h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
											</div>
										</div>
									</th>
									<td class="align-middle"><strong>$79.00</strong></td>
									<td class="align-middle">
										<form action="{{route('add.to.cart')}}" method="post" class="d-flex">
											@csrf
										<div class="w-50 mr-2">
											<input type="hidden" id="productId-1" value="1">
											<select class="form-control mb-1 quantity-selector" id="qnty-slct-1">
												<option>100</option>
												<option>200</option>
												<option>300</option>
												<option>400</option>
												<option>500</option>
												<option>600</option>
												<option>700</option>
												<option>800</option>
												<option>900</option>
												<option>1000</option>
												<option>Custom</option>
											</select>
											<input type="number" id="qnty-cstm-1" class="form-control custom-quantity" min="25">
										</div>
										<div class="w-50 h-100 d-flex justify-content-center">
											<button type="submit" data-select="qnty-slct-1" data-custome="qnty-cstm-1" data-product="productId-1" class="text-white btn btn-success submit-btn">Add to card <i class="fas fa-arrow-right"></i></button>
										</div>
										</form>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<div class="p-2">
											<img src="https://bootstrapious.com/i/snippets/sn-cart/product-2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
											<div class="ml-3 d-inline-block align-middle">
												<h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5><span class="text-muted font-weight-normal font-italic">Category: Electronics</span>
											</div>
										</div>
									</th>
									<td class="align-middle"><strong>$79.00</strong></td>
									<td class="align-middle">
										<form action="{{route('add.to.cart')}}" method="post" class="d-flex">
											@csrf
										<div class="w-50 mr-2">
											<input type="hidden" id="productId-2" value="2">
											<select class="form-control mb-1 quantity-selector" id="qnty-slct-2">
												<option>100</option>
												<option>200</option>
												<option>300</option>
												<option>400</option>
												<option>500</option>
												<option>600</option>
												<option>700</option>
												<option>800</option>
												<option>900</option>
												<option>1000</option>
												<option>Custom</option>
											</select>
											<input type="number" id="qnty-cstm-2" class="form-control custom-quantity" min="25">
										</div>
										<div class="w-50 h-100 d-flex justify-content-center">
											<button type="submit" data-select="qnty-slct-2" data-custome="qnty-cstm-2" data-product="productId-2" class="text-white btn btn-success submit-btn">Add to card <i class="fas fa-arrow-right"></i></button>
										</div>
										</form>
									</td>
								</tr>
								<tr>
									<th scope="row">
										<div class="p-2">
											<img src="https://bootstrapious.com/i/snippets/sn-cart/product-3.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
											<div class="ml-3 d-inline-block align-middle">
												<h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
											</div>
										</div>
									<td class="align-middle"><strong>$79.00</strong></td>
									<td class="align-middle">
										<form action="{{route('add.to.cart')}}" method="post" class="d-flex">
											@csrf
										<div class="w-50 mr-2">
											<input type="hidden" id="productId-3" value="3">
											<select class="form-control mb-1 quantity-selector" id="qnty-slct-3">
												<option>100</option>
												<option>200</option>
												<option>300</option>
												<option>400</option>
												<option>500</option>
												<option>600</option>
												<option>700</option>
												<option>800</option>
												<option>900</option>
												<option>1000</option>
												<option>Custom</option>
											</select>
											<input type="number" id="qnty-cstm-3" class="form-control custom-quantity" min="25">
										</div>
										<div class="w-50 h-100 d-flex justify-content-center">
											<button type="submit" data-select="qnty-slct-3" data-custome="qnty-cstm-3" data-product="productId-3" class="text-white btn btn-success submit-btn">Add to card <i class="fas fa-arrow-right"></i></button>
										</div>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- End -->
				</div>
			</div>
			<!-- <div class="row py-5 p-4 bg-white rounded shadow-sm">
				<div class="col-lg-6">
					<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
					<div class="p-4">
						<p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
						<div class="input-group mb-4 border rounded-pill p-2">
							<input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
							<div class="input-group-append border-0">
								<button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
							</div>
						</div>
					</div>
					<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
					<div class="p-4">
						<p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
						<textarea name="" cols="30" rows="2" class="form-control"></textarea>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
					<div class="p-4">
						<p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
						<ul class="list-unstyled mb-4">
							<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
							<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
							<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
							<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
								<h5 class="font-weight-bold">$400.00</h5>
							</li>
						</ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
					</div>
				</div>
			</div> -->

		</div>
	</div>
</div>
@endsection

@section('customJs')
<script type="text/javascript">
	$(".custom-quantity").hide();
	$(document).ready(function(){
		/*for custom select*/
		$(".quantity-selector").change(function(){
			var value = $(this).val();
			if(value=="Custom")
			{
				$(this).next().show();
			}
			else
			{
				$(this).next().hide();
			}
		});
		/*Ajax base add to cart*/
		$(".submit-btn").click(function(e){
			e.preventDefault();
			var dataProduct = $(this).data("product");
			var dataSelect = $(this).data("select");
			var dataCustome = $(this).data("custome");

			var productId = $("#"+dataProduct).val();
			var selectVal = $("#"+dataSelect).val();
			var customeVal = $("#"+dataCustome).val();
			
			if(selectVal!="Custom" || customeVal >= 25)
			{
				if(customeVal >= 25)
				{
					var originalQuanity = customeVal;
				}
				else
				{
					var originalQuanity = selectVal;
				}

				$.ajax({
					type: 'POST',
					url: "{{ route('add.to.cart') }}",
					data: {product_id:productId, original_quantity:originalQuanity, "_token": "{{ csrf_token() }}" },
					success:function(response){
						$("#message").html(response.msg);
						$("#total-item").html(response.total_items);
						setTimeout(function(){
							$("#message").html("");
					}, 5000);
					}
				});
			}
			else
			{
				Swal.fire(
						  'Error!',
						  'Minimum 25 quantity required.',
						);
			}
		});
	});
</script>
@endsection