@extends('admin.master')

@section('title') Admin Dashboard | Order List @endsection

@push('css')
<!-- Add custom styles here if needed -->
@endpush

@section('body')
<section class="content py-3">
    <div class="row">
        <div class="col-md-11 mx-auto">

            <!-- Filter Card -->
            <div class="card">
                <div class="card-body">

                    <!-- Order Filter Form -->
                    <form action="{{ route('admin.orderList') }}" method="get">
                        <div class="form-row">

                            <!-- Date From -->
                            <div class="form-group input-group-sm col-md-2">
                                <label for="date_from">Date From</label>
                                <input type="date" name="date_from" class="form-control"
                                    id="date_from" value="{{ request()->date_from }}" placeholder="Date From">
                            </div>

                            <!-- Date To -->
                            <div class="form-group input-group-sm col-md-2">
                                <label for="date_to">Date To</label>
                                <input type="date" name="date_to" class="form-control"
                                    id="date_to" value="{{ request()->date_to }}" placeholder="Date To">
                            </div>

                            <!-- Order Status -->
                            <div class="form-group input-group-sm col-md-2">
                                <label for="status">Order Status</label>
                                <select name="status" id="status" class="round-0 form-control">
                                    <option value="">All Status</option>
                                    @foreach (config('parameter.order_status') as $item)
                                        <option value="{{ $item }}" {{ $item == request()->status ? 'selected' : '' }}>
                                            {{ ucfirst($item) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Mobile -->
                            <div class="form-group input-group-sm col-md-2">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" class="form-control"
                                    id="mobile" value="{{ request()->mobile }}" placeholder="Mobile">
                            </div>

                            <!-- Search Button -->
                            <div class="form-group input-group-sm col-md-2">
                                <br class="d-none d-md-block">
                                <button class="btn btn-warning btn-sm btn-block mt-2">
                                    Search
                                </button>
                            </div>

                            {{-- <!-- Print Button -->
                            <div class="form-group input-group-sm col-md-2">
                                <br class="d-none d-md-block">
                                <button type="submit" name="submit" value="print"
                                    id="print" class="btn btn-primary btn-sm btn-block mt-2">
                                    <i class="fas fa-print"></i> Print
                                </button>
                            </div> --}}

                        </div>
                    </form>
                    <!-- End Filter Form -->

                </div>
            </div>
            <!-- End Filter Card -->

        </div>
    </div>

    <!-- Orders Table -->
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card w3-round shadow-lg">

                <!-- Card Header -->
                <div class="card-header pl-2 py-2">
                    <h3 class="card-title w3-small text-bold text-muted pt-2">
                        <i class="fas fa-th text-primary"></i> All Orders
                    </h3>
                </div>

                <!-- Card Body -->
                <div class="card-body bg-light px-0 pb-0 pt-2">
                    <div class="col-sm-12">
                        @include('admin.orders.includes.orderListPart')
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Orders Table -->

</section>
@endsection
