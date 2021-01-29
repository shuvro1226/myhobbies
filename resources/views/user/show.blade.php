@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bold">
                    <h3>{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <p>
                        <b>Motto:</b> {{ $user->motto }}
                    </p>
                    <p>
                        <b>About the user:</b> {{ $user->about_me }}
                    </p>
                    @if($user->hobbies->count() > 0)
                        <p>
                            Hobbies of {{ $user->name }}
                        </p>
                        <ul class="list-group my-4">
                            @foreach ($user->hobbies as $hobby)
                                <li class="list-group-item">
                                    <a title="Show Details" href="/hobby/{{ $hobby->id }}">{{ $hobby->name }}</a>
                                    <span class="mx-2">
                                        {{ $hobby->created_at->diffForHumans() }}
                                    </span>

                                    @foreach ($hobby->tags as $tag)
                                        <a href="/hobby/tag/{{ $tag->id }}">
                                            <span class="badge badge-{{ $tag->style }}">{{ $tag->name }}</span>
                                        </a>
                                    @endforeach
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>
                            {{ $user->name }} hasn't created any hobbies yet!
                        </p>
                    @endif
                </div>
            </div>

            <div class="mt-2">
                <a href="{{ URL::previous() }}" class="btn btn-primary float-right"><i class="fas fa-arrow-circle-up"></i> Back to overview</a>
            </div>
        </div>
    </div>
</div>
@endsection
