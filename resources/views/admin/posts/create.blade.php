@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{route('admin.posts.store')}}" method="POST">

        @csrf

        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" required id="title" name='title'  max="255" value="{{ old('title') }}" >
            <small class="form-text text-muted">Title</small>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                
            @enderror
        </div>

        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name='content' required>{{ old('content') }}</textarea>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                
            @enderror 
        </div>

        <button type="submit" class="btn btn-primary mb-5">Pubblica</button>
    </form>

</div>


@endsection