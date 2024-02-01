<div class="col-md-3">
    <div class="card">
        <div class="card-header">Navigation</div>

        <ul class="list-group">
            <li class="list-group-item @if($active_menu == 'news') bg-zhiri @endif"><a href="{{ route('news.index') }} " class="@if($active_menu == 'news') text-white @endif">Published News</a></li>
            <li class="list-group-item @if($active_menu == 'disabled-news') bg-zhiri @endif"><a href="{{ route('news.unpublished') }} " class="@if($active_menu == 'disabled-news') text-white @endif">Unpublished News</a></li>
            <li class="list-group-item @if($active_menu == 'create') bg-zhiri text-white @endif"><a href="{{ route('news.create') }} " class="@if($active_menu == 'create') text-white @endif">Create News</a></li>
            <li class="list-group-item">
            	<a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
		</li>
        </ul>
    </div>
</div>