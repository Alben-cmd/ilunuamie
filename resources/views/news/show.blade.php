@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        @include('news.includes.left-nav')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{!! $news->title !!}</div>

                <div class="card-body">
                    {!! $news->news !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


