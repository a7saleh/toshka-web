@extends('frontend.layouts.app')

@section('meta_title'){{ translate("Terms & Conditions for Driver") }}@stop
@section('meta_description'){{ translate("Terms and conditions for Driver using the e-commerce portal.") }}@stop
@section('meta_keywords'){{ translate("Driver, ecommerce, terms, conditions") }}@stop

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
               <h1 class="fw-600 h4">{{ translate("Terms & Conditions for Driver") }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item has-transition opacity-50 hov-opacity-100">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">{{ translate('Terms & Conditions') }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="container">
        <div class="p-4 bg-white rounded shadow-sm overflow-hidden mw-100 text-left">
            <p>{{ translate("Welcome to the driver’s portal on our platform.") }}</p>
            <p>{{ translate("By using this platform, you agree to the following terms:") }}</p>
            <p>{{ translate("This platform is intended for drivers to fulfill shipping and delivery requests only.") }}</p>
            <p>{{ translate("We do not collect, store, or mine any user or customer data.") }}</p>
            <p>{{ translate("The driver is fully responsible for the orders they accept and deliver.") }}</p>
            <p>{{ translate("Drivers must adhere to scheduled times and ensure safe and proper delivery of products.") }}</p>
            <p>{{ translate("Repeated violations or delays may lead to suspension of the driver’s account.") }}</p>
            <p>{{ translate("Communication with customers must remain professional and respect their privacy.") }}</p>
            <p>{{ translate("Sharing customer information or order details with any third party is strictly prohibited.") }}</p>
            <p>{{ translate("If any issue arises during delivery, the driver must immediately contact technical support.") }}</p>
            <p>{{ translate("We appreciate your commitment and aim to provide a secure and reliable service for all parties involved.") }}</p>
        </div>
    </div>
</section>
@endsection
