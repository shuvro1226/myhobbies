@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Tag</div>
                    <div class="card-body">
                        <form action="/tag/{{$tag->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' border-danger' : '' }}" id="name" name="name" value="{{ $tag->name ?? old('name') }}">
                                <small class="form-text text-danger">{!! $errors->first('name') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="style">Style</label>
                                <select name="style" id="style" class="form-control{{ $errors->has('style') ? ' border-danger' : '' }}">
                                    <option value="">Select a style</option>
                                    <option value="primary" {{ old('style', $tag->style) == 'primary' ? 'selected' : '' }}>Primary</option>
                                    <option value="secondary" {{ old('style', $tag->style) == 'secondary' ? 'selected' : '' }}>Secondary</option>
                                    <option value="success" {{ old('style', $tag->style) == 'success' ? 'selected' : '' }}>Success</option>
                                    <option value="warning" {{ old('style', $tag->style) == 'warning' ? 'selected' : '' }}>Warning</option>
                                    <option value="info" {{ old('style', $tag->style) == 'info' ? 'selected' : '' }}>Info</option>
                                    <option value="danger" {{ old('style', $tag->style) == 'danger' ? 'selected' : '' }}>Danger</option>
                                </select>
                                <small class="form-text text-danger">{!! $errors->first('style') !!}</small>
                            </div>
                            <input class="btn btn-primary mt-4" type="submit" value="Edit Tag">
                        </form>
                        <a class="btn btn-primary float-right" href="/tag"><i class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
