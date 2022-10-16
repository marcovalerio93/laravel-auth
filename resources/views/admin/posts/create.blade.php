@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{route('admin.posts.store')}}" method="POST">

        @csrf

        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name='title' required max="255">
            <small class="form-text text-muted">Title</small>
        </div>

        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" id="content" name='content' required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Pubblica</button>
    </form>

</div>


@endsection