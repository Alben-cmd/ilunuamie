@extends('layouts.master')

@section('title', 'News Upload')

@section('content')

    <div class="header-text mb-5">
        <div class="container">
            <h3 style="color: white;"><b>Frequently Asked </b><br> Questions</h3>
        </div>
    </div>
    <div class="container my-5">
        <form action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">News Title</label>
                <input type="text" name="title" class="form-control" id="inputAddress2" placeholder="Kindly input news title..." required>
            </div> 

            <div class="form-group">
                <label for="abstract">Abstract</label>
                <input type="text" name="abstract" class="form-control" id="inputAddress2" placeholder="Kindly input news abstract..." required>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" id="inputAddress2" placeholder="Kindly input news author..." required>
            </div>

            <div class="form-group">
                <label for="news_body">News Body</label>
                <textarea class="form-control" id="news_body" rows="3" name="body" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" class="form-control-file" id="images" name="images" required>
              </div>
            <button type="submit" class="btn btn-success">Save News</button>
        </form>

    </div>


@endsection
