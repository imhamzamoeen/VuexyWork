@extends('layouts.master')

@push('extended-css')

@endpush

@section('content')

    <x-company-exists-file-upload />

@endsection

@push('extended-js')
<script src="{{asset('js/dynamic_ajax.js')}}"></script>
<script src="{{asset('js/hamza_custom/company-exists/company-exists-form-submit.js')}}"></script>
@endpush
