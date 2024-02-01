@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        @include('news.includes.left-nav')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News List</div>

                <div class="card-body">

                    @if($news->count() > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr class="font-weight-bold">
                                <th class="font-weight-bold">#</th>
                                <th>Title</th>
                                <th>News</th>
                                <th>Created</th>
                                <th></th>
                                <th colspan="2">Actions</th>
                                
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
                                <!-- <td>{!! \Illuminate\Support\Str::limit($news_item->news, 34, $end='...') !!}</td> -->
                                <td>{{ \Carbon\Carbon::parse($news_item->created_at)->diffForHumans() }}</td>
                         
                                <td>
                                   <a href="{{ route('news.edit', ['id' => $news_item->id]) }}" class="btn btn-link text-info">Edit News</a>
                                </td>

                                <td><a href="{{ route('news.show', ['id' => $news_item->id]) }}" class="btn btn-link text-info">View News</a></td>

                                <td>
                                   <a href="{{ route('news.unpublish', ['id' => $news_item->id]) }}" class="btn btn-link text-danger">Unpublish News</a>
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


