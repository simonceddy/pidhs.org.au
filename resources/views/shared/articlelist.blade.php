<h1>{{ $title }}</h1>

<div class="container">
    @foreach ($articles as $article)
    <h1 style="width: 95%;"><a href="/{{ $baseUri ?? 'news' }}/{{$article->id}}">
        {{$article->title}}
    </a></h1>

<p class="pubDate">Published on {{$article->created_at}}</p>
    @endforeach


    {{ $articles->links() }}
</div>
