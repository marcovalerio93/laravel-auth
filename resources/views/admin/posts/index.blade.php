 @extends('layouts.app')

@section('content')

    <div class="container">

        <div class="mb-4 d-flex justify-content-end">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Nuovo post</a>
        </div>

        <table class="table table-striped">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">slug</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', ['post'=> $post->id])}}" class="btn btn-primary">Show</a>
                                <a href="{{ route('admin.posts.edit', ['post'=> $post->id]) }}" class="btn btn-secondary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
              </table>
          </table>
    </div>

@endsection 