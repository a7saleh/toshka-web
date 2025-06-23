@extends('frontend.layouts.app')

@section('meta_title'){{ translate("Terms & Conditions for Sellers") }}@stop
@section('meta_description'){{ translate("Terms and conditions for sellers using the e-commerce portal.") }}@stop
@section('meta_keywords'){{ translate("seller, ecommerce, terms, conditions") }}@stop

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate("Terms & Conditions for Sellers") }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item has-transition opacity-50 hov-opacity-100">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate("Home") }}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">{{ translate("Terms & Conditions for Sellers") }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="container">
        <div class="p-4 bg-white rounded shadow-sm overflow-hidden mw-100 text-left">
            <p>{{ translate("Welcome to our sellers’ portal.") }}</p>
            <p>{{ translate("By using this platform, you agree to the following terms:") }}</p>

            <ul>
                <li>{{ translate("This platform is for sellers only to list and sell products safely and orderly.") }}</li>
                <li>{{ translate("We do not collect, store, or mine any user or customer data.") }}</li>
                <li>{{ translate("The seller is fully responsible for the accuracy of product information provided.") }}</li>
                <li>{{ translate("Sellers must offer original products that match the declared specifications.") }}</li>
                <li>{{ translate("Any counterfeit or misleading product may result in permanent account suspension.") }}</li>
                <li>{{ translate("Sellers are required to regularly update inventory and pricing information.") }}</li>
                <li>{{ translate("Repeated complaints or issues will result in account review by the administration.") }}</li>
                <li>{{ translate("It is prohibited to publish any content that violates public morals or laws.") }}</li>
            </ul>

            <p>{{ translate("We appreciate your commitment and strive together to provide a reliable and outstanding shopping experience for all users.") }}</p>
        </div>
    </div>
</section>
@endsection
