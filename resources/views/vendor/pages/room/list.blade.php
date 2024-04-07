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
                    {{-- <h5 class="card-header">Publish</h5> --}}
                    <div class="card-body">
                        <div class="float-right my-2 text-right" style="text-align: right">
                            <a href="{{URL::to('vendor/room/addRoom')}}"><button type="button" class="btn btn-warning">Add Room</button></a>
                            <a href="{{URL::to('vendor/room/avalibility')}}"><button type="button" class="btn btn-success">Avalibility</button></a>
                            
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table" id="zero_config">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th>#</th>
                                        <th>Room Type</th>
                                        <th>Room Name</th>
                                        <th>No Of Rooms</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        
                                        <th>Action</th>
    
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Duluxe Room</td>
                                        <td>3 Pax Room Duluxe Room</td>
                                        <td>5</td>
                                        <td>5000</td>
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