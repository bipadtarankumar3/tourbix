@extends('admin.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
        {{ Request::segment(2) . '/' . Request::segment(3) }}

    </h6>

    <form action="" class="browser-default-validation">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Add Room</h5>
                    <div class="card-body">
                  
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" id="basic-default-name" placeholder="Name of the hotel" required="">
                          <label for="basic-default-name">Room Name</label>
                        </div>

                        <div class="form-floating form-floating-outline mb-4">
                            <input type="file" class="form-control" id="basic-default-name" placeholder="Banner Image" required="">
                            <label for="basic-default-name">Feature Image</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="file" multiple class="form-control" id="basic-default-name" >
                            <label for="basic-default-name">Gallery Image</label>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Price</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Number Of Rooms</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" multiple class="form-control" id="basic-default-name" >
                            <label for="basic-default-name">Minimum Days Stay Requirments</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Number Of Beds</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Room Size</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Max Adults</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Max Children</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h5>Room Amenities</h5>
                                <div class="mb-3">
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required="">
                                      <label class="form-check-label" for="basic-default-checkbox">Flat TV</label>
                                    </div>
                                  </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required="">
                                      <label class="form-check-label" for="basic-default-checkbox">Flat TV</label>
                                    </div>
                                  </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required="">
                                      <label class="form-check-label" for="basic-default-checkbox">Flat TV</label>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Import Url</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline mb-4">
                                    <select class="form-select" id="bs-validation-country" required="">
                                      <option value="">Publish</option>
                                    </select>
                                    <label class="form-label" for="bs-validation-country">Status</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                

            </div>
            <div class="col-md-8">
                <div class="card">
                    {{-- <h5 class="card-header">Publish</h5> --}}
                    <div class="card-body">

                        <div class="table-responsive text-nowrap">
                            <table class="table" id="zero_config">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th>#</th>
                                        <th>Room Name</th>
                                        <th>Number</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        
                                        <th>Action</th>
    
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>3 Pax Room Duluxe Room</td>
                                        <td>2000</td>
                                        <td style="color: green">Publish</td>
                                        <td>2</td>
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
    </form>
</div>

@endsection