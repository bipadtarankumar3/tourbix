@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row gy-4">
            <!-- Congratulations card -->
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-1">Total Hotel</h4>
                       
                        <a href="javascript:;" class="btn btn-sm btn-primary">View </a>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-1">Total User</h4>
                       
                        <a href="javascript:;" class="btn btn-sm btn-primary">View </a>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-1">Total Vendor</h4>
                       
                        <a href="javascript:;" class="btn btn-sm btn-primary">View </a>
                    </div>
                  
                </div>
            </div>
            <!--/ Congratulations card -->



            <!-- Data Tables -->
            <div class="col-12">
                <div class="card">
                    <h4>Recent Bookings</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-truncate">#</th>
                                    <th class="text-truncate">Item</th>
                                    <th class="text-truncate">Total</th>
                                    <th class="text-truncate">Paid</th>
                                    <th class="text-truncate">Status</th>
                                    <th class="text-truncate">created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td class="text-truncate">Hitel Hill</td>
                                    <td class="text-truncate">1500</td>
                                    <td class="text-truncate">0</td>
                                    <td class="text-truncate">Unpaid</td>
                                    <td><span class="badge bg-label-warning rounded-pill">26/03/2024</span></td>
                                </tr>
 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Data Tables -->
        </div>

    </div>
@endsection
