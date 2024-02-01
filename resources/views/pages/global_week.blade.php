@extends('layouts.master')

@section('title', 'Sabi News')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="padding: 40px 40px">

                    {!! $news->title !!}


                    {!! $news->news !!}

                </div>
            </div>
            {{-- <div class="col-md-6">
            
        </div> --}}
        </div>
    </div>


    <div class="container">
        <div class="back">
            <a href="{{ route('home') }}"> <i class="fa fa-home" aria-hidden="true"></i>
                Home</a>
        </div>
    </div>


@endsection
