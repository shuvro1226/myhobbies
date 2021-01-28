@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bold">{{ $hobby->name }}</div>
                <div class="card-body">
                   <p>
                        {{ $hobby->description }}
                   </p>
                   @if ($usedTags->count() > 0)
                        <b>
                            Used Tags:
                        </b>
                        (Click to remove)
                        <p>
                            @foreach ($usedTags as $tag)
                                <a href="/hobby/{{ $hobby->id }}/tag/{{ $tag->id }}/detach">
                                    <span class="badge badge-{{ $tag->style }}">{{ $tag->name }}</span>
                                </a>
                            @endforeach
                        </p>
                   @endif

                    @if ($availableTags->count() > 0)
                        <b>
                            Available Tags:
                        </b>
                        (Click to assign)
                        <p>
                            @foreach ($availableTags as $tag)
                                <a href="/hobby/{{ $hobby->id }}/tag/{{ $tag->id }}/attach">
                                    <span class="badge badge-{{ $tag->style }}">{{ $tag->name }}</span>
                                </a>
                            @endforeach
                        </p>
                    @endif
                </div>
            </div>

            <div class="mt-2">
                @auth
                <a href="/hobby/{{$hobby->id}}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                {{-- button to delete hobby --}}
                <form class="float-right ml-2" action="/hobby/{{$hobby->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger float-right">
                        <i class="fas fa-trash"></i> Delete Hobby
                    </button>
                </form>
                @endauth

                <a href="{{ URL::previous() }}" class="btn btn-primary float-right"><i class="fas fa-arrow-circle-up"></i> Back to overview</a>
            </div>
        </div>
    </div>
</div>
@endsection
