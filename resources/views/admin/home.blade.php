@extends('layout')

@section('content')
<div class="flex flex-col">
    <div class="article-list">
        <h1 class="m-2">All Articles</h1>

        <table class="admin-article-table border border-grey-dark border-collapse w-full">
            <thead>
                <th class="p-3">Last Updated</th>
                <th class="p-3">Article</th>
            </thead>
            <tbody>
            @foreach ($articles as $article)
                <tr onclick="location='{{ route('article.show', $article->slug)}}'">
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
