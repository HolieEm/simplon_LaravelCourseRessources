@extends('layouts.app')

@section('main')

  <div class="row justify-content-center">
          <h1 class="text-center">Articles</h1>
  </div>

  <div class="row">

        @foreach($articles as $article)

        <div class="card col-6">
            <div class="card-body">
                <h5 class="card-title"> {{$article->title}} </h5>
                <p class="card-text text-justify text-truncate"> {{$article->content}} </p>
                {{-- <div class="row justify-content-end">
                  <a href="{{ route('articles.show', $article->id)}}" class="btn btn-success">Show</a>
                  <a href="{{ route('articles.edit',$article->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div> --}}
            </div>
        </div>

        @endforeach

        </div>
@endsection
