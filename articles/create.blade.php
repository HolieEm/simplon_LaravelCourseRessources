@extends('layouts.app')

@section('main')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add an article</h1>

  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('articles.store') }}">
          @csrf
          <div class="form-group">
              <label for="title">Title :</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="content">Content :</label>
              <textarea name="content" class="form-control"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Add Article</button>
      </form>

  </div>
</div>
</div>
@endsection
