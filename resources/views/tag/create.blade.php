@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Tag</div>
                    <div class="card-body">
                        <form action="/tag" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' border-danger' : '' }}" id="name" name="name" value="{{ old('name') }}">
                                <small class="form-text text-danger">{!! $errors->first('name') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="style">Style</label>
                                <select name="style" id="style" class="form-control{{ $errors->has('style') ? ' border-danger' : '' }}">
                                    <option value="">Select a style</option>
                                    <option value="primary" {{ old('style') == 'primary' ? 'selected' : '' }}>Primary</option>
                                    <option value="secondary" {{ old('style') == 'secondary' ? 'selected' : '' }}>Secondary</option>
                                    <option value="success" {{ old('style') == 'success' ? 'selected' : '' }}>Success</option>
                                    <option value="warning" {{ old('style') == 'warning' ? 'selected' : '' }}>Warning</option>
                                    <option value="info" {{ old('style') == 'info' ? 'selected' : '' }}>Info</option>
                                    <option value="danger" {{ old('style') == 'danger' ? 'selected' : '' }}>Danger</option>
                                    <option value="light" {{ old('style') == 'light' ? 'selected' : '' }}>Light</option>
                                    <option value="dark" {{ old('style') == 'dark' ? 'selected' : '' }}>Dark</option>
                                </select>
                                <small class="form-text text-danger">{!! $errors->first('style') !!}</small>
                            </div>
                            <input class="btn btn-primary mt-4" type="submit" value="Save Tag">
                        </form>
                        <a class="btn btn-primary float-right" href="/tag"><i class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
