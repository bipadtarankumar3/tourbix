@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6 class="py-3 mb-4"><span class="text-muted fw-light">Admin/</span>
            {{ Request::segment(2) . '/' . Request::segment(3) }}

        </h6>

        <form action="" class="browser-default-validation">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <h5 class="card-header">Tour Content</h5>
                        <div class="card-body">

                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-name"
                                    placeholder="Name of the hotel" required="">
                                <label for="basic-default-name">Title</label>
                            </div>

                            <div class="form-floating form-floating-outline mb-4">
                                <textarea name="" class="form-control" id="Content"></textarea>
                                <label for="Content">Content</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <select name="" id="" class="form-control">
                                    <option value="">-- please select --</option>
                                </select>
                                <label for="basic-default-name">Category</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-name"
                                    placeholder="Youtube Video" required="">
                                <label for="basic-default-name">Youtube Video</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="number" multiple class="form-control" id="basic-default-name">
                                        <label for="basic-default-name">Minimum Advance Reservation</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="number" multiple class="form-control" id="basic-default-name">
                                        <label for="basic-default-name">Duration</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="number" multiple class="form-control" id="basic-default-name">
                                        <label for="basic-default-name">Tour Min People</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="number" multiple class="form-control" id="basic-default-name">
                                        <label for="basic-default-name">Tour Max People</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Faqs</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Title</th>
                                            <th>Content</th>

                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right  mb-4">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Include</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Title</th>


                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right  mb-4">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Exclude</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Title</th>


                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right  mb-4">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Itinerary</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Image</th>
                                            <th>Title-Desc</th>
                                            <th>Content</th>
                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right mb-4">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="file" multiple class="form-control" id="basic-default-name">
                                <label for="basic-default-name">Banner Image</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="file" multiple class="form-control" id="basic-default-name">
                                <label for="basic-default-name">Gallery Image</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="file" multiple class="form-control" id="basic-default-name">
                                <label for="basic-default-name">Feature Image</label>
                            </div>


                        </div>
                    </div>

                    <div class="card mt-4">
                        <h5 class="card-header">Tour Location</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-floating form-floating-outline mb-4">
                                        <select name="" id="" class="form-control">
                                            <option value="">-- please select --</option>
                                        </select>
                                        <label for="basic-default-name">Location</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Real Tour address" required="">
                                        <label for="basic-default-name">Real Tour address</label>
                                    </div>

                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="Map Iframe" required="">
                                        <label for="basic-default-name">Map Iframe</label>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mt-4">
                        <h5 class="card-header">Surrounding</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Education</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Distance</th>
                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Health</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Distance</th>
                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Transportation</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Distance</th>
                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Adventures</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Distance</th>
                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Experience</h4>
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Content</th>
                                            <th>Distance</th>
                                        </tr>
                                    </table>
                                    <div class="row float-right mt-2" style="text-align: right">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-info">Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="card mt-4">
                        <h5 class="card-header">Pricing</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="basic-default-name"
                                            placeholder="Price" required="">
                                        <label for="basic-default-name">Price</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input type="text" class="form-control" id="basic-default-name"
                                            placeholder="Price" required="">
                                        <label for="basic-default-name">Sale Price</label>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Enable Extra
                                                Price</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Service
                                                Fee</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">Avaliblity</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Fixced Dates</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Open Hours
                                                </label>
                                        </div>
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
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="card mt-4">
                        <h5 class="card-header">Author Setting</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <select name="" id="" class="form-control">
                                                <option value="">-- plese select--</option>
                                            </select>
                                            {{-- <label class="form-check-label" for="basic-default-checkbox">Hotels</label> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">Top Feature</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Hotels</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <select name="" id="" class="form-control">
                                                <option value=""> alaways Available</option>
                                            </select>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <h5 class="card-header">Attribute: Property Type</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Hotels</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <h5 class="card-header">Attribute: Travel Style</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Nature</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <h5 class="card-header">Attribute: Tour Feature</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Wifi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <h5 class="card-header">Attribute: Facilities</h5>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                                required="">
                                            <label class="form-check-label" for="basic-default-checkbox">Wifi</label>
                                        </div>
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
