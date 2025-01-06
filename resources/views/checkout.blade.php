@extends('layout')
@section('content')
    <div class="row mt-5">
        <div class="col-12 col-md-6 offset-md-3 text-center">
            <p>Proceed to the Stripe checkout to complete your payment.</p>
            <p class="text-danger">
                Note: This is a live transaction. Real money will be used. Proceed with caution.
            </p>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-12 col-md-6 offset-md-3 text-center">
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <form action="/test" method="POST" class="me-md-2">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" id="checkout-test-button" class="btn btn-light btn-lg apple-button">Checkout (Test)</button>
                </form>
                <form action="/live" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" id="checkout-live-button" class="btn btn-dark btn-lg apple-button">Checkout (Live)</button>
                </form>
            </div>
        </div>
    </div>

    <style>
        .apple-button {
            border-radius: 9999px;
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
            font-weight: 600;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.2s ease-in-out;
        }
        .apple-button:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }
    </style>
@endsection