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
                    <h5 class="card-header">Add Experiance</h5>
                    <div class="card-body">
                  
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" id="basic-default-name" placeholder="Name of the hotel" required="">
                          <label for="basic-default-name">Title</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" id="basic-default-name" placeholder="Name of the hotel" required="">
                          <label for="basic-default-name">Short Desc</label>
                        </div>

                        <div class="form-floating form-floating-outline mb-4">
                            <input type="file" class="form-control" id="basic-default-name" placeholder="Banner Image" required="">
                            <label for="basic-default-name">Feature Image</label>
                        </div>

                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="formValidationBio" name="formValidationBio" placeholder="Add Description" rows="3" style="height: 196px;"></textarea>
                            <label for="formValidationBio">Description</label>
                          </div>
                       
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Package Price</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline mb-4">
                                    <input type="text" multiple class="form-control" id="basic-default-name" >
                                    <label for="basic-default-name">Discount</label>
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
                                        <th>Title</th>
                                        <th>Short description</th>
                                        <th>Image</th>
                                        <th>Long Description</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Status</th>
                                        
                                        <th>Action</th>
    
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Package Title</td>
                                        <td>Lorem Ifsum</td>
                                        <td></td>
                                        <td>3 Pax Room Duluxe Room</td>
                                        <td>2000</td>
                                        <td>10</td>
                                        <td style="color: green">Publish</td>
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