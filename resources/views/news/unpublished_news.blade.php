@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('news.includes.left-nav')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Unpublished News List</div>

                <div class="card-body">

                    @if($news->count() > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr class="font-weight-bold">
                                <th class="font-weight-bold">#</th>
                                <th>Title</th>
                                <th>News</th>
                                <th>Created</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php
                             $count = 1;
                            @endphp
                            @foreach($news as $news_item)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>@php 
                                    $text = strip_tags($news_item->title);
                                    echo mb_strimwidth($text, 0, 20, "...");
                                @endphp
                            </td>
                            <!-- <td>{!! \Illuminate\Support\Str::limit($news_item->title, 10, $end='...') !!}</td> -->
                            <td>@php 
                                $text1 = strip_tags($news_item->news);
                                echo mb_strimwidth($text1, 0, 34, "...");
                                @endphp
                            </td>
                                <td>{{ $news_item->created_at->diffForHumans() }}</td>

                                <td>
                                   <a href="{{ route('news.publish', ['id' => $news_item->id]) }}" class="btn btn-link text-success">Publish News</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    @else
                        <h6 class="text-center text-danger">0 News in this category</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


