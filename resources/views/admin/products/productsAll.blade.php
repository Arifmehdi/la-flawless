@extends('admin.master')

@section('title')
   Admin Dashboard | Products All
@endsection

@push('css')
<!-- Custom CSS can be added here if needed -->
@endpush

@section('body')
<section class="content py-3">
    <div class="row">
        <div class="col-md-11 mx-auto">

            {{-- Card: Header with Page Title and Add Product Button --}}
            <div class="card mb-2 shadow-lg">
                <div class="card-header px-2 py-2">
                    <h3 class="card-title w3-small text-bold text-muted pt-1">
                        <i class="fas fa-sitemap text-primary"></i> Products
                    </h3>
                    <div class="card-tools w3-small">
                        <a href="{{ route('admin.productCreate') }}" 
                           class="btn-create-from btn btn-outline-primary btn-xs pull-right mr-2 py-1">
                            <i class="fas fa-plus-square"></i> Add New Product
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card: Products Table with Search --}}
            <div class="card w3-round shadow-lg">
                <div class="card-header pl-2 py-2">
                    <h3 class="card-title w3-small text-bold text-muted">
                        <i class="fas fa-th text-primary pt-1"></i> All Products
                    </h3>
                    <div class="card-tools">
                        {{-- Search input --}}
                        <div class="input-group input-group-sm">
                            <input type="search" name="q" 
                                   class="product-search form-control border-right-0 border py-2" 
                                   data-url="{{ route('admin.productSearch', ['type' => 'product']) }}"  
                                   placeholder="Search name, price, id...">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text bg-transparent">
                                    <i class="fa fa-search w3-text-orange"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card body: Products list and pagination --}}
                <div class="card-body bg-light px-0 pb-0 pt-2">
                    <div class="col-sm-12">
                        <div class="table-responsive table-responsive-sm data-container">
                            {{-- Include product search results partial --}}
                            @include('admin.products.searchData')
                        </div>

                        {{-- Pagination links --}}
                        <div class="w3-small float-right pt-1">
                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        // Toggle product status active/inactive via AJAX
        $(document).on('click', ".productStatus", function(e){
            e.preventDefault();
            var that = $(this);
            var url = that.attr('data-url');
            $.ajax({
                url: url,
                method: "get",
                success: function(res) {
                    if(res.active == true) {
                        that.removeClass('badge-danger').addClass('badge-primary');
                        that.text('Active');
                    } else {
                        that.removeClass('badge-primary').addClass('badge-danger');
                        that.text('Inactive');
                    }
                }
            });
        });

        // Live search products with AJAX on keyup
        $(document).on('keyup', ".product-search", function(e){
            e.preventDefault();
            var that = $(this);
            var url = that.attr('data-url');
            var q = that.val();
            $.ajax({
                url: url,
                data : {q: q},
                method: "get",
                success: function(res) {
                    if(res.success) {
                        $(".data-container").empty().append(res.page);
                    }
                }
            });
        });
    });

    // Utility function to generate slug from string
    function makeSlug(val) {
        let str = val;
        let output = str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(output);
    }
</script>
@endpush
