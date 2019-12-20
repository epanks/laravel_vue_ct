@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h2 class="mb-1">{{ __('Preview Paket') }}</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('paket.index') }}">{{ __('Back') }}</a>
            </div>
        </div>
        <div class="card-body">
            <h1>{{ $datapaket->nmpaket }}</h1>
            <p>
                
                <span><b>{{ __('Pagu:') }}</b> {{ $datapaket->pagurmp }}, </span>
                <span><b>{{ __('Keuangan:') }}</b> {{ $datapaket->keuangan }}, </span>
                <span><b>{{ __('Fisik:') }}</b> {{ $datapaket->progres_fisik }}</span>
            </p>
        </div>
    </div>
</div>
@endsection