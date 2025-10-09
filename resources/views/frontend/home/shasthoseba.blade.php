@extends('frontend.layouts.ecommercemaster')

@section('title', "Shop Shasthoseba - Premium Products Online")

@section('meta')
<meta name="description" content="Browse and shop high-quality products from Shasthoseba. Find dairy products, groceries, and more with best prices and fast delivery.">
<meta name="keywords" content="Shasthoseba shop, dairy products, groceries, online store, buy online">
<meta property="og:title" content="Shop Shasthoseba - Premium Products Online">
<meta property="og:description" content="Discover premium products at Shasthoseba. Shop online for dairy, groceries, and more with ease.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="robots" content="index, follow">
@endsection

@push('css')
<style>
.card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
    transform: translateY(-1px) scale(1.01);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.12);
}
</style>
@endpush

@section('content')
<section class="section my-0 py-0">
	<div class="container py-5">

    <div class="row g-4">
        <!-- Sidebar -->
        <div class="col-lg-3 order-2 order-lg-1 d-none d-lg-block">
            <aside class="sidebar" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <h5 class="font-weight-semi-bold pt-3">Product Categories</h5>
                <ul class="nav nav-list flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#" itemprop="url">All ({{ $products->total() }})</a>
                    </li>
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('productCategory', $category->slug) }}" itemprop="url">
                                {{ $category->name_en }} ({{ $category->products()->count() }})
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="col-12 col-lg-9 order-1 order-lg-2">

            <!-- Category Buttons -->
            <div class="d-flex d-lg-none overflow-x-auto mb-4">
                <div class="d-flex flex-nowrap">
                    <a href="{{ route('shop.shasthoseba') }}" class="btn btn-outline-primary m-1 d-flex align-items-center rounded-pill {{ request()->routeIs('shop.shasthoseba') ? 'active' : '' }}" style="{{ request()->routeIs('shop.shasthoseba') ? 'background-color: #18443F; border-color: #18443F; color: #fff;' : '' }}">
                        <span class="ms-2 text-nowrap">All Category</span>
                    </a>
                    @foreach ($categories->sortByDesc('created_at') as $category)
                        <a href="{{ route('productCategory', $category->slug) }}" class="btn btn-outline-primary m-1 d-flex align-items-center rounded-pill {{ request()->segment(2) == $category->slug ? 'active' : '' }}" style="{{ request()->segment(2) == $category->slug ? 'background-color: #18443F; border-color: #18443F; color: #fff;' : '' }}">
                            <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}" alt="{{ $category->name_en }}" class="rounded-circle" width="30" height="30" loading="lazy">
                            <span class="ms-2 text-nowrap">{{ $category->name_en }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Top filter section -->
            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <form method="GET" class="d-flex align-items-center gap-2">
						<select name="sort" id="sort" class="form-select w-auto" onchange="this.form.submit()">
							<option value="1" @if(request()->get('sort')==1) selected @endif>Sort by Latest</option>
							<option value="2" @if(request()->get('sort')==2) selected @endif>Sort by Oldest</option>
							<option value="3" @if(request()->get('sort')==3) selected @endif>Sort by Price: High → Low</option>
							<option value="4" @if(request()->get('sort')==4) selected @endif>Sort by Price: Low → High</option>
						</select>
						<input type="hidden" name="min_price" value="{{ request()->get('min_price') }}">
						<input type="hidden" name="max_price" value="{{ request()->get('max_price') }}">
					</form>
                </div>
                <div class="col-md-6 text-md-end">
                    <span class="text-muted">
                        Showing <strong>{{ $products->firstItem() }} - {{ $products->lastItem() }}</strong> of
                        <strong>{{ $products->total() }}</strong> results
                    </span>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row g-4">
                 @foreach ($products as $product)
					<div class="col-6 col-md-4 col-lg-3" itemscope itemtype="https://schema.org/Product">
						<div class="card h-100 border-0 shadow-sm card-hover">
							
							<!-- Image -->
							<a href="{{ route('productDetails', $product->slug) }}" class="d-block">
								<img 
                                    src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}" 
									class="card-img-top rounded-top" 
									alt="{{ $product->name_en }} - Shasthoseba"
									loading="lazy"
									itemprop="image"
								>
							</a>

							<!-- Body -->
							<div class="card-body d-flex flex-column p-3">
								<small class="d-block text-uppercase mb-1">
									@foreach ($product->categories as $key => $category)
										<span class="font-weight-bold" style="color: #dc3545" itemprop="category">
											{{ $category->name_en }}
										</span>@if(!$loop->last), @endif
									@endforeach
								</small>

								<h6 class="fw-semibold text-truncate mb-1" itemprop="name">
									<a href="{{ route('productDetails', $product->slug) }}" class="text-dark text-decoration-none">
										{{ $product->name_en }}
									</a>
								</h6>

								<div class="mb-1">
									@if($product->discount > 0.00)
										<span class="text-muted text-decoration-line-through me-2 w3-small">
											{{ number_format($product->price, 2) }} ৳
										</span>
									@endif
									<span class="fw-bold text-primary w3-small" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
										<meta itemprop="priceCurrency" content="BDT">
										<span itemprop="price">{{ number_format($product->final_price, 2) }}</span> ৳
									</span>
								</div>

								<div class="mt-auto productCartItem" data-product="{{ $product->id }}">
									@include('frontend.home.includes.productCartItem')
								</div>
							</div>
						</div>
					</div>
				@endforeach
            </div>

            <!-- Pagination -->
            <div class="row mt-4">
                <div class="col">
                    <nav>
                        <ul class="pagination justify-content-end mb-0">
                            {{ $products->links() }}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
@endsection

@push('js')
<script>
    @if(session('success'))
        alert("{{ session('success') }}");
    @endif
</script>
@endpush
