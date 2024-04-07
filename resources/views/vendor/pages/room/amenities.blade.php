@extends('vendor.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Vendor/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <h4  class="card-header">{{$title}} <a href="https://fontawesome.com/search" target="_blank"><i class="fa-solid fa-link"></i> Icon</a></h4>
                    <div class="card-body">
                        <form action="">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-name" >
                                <label for="basic-default-name">Icon</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-name" >
                                <label for="basic-default-name">Amenities Name</label>
                            </div>
                        
                            <button class="btn btn-primary mt-2">Add New</button>
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    {{-- <h5 class="card-header">User List</h5> --}}
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                        <table class="table" id="zero_config">
                            <thead>
                                <tr class="text-nowrap">
                                    <th>#</th>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <th scope="row">1</th>
                                    <td><i class="fa-solid fa-wifi"></i></td>
                                    <td>WIFI</td>
                                    <td style="color: green">Publish</td>
                                    <td>26/03/2024</td>
                                    <td>
                                        <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" onclick="deleteConfirmation(event)"><i
                                                class="fa-solid fa-trash"></i></a>

                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
        console.error( error );
        });
    </script>
@endsection
