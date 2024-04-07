@extends('vendor.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <h4 class="card-header">Add Attributes</h4>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="name"> Attributes Name</label>
                                <input type="text" placeholder="Category Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Position</label>
                                <input type="text" placeholder="Category Name" class="form-control">
                            </div>
                            <div class="form-group">

                                <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required="">
                                <label for="name">Hide In detail Service</label>
                            </div>
                            <div class="form-group">

                                <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required="">
                                <label for="name">Hide in filter serch</label>
                            </div>

                            <button class="btn btn-primary mt-2">Add New</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    {{-- <h5 class="card-header">User List</h5> --}}
                    <div class="card-body">


                        <div class="table-responsive text-nowrap">
                            <table class="table" id="zero_config">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                      
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Tour Features</td>
                                        <td >0</td>
                                        
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
@endsection
