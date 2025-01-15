@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h2>
                Load form with CSRF
            </h2>
        </div>
        <div class="col-sm">
            <h2>
                Load form with no-CSRF
            </h2>
        </div>
    </div>

    <div class="row">
        @include('form.groups.csrf')
        @include('form.groups.no-csrf')

    </div>
</div>

@endsection
