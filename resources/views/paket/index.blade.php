@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <h2 class="mb-1">{{ __('Paket') }}</h2>
                    </div>
                    <div class="float-right">
                        
                            <a class="btn btn-primary" href="{{ route('paket.create') }}">{{ __('Add New') }}</a>                            
                        
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('No') }}</th>
                                <th>{{ __('Kode Satker') }}</th>
                                <th>{{ __('Nama Paket') }}</th>
                                <th>{{ __('Pagu') }}</th>
                                <th>{{ __('Output') }}</th>
                                <th>{{ __('Outcome') }}</th>
                                <th>{{ __('Keuangan') }}</th>
                                <th>{{ __('Progres Fisik') }}</th>
                                <th>{{ __('Keterangan') }}</th>
                                <th width="180">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1 @endphp

                            @foreach($datapaket as $datapaket)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $datapaket->kdsatker }}</td>
                                <td>{{ $datapaket->nmpaket }}</td>
                                <td>{{ $datapaket->pagurmp }}</td>
                                <td>{{ $datapaket->trgoutput }}</td>
                                <td>{{ $datapaket->trgoutcome }}</td>
                                <td>{{ $datapaket->keuangan }}</td>
                                <td>{{ $datapaket->progres_fisik }}</td>
                                <td>{{ $datapaket->keuangan }}</td>
                                <td>                                   
                                        
                                        <a class="btn btn-info btn-sm" href="{{ route('paket.show', $datapaket) }}">{{ __('View') }}</a>
                                        <a class="btn btn-warning btn-sm" href="{{ route('paket.edit', $datapaket) }}">{{ __('Edit') }}</a>
                                       <form action="{{ route('paket.destroy', $datapaket) }}" method="POST" class="d-inline">
                                            @csrf 
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">{{ __('Trash') }}</a>
                                        </form>
                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection