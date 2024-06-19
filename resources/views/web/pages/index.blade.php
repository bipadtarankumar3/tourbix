@extends('web.layouts.main')
@section('content')
<section class="hed-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 p-0">
          <img src="{{ URL::to('public/assets/web/images/banner.jpg')}}" alt="" class="img-fluid"/>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="down-border">
            <div class="row">
            <div class="col-md-12">
            <div class="tab-box">
              <button class="tablink" onclick="openPage('TabA', this)" id="defaultOpen">Stays</button>
              <button class="tablink" onclick="openPage('TabB', this,)">Flights</button>
              <button class="tablink" onclick="openPage('TabC', this,)">Cars</button>
              <button class="tablink" onclick="openPage('TabD', this,)">Packages</button>
              <button class="tablink" onclick="openPage('TabE', this,)">Things to do</button>
              <button class="tablink" onclick="openPage('TabF', this,)">Cruises</button>
            </div>
            </div>
            
            <div class="col-md-12">
            <div id="TabA" class="tabcontent-inner">
              <form class="row book-form">
              <div class="col-md-11">
              <div class="row">
              <div class="form-group col-md-4">
                <label for="exampleInputAddress"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputAddress" aria-describedby="AddressHelp" placeholder="Going to">
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputDate"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDate" placeholder="Apr 29 - May 3">
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputTravelers"><i class="fa fa-user-o" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputTravelers" placeholder="2 travelers, 1 room">
              </div>
              <div class="form-group form-check col-md-2 col-sm-6">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Add a flight</label>
              </div>
              <div class="form-group form-check col-md-2 col-sm-6">
                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                <label class="form-check-label" for="exampleCheck2">Add a car</label>
              </div>
              </div>
              </div>
              <div class="col-md-1 p-0-c">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              </div>
            </form>
            </div>
            
            <div id="TabB" class="tabcontent-inner">
              <form class="row book-form">
              <div class="col-md-11">
              <div class="row">
              <div class="form-group col-md-3">
                <label for="exampleInputLeaving"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputLeaving" aria-describedby="AddressHelp" placeholder="Leaving from">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputAddress"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputAddress" aria-describedby="AddressHelp" placeholder="Going to">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputDate"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDate" placeholder="Apr 29 - May 3">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputTravelers"><i class="fa fa-user-o" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputTravelers" placeholder="1 travelers">
              </div>
              </div>
              </div>
              <div class="col-md-1 p-0-c">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              </div>
            </form>
            </div>
            
            <div id="TabC" class="tabcontent-inner">
              <form class="row book-form">
              <div class="col-md-11">
              <div class="row">
              <div class="form-group col-md-3">
                <label for="exampleInputPickup"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputPickup" aria-describedby="AddressHelp" placeholder="Pick-up">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputPickup2"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputPickup2" aria-describedby="AddressHelp" placeholder="Same as pick-up">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputDate"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDate" placeholder="Apr 29 - May 3">
              </div>
              <div class="col-md-3">
                <div class="row">
                  <div class="form-group col-md-6 pl-2-c pr-2-c">
                    <input type="text" class="form-control pl-2" id="exampleInputPickuptime" placeholder="Pick-up time">
                  </div>
                  <div class="form-group col-md-6 pl-2-c pr-2-c">
                    <input type="text" class="form-control pl-2" id="exampleInputDropofftime" placeholder="Drop-off time">
                  </div>
                </div>
              </div>
              
              </div>
              </div>
              <div class="col-md-1 p-0-c">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              </div>
            </form>
            </div>
            
            <div id="TabD" class="tabcontent-inner">
              <form class="row book-form">
              <div class="col-md-11">
              <div class="row">
              <div class="form-group col-md-3">
                <label for="exampleInputLeaving2"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputLeaving2" aria-describedby="AddressHelp" placeholder="Leaving from">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputGoing"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputGoing" aria-describedby="AddressHelp" placeholder="Going to">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputDate2"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDate2" placeholder="Apr 29 - May 3">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputTravelers2"><i class="fa fa-user-o" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputTravelers2" placeholder="1 travelers">
              </div>
              </div>
              </div>
              <div class="col-md-1 p-0-c">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              </div>
            </form>
            </div>
            
            <div id="TabE" class="tabcontent-inner">
              <form class="row book-form">
              <div class="col-md-11">
              <div class="row">
              
              <div class="form-group col-md-6">
                <label for="exampleInputGoing2"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputGoing2" aria-describedby="AddressHelp" placeholder="Going to">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputDate3"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDate3" placeholder="Apr 29 - May 3">
              </div>
              </div>
              </div>
              <div class="col-md-1 p-0-c">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              </div>
            </form>
            </div>
            
            <div id="TabF" class="tabcontent-inner">
              <form class="row book-form">
              <div class="col-md-11">
              <div class="row">
              <div class="form-group col-md-3">
                <label for="exampleInputGoing3"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputGoing3" aria-describedby="AddressHelp" placeholder="Going to">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputDeparting"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDeparting" placeholder="Departing between">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputDuration"><i class="fa fa-clock-o" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputDuration" placeholder="Duration">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputTravelers3"><i class="fa fa-user-o" aria-hidden="true"></i></label>
                <input type="text" class="form-control" id="exampleInputTravelers3" placeholder="Travelers">
              </div>
              </div>
              </div>
              <div class="col-md-1 p-0-c">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              </div>
            </form>
            </div>
            
            </div>
            </div>
            </div>
            
            
            
          </div>
        </div>
      </div>
  </section>
  
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-4">
          <h5 class="mt-5 h-fo-size">Explore stays in trending destinations</h5>
        </div>
        <div class="col-md-12 mb-4">
          <div class="owl-carousel owl-theme owl-trending">
            <div class="">
              <div class="trending-box">
               <img src="{{ URL::to('public/assets/web/images/img-1.jpg')}}" alt="" class="img-fluid"/>
               <h6>Darjeeling</h6>
               <p>India</p>
             </div>
            </div>
            <div class="">
              <div class="trending-box">
               <img src="{{ URL::to('public/assets/web/images/img-2.jpg')}}" alt="" class="img-fluid"/>
               <h6>Sikkim</h6>
               <p>India</p>
             </div>
            </div>
            <div class="">
              <div class="trending-box">
               <img src="{{ URL::to('public/assets/web/images/img-3.jpg')}}" alt="" class="img-fluid"/>
               <h6>Meghalaya</h6>
               <p>India</p>
             </div>
            </div>
            <div class="">
              <div class="trending-box">
               <img src="{{ URL::to('public/assets/web/images/img-4.jpg')}}" alt="" class="img-fluid"/>
               <h6>Arunachal Pradesh</h6>
               <p>India</p>
             </div>
            </div>
            <div class="">
              <div class="trending-box">
               <img src="{{ URL::to('public/assets/web/images/img-5.jpg')}}" alt="" class="img-fluid"/>
               <h6>Darjeeling</h6>
               <p>India</p>
             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-6.jpg')}}" alt="" class="img-fluid"/>
             <h6>Find your perfect trip</h6>
            </div>
             <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
           </div>
        </div>
        <div class="col-md-4 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-7.jpg')}}" alt="" class="img-fluid"/>
             <h6>Book with flexibility</h6>
            </div>
             <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
           </div>
        </div>
        <div class="col-md-4 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-8.jpg')}}" alt="" class="img-fluid"/>
             <h6>We’ve got your back</h6>
            </div>
             <p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
           </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-9.jpg')}}" alt="" class="img-fluid"/>
             <div class="inner-box">
              <h5>All-inclusive resorts </h5>
              <p>Think of nothing beyond having a great time with your family</p>
              <button class="btn btn-sm btn-light">View Details</button>
             </div>
            </div>
           </div>
        </div>
        <div class="col-md-6 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-10.jpg')}}" alt="" class="img-fluid"/>
             <div class="inner-box">
              <h5>Last minute getaways</h5>
              <p>Think of nothing beyond having a great time with your family</p>
              <button class="btn btn-sm btn-light">View Details</button>
             </div>
            </div>
           </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="top-birder"></div>
        </div>
        <div class="col-md-12 mb-4">
          <h5 class="h-fo-size">Start planning your next trip</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-11.jpg')}}" alt="" class="img-fluid"/>
             <h6>Sunny beach hotel offers</h6>
            </div>
           </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-12.jpg')}}" alt="" class="img-fluid"/>
             <h6>Car rental deals</h6>
            </div>
           </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-13.jpg')}}" alt="" class="img-fluid"/>
             <h6>Member discounts</h6>
            </div>
           </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-14.jpg')}}" alt="" class="img-fluid"/>
             <h6>Vacation rental offers</h6>
            </div>
           </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="top-birder"></div>
        </div>
        <div class="col-md-12 mb-3">
          <h5 class="h-fo-size">Goa: Discover an island paradise</h5>
          <p>Experience an unforgettable getaway in Goa, an emerald island surrounded by sapphire waters.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-15.jpg')}}" alt="" class="img-fluid"/>
             <h6>Sunny beach hotel offers</h6>
            </div>
           </div>
        </div>
        <div class="col-md-4 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-16.jpg')}}" alt="" class="img-fluid"/>
             <h6>Sunny beach hotel offers</h6>
            </div>
           </div>
        </div>
        <div class="col-md-4 mb-4">
           <div class="trending-box2">
           <div class="inner">
             <img src="{{ URL::to('public/assets/web/images/img-17.jpg')}}" alt="" class="img-fluid"/>
             <h6>Sunny beach hotel offers</h6>
            </div>
           </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="top-birder"></div>
        </div>
        <div class="col-md-12 mb-4">
          <h5 class="h-fo-size">Here to help keep you on the move</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="help-box">
            <table class="w-100">
              <tr>
                <td width="95%"><h5>Change or cancel a trip</h5></td>
                <td width="5%"><a href="#"><i class="fa fa-pencil"></i></a></td>
              </tr>
              <tr>
                <td><p>Make updated to your itinerary or cancel a booking</p></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="help-box">
            <table class="w-100">
              <tr>
                <td width="95%"><h5>Use a credit or coupon</h5></td>
                <td width="5%"><a href="#"><i class="fa fa-usd"></i></a></td>
              </tr>
              <tr>
                <td><p>Apply a coupon code or credit to a new trip</p></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="help-box">
            <table>
              <tr>
                <td><h5>Track your refund</h5></td>
                <td></td>
              </tr>
              <tr>
                <td><p>Check the status of a refund currently in progress</p></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-5">
          <h5 class="h-fo-size">Destination ideas to plan your next trip</h5>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="wf-accordion-group js-accordion-group">
          <div class="wf-accordion js-accordion">
              <div class="wf-accordion__header js-accordion__header">
                  <h3 class="wf-accordion__trigger js-accordion__trigger">Hotels</h3>
              </div>
              <div class="wf-accordion__panel js-accordion__panel">
                  <p>A. details</p>
              </div>
          </div>
          <div class="wf-accordion js-accordion" >
              <div class="wf-accordion__header js-accordion__header">
                  <h3 class="wf-accordion__trigger js-accordion__trigger">Vacation packages</h3>
              </div>
              <div class="wf-accordion__panel js-accordion__panel">
                  <p>A. details</p>
              </div>
          </div>
          <div class="wf-accordion js-accordion">
              <div class="wf-accordion__header js-accordion__header">
                  <h3 class="wf-accordion__trigger js-accordion__trigger">
                      <span class="some-important-modifier-class">Cruises</span>
                  </h3>
              </div>
              <div class="wf-accordion__panel js-accordion__panel">
                  <p>A. details</p>
              </div>
          </div>
        </div>
        </div>
        <div class="col-md-6">
          <div class="wf-accordion-group js-accordion-group">
          <div class="wf-accordion js-accordion">
              <div class="wf-accordion__header js-accordion__header">
                  <h3 class="wf-accordion__trigger js-accordion__trigger">Flights</h3>
              </div>
              <div class="wf-accordion__panel js-accordion__panel">
                  <p>A. details</p>
              </div>
          </div>
          <div class="wf-accordion js-accordion" >
              <div class="wf-accordion__header js-accordion__header">
                  <h3 class="wf-accordion__trigger js-accordion__trigger">Cars</h3>
              </div>
              <div class="wf-accordion__panel js-accordion__panel">
                  <p>A. details</p>
              </div>
          </div>
          <div class="wf-accordion js-accordion">
              <div class="wf-accordion__header js-accordion__header">
                  <h3 class="wf-accordion__trigger js-accordion__trigger">
                      <span class="some-important-modifier-class">Travel deals</span>
                  </h3>
              </div>
              <div class="wf-accordion__panel js-accordion__panel">
                  <p>A. details</p>
              </div>
          </div>
        </div>
        </div>
      </div>
      
    </div>
  </section>
@endsection