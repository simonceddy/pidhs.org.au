<h1 class="m-2">{{ $title }}</h1>
    {{ $articles->links() }}
<div class="article-container">
    @foreach ($articles as $article)
    <div class="m-2">
        <h1 class="m-1"><a href="/{{ $baseUri ?? 'news' }}/{{$article->id}}">
            {{$article->title}}
        </a></h1>
        <p class="publication-date">Published on {{$article->created_at}}</p>
    </div>
    @endforeach


    {{ $articles->links() }}
</div>
