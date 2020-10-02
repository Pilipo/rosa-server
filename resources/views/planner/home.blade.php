@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $time->format('D, M d') }} to {{ $time->endOfWeek()->format('D, M d') }}</div>
                <div class="card-body">
                    <div class="row text-center">
                        @for ($i = 0; $i < 7; $i++)
                        <div class="col-6">
                            <div class="card mb-2">
                                <div class="card-header">
                                    {{ $time->add($i, 'day')->format('D d') }}
                                </div>
                                <div class="card-body">
                                    Body
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
