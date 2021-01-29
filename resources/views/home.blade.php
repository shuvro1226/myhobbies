@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h2>Hello {{ auth()->user()->name }}</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        @isset($hobbies)
                            <b class="my-3">Your hobbies</b>

                            <ul class="list-group">
                                @foreach ($hobbies as $hobby)
                                    <li class="list-group-item">
                                        <a title="Show Details" href="/hobby/{{ $hobby->id }}">{{ $hobby->name }}</a>
                                        <span class="mx-2">
                                            {{ $hobby->created_at->diffForHumans() }}
                                        </span>
                                        @auth
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
                                        @endauth

                                        @foreach ($hobby->tags as $tag)
                                            <a href="/hobby/tag/{{ $tag->id }}">
                                                <span class="badge badge-{{ $tag->style }}">{{ $tag->name }}</span>
                                            </a>
                                        @endforeach
                                    </li>
                                @endforeach
                            </ul>
                        @endisset

                    <a class="btn btn-success btn-sm mt-4" href="/hobby/create"><i class="fas fa-plus-circle"></i> Create new hobby</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
