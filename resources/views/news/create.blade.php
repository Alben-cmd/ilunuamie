@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        
        @include('news.includes.left-nav')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create News</div>

                <div class="card-body">

                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

                     <form method="POST" action="{{ route('news.store') }} " enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

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

                                <textarea name="news" id="editor" rows="10" cols="80">
                                    {{ old('news') }}
                               </textarea>
                               <script>
                                ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                                
                                <!-- <textarea name="news" id="editor">
                                    {{ old('news') }}
                                </textarea>
                               
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#editor' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script> -->

                                
                                
                            </div>
                        </div>
                        <!-- <input  type="hidden" name="status" value="1"> -->
                    
                         <!-- <div class="form-group row">
                            <label for="cover_image" class="col-md-2 col-form-label text-md-right">{{ __('Cover Image') }}</label>

                            <div class="col-md-8">
                                <input id="cover_image" type="file" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image" value="{{ old('cover_image') }}" required >

                                @error('cover_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="return confirm('sure?')">
                                    {{ __('Publish') }}
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
