@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>
        <div class="row">
            <div class="col-md-9">
                {{-- <h4>{{ $title }}</h4> --}}
                <div class="card ">
                    <h5 class="card-header">General</h5>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Coupon Code</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Coupon Code" required="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Coupon Name</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Coupon Name" required="">

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Coupon Amount</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Coupon Amount" required="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Discount Type</label>
                                    <select name="discount_type" id="" class="form-control">
                                        <option value="">--select--</option>
                                        <option value="">Flat</option>
                                        <option value="">Percentage</option>
                                    </select>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Feature Image </label>
                                    <input type="file" class="form-control" id="basic-default-name" placeholder="Image"
                                        required="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">End Date</label>
                                    <input type="date" class="form-control" id="basic-default-name"
                                        placeholder="End Date" required="">

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card mt-4">
                    <h5 class="card-header">Usage Restriction</h5>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Minimum Spend</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Minimum Spend" required="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Maximum Spend</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Maximum Spend" required="">

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Only For Services</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--select--</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Only For User</label>
                                    <select name="discount_type" id="" class="form-control">
                                        <option value="">--select--</option>

                                    </select>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card mt-4">
                    <h5 class="card-header">Usage Limits</h5>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Usage Limit Per Coupon</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Usage Limit Per Coupon" required="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="basic-default-name">Usage Limit Per User</label>
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Usage Limit Per User" required="">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <h5 class="card-header">Publish</h5>
                    <div class="card-body">

                        <div class="mb-4">
                            <div class="form-check mb-2">
                                <input type="radio" id="basic-default-radio-male" name="basic-default-radio"
                                    class="form-check-input" required="" checked="">
                                <label class="form-check-label" for="basic-default-radio-male">Draft</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="basic-default-radio-female" name="basic-default-radio"
                                    class="form-check-input" required="">
                                <label class="form-check-label" for="basic-default-radio-female">Publish</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
