<h1 class="article-heading">{{ $title }}</h1>
    {{ $articles->links() }}
<div class="article-container">
    @foreach ($articles as $article)
    <div class="mx-2 my-6">
        <h1 class="heading m-1"><a href="/{{ $baseUri ?? 'news' }}/{{$article->id}}" class="">
            {{$article->title}}
        </a></h1>
        <p class="publication-date">Published on {{date('d-M-y', strtotime($article->created_at))}}</p>
    </div>
    @endforeach


    {{ $articles->links() }}
</div>
