@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    {{-- <h5 class="card-header">User List</h5> --}}
                    <div class="table-responsive text-nowrap">
                        <table class="table" id="zero_config">
                            <thead>
                                <tr class="text-nowrap">
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Desc</th>
                                    <th>Image</th>
                                    <th>Pricing</th>
                                    <th>Status</th>
                                    
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>26/03/2024</td>
                                    <td>Exprience</td>
                                    <td>Description</td>
                                    <td>
                                        <img src="" alt="">
                                    </td>
                                    <td>2000</td>
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
    <script>
        ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
        console.error( error );
        });
    </script>
@endsection
