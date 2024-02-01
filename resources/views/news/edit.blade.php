@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        
        @include('news.includes.left-nav')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update News</div>

                <div class="card-body">

                     <form method="POST" action="{{ route('news.update', ['id' => $news->id]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $news->title }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="news" class="col-md-2 col-form-label text-md-right">{{ __('News') }}</label>

                            <div class="col-md-8">
                                <div id="toolbar-container1"></div>
                                
                                <textarea name="news" id="editor">
                                    {{ $news->news  }}
                                </textarea>
                               
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#editor' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                                
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to save Changes?')">
                                    {{ __('Save Changes') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
