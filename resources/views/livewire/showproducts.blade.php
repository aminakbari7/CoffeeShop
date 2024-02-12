<div>
	<div>
    <section class="ftco-section" dir="rtl">
    	<div class="container">
        <div class="row">
			@if($size==0)

				<div class="col-md-3">
				<div class="menu-entry">
    					<div class="text text-center pt-4">
    						<h3 class="text-success">search result</a></h3>
    						<p class="text-warning">nothing found</p>

    					</div>
    				</div>
				</div>
			@endif
			@foreach ($products as $product)
			<div class="col-md-3">
				<div class="menu-entry">
    					<a href="{{route('product.showsingle' ,$product->id)}}" class="img" style="background-image: url({{asset('storage/images/'.$product->image)}});"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="{{route('product.showsingle' ,$product->id)}}">{{$product->name  }}</a></h3>
    						<p>{{$product->description  }}</p>
    						<p class="price"><span>{{$product->price }}</span></p>
    						<p><a href="{{route('product.showsingle' ,$product->id)}}"class="btn btn-primary btn-outline-primary">Show</a></p>
							<p><a class="btn btn-primary btn-outline-primary" wire:key="product-{{ $product->id }}" wire:click="delproduct({{ $product->id }})">حذف</a></p>

    					</div>
    				</div>
				</div>
				@endforeach
        </div>

    	</div>
    </section>

  <div class="d-felx justify-content-center">
	{{ $products->links('livewire.pagination') }}
  </div>
</div>
</div>
