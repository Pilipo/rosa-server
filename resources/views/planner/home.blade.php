@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <calendar></calendar>
            <div class="card">
                <div class="card-header center">{{ $time->format('D, M d') }} to {{ $time->endOfWeek()->format('D, M d') }}</div>
                <div class="card-body">
                    <div class="row">
                        @for ($i = 0; $i < 7; $i++)
                        <div class="col-lg-6 col-sm-12">
                            <div class="card mb-2">
                                <div class="card-header">
                                    {{ $time->add($i, 'day')->format('D d') }}
                                </div>
                                <!-- <div class="card-body">   -->
                                    <ul class="list-group list-group-flush">
                                    @foreach ($recipes as $recipe)
                                        @foreach ($recipe->dates as $date)
                                            @if ($time->add($i, 'day')->diffInDays($date->meal_day) == 0)

                                        <li class="list-group-item clearfix">
                                            {{ $recipe->name }}
                                            <span class="float-right">
                                                <span class="btn btn-xs btn-default border">remove</span>
                                            </span>
                                        </li>
                                            @endif
                                        @endForeach
                                    @endForeach
                                        <li class="list-group-item">
                                            Add another...
                                            <span class="float-right">
                                                <span class="btn btn-xs btn-default border">add</span>
                                            </span>
                                        </li>
                                    </ul>
                                <!-- </div> -->
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
