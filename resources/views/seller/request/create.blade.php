@extends('customer.master')
@section('customer')


<div class="rts-navigation-area-breadcrumb">
    <div class="container-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="navigator-breadcrumb-wrapper">
                    <a href="index.html">Home</a>
                    <i class="fa-regular fa-chevron-right"></i>
                    <a class="current" href="index.html">Seller Request</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="account-tab-area-start rts-section-gap">
    <div class="container-2">
        <div class="row">
            <h1 class="title">Request to Become a Seller</h1>
            <form action="{{ route('seller.request.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="message">Message <span style="color: red">*</span></label>
                    <textarea style="border: 1px solid #629D23;" name="message" id="message" placeholder="Write Message. why you want to be a seller! *" required class="form-control" rows="5"></textarea>
                </div>
                <button type="submit" class="rts-btn btn-primary">Submit Request</button>
            </form>        
        </div>
    </div>
</div>
    

    

@endsection