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
                                <a title="Show Details" href="/hobby/{{ $hobby->id }}">{{ $hobby->name }}</a>
                                {{-- button to delete hobby --}}
                                <form class="float-right ml-2" action="/hobby/{{$hobby->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger float-right">
                                        <i class="fas fa-trash"></i> Delete Hobby
                                    </button>
                                </form>
                                <a class="btn btn-sm btn-light float-right" href="/hobby/{{ $hobby->id }}/edit">
                                    <i class="fas fa-edit"></i> Edit Hobby
                                </a>
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
