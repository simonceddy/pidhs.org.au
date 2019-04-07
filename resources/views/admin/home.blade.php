@extends('layout')

@section('content')
<div class="flex flex-col">
    <div class="admin-header">You are logged in as...
        <a class="btn btn-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <div class="article-list">
        <h1 class="m-2">All Articles</h1>

        <table class="admin-article-table border border-grey-dark border-collapse w-full">
            <thead>
                <th class="p-3">Last Updated</th>
                <th class="p-3">Article</th>
            </thead>
            <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td class="text-sm p-3">
                        {{$article->updated_at ?? $article->created_at}}
                    </td>
                    <td class="p-3">
                        {{$article->title}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
            
</div>
@endsection
