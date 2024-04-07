@extends('vendor.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h6 class="py-3 mb-4"><span class="text-muted fw-light">Vendor/</span>
        {{ Request::segment(2) . '/' . Request::segment(3) }}

    </h6>

    <form action="" class="browser-default-validation">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Add Room</h5>
                    <div class="card-body">
                  
                        <div class="form-floating form-floating-outline mb-4">
                            <select name="" id="" class="form-control">
                                <option value="">-- Select Room Type --</option>
                                <option value="">Duluxe Room</option>
                            </select>
                            <label for="basic-default-name">Room Type</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                <input type="file" class="form-control" id="basic-default-name" placeholder="Name of the hotel" required="">
                                <label for="basic-default-name">Bed Room</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="basic-default-name" placeholder="Name of the hotel" required="">
                                    <label for="basic-default-name">Washroom</label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="basic-default-name" placeholder="Name of the hotel" required="">
                                    <label for="basic-default-name">Kitchen</label>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="file" class="form-control" id="basic-default-name" placeholder="Name of the hotel" required="">
                                    <label for="basic-default-name">Balcony</label>
                                  </div>
                            </div>
                        </div>

                        
                        <div class="row my-4">
                            <div class="col-md-12">
                                <h4>Room Images</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="basic-default-name" placeholder="Name" >
                                            </td>
                                            <td>
                                                <input type="file" class="form-control" id="basic-default-name" required="">
                                            </td>
                                            <td>
                                                <button class="btn btn-info waves-effect waves-light"><i class="fa-solid fa-plus"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="basic-default-name" placeholder="Name" >
                                            </td>
                                            <td>
                                                <input type="file" class="form-control" id="basic-default-name" required="">
                                            </td>
                                            <td>
                                                <button class="btn btn-danger waves-effect waves-light"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>

                        <div class="form-floating form-floating-outline mb-4">
                            <input type="file" class="form-control" id="basic-default-name" placeholder="Banner Image" required="">
                            <label for="basic-default-name">Feature Image</label>
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
                                      <label class="form-check-label" for="basic-default-checkbox"><i class="fa-solid fa-tv"></i> Flat TV</label>
                                    </div>
                                  </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required="">
                                      <label class="form-check-label" for="basic-default-checkbox"><i class="fa-solid fa-wifi"></i> WIFI</label>
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
          
            
        </div>
    </form>
</div>

@endsection