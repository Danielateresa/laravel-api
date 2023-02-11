@extends('layouts.app')
@section('content')

<div class="container-fluid pb-5 mb-4 px-0">

    <div class="bg-light py-5">
        <div class="container">
            <h1 class="display-5 fw-bold p-5">
                Welcome to <span class="text-danger">Boolfolio</span> , your personal portfolio management system
            </h1>
        </div>

    </div>

    <div class="container p-5">
        <p class="col-md-8 fs-5 mt-4">Through a simple and intuitive tabular management system, you can add, edit,
            delete and
            manage projects within your portfolio.</p>

        <p class="col-md-8 fs-5">Select which category to associate with the individual project, create new ones or
            modify existing ones
            according to your needs.</p>

        <p class="col-md-8 fs-5">Choose which tags to assign to different projects: #Html, #CSS, #JavaScript, #php; the
            possibilities are
            many.
            If you don't find the right tags, create new ones or edit existing ones.</p>
        <button class="btn btn-primary btn-lg mt-5" type="button" href="{{ route('login') }}">Start now</button>
    </div>

</div>

@endsection