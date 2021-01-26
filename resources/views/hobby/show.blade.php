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
                </div>
            </div>

            <div class="mt-2">
                <a href="/hobby/{{$hobby->id}}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                {{-- button to delete hobby --}}
                <form class="float-right ml-2" action="/hobby/{{$hobby->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger float-right">
                        <i class="fas fa-trash"></i> Delete Hobby
                    </button>
                </form>
                <a href="/hobby" class="btn btn-primary float-right"><i class="fas fa-arrow-circle-up"></i> Back to overview</a>
            </div>
        </div>
    </div>
</div>
@endsection
