@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('All My Hobbies') }}</div>

                <div class="card-body">
                   <ul class="list-group">
                        @foreach ($hobbies as $hobby)
                            <li class="list-group-item">
                                {{ $hobby->name }}
                            </li>
                        @endforeach
                   </ul>
                </div>
            </div>

            <div class="mt-2">
                <a href="/hobby/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i> Create new hobby</a>
            </div>
        </div>
    </div>
</div>
@endsection
