@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h2 class="mb-1">{{ __('New Paket') }}</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('paket.index') }}">{{ __('Back') }}</a>
            </div>
        </div>
        <div class="card-body">
            @if ($error ?? '')
            <div class="alert alert-danger">
                <strong>{{ $error }}</strong>
            </div>
            @endif
            <form method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="nmpaket">{{ __('Nama Paket') }}</label>
                            <input id="nmpaket" name="nmpaket" type="text" class="form-control @error('nmpaket') is-invalid @enderror" value="@if($paket ?? '') {{ $paket->nmpaket }} @endif">
                            @error('nmpaket')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pagurmp">{{ __('Pagu') }}</label>
                            <input id="pagurmp" name="pagurmp" type="text" class="form-control @error('pagurmp') is-invalid @enderror" value="@if($paket ?? '') {{ $paket->pagurmp }} @endif">
                            @error('pagurmp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keuangan">{{ __('Keuangan') }}</label>
                            <textarea id="keuangan" name="keuangan" rows="6" class="form-control @error('keuangan') is-invalid @enderror">@if($paket ?? '') {{ $paket->keuangan }} @endif</textarea>
                            @error('keuangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="progres_fisik">{{ __('Progres Fisik') }}</label>
                            <input id="progres_fisik" name="progres_fisik" type="text" class="form-control @error('progres_fisik') is-invalid @enderror" value="@if($paket ?? '') {{ $paket->progres_fisik }} @endif">
                            @error('progres_fisik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="progres_fisik">{{ __('Progres Fisik') }}</label>
                            <input id="progres_fisik" name="progres_fisik" type="text" class="form-control @error('progres_fisik') is-invalid @enderror" value="@if($paket ?? '') {{ $paket->progres_fisik }} @endif">
                            @error('progres_fisik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="progres_fisik">{{ __('Progres Fisik') }}</label>
                            <input id="progres_fisik" name="progres_fisik" type="text" class="form-control @error('progres_fisik') is-invalid @enderror" value="@if($paket ?? '') {{ $paket->progres_fisik }} @endif">
                            @error('progres_fisik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <input type="hidden" name="author" value="{{ $author }}">
                            @if ($paket ?? '')
                            @method('PUT')
                            <button class="btn btn-warning" formaction="{{ route('paket.update', $paket) }}" type="submit">{{ __('Update') }}</button>
                            @else
                            <button class="btn btn-primary" formaction="{{ route('paket.store') }}" type="submit">{{ __('Submit') }}</button>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection