<h1>{{ $title }}</h1>
    {{ $articles->links() }}
<div class="article-container">
    @foreach ($articles as $article)
    <h1 style="width: 95%;"><a href="/{{ $baseUri ?? 'news' }}/{{$article->id}}">
        {{$article->title}}
    </a></h1>

<p class="publication-date">Published on {{$article->created_at}}</p>
    @endforeach


    {{ $articles->links() }}
</div>
