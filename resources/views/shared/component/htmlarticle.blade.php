<div class="text-left" id="article">
    <h1 class="article-heading">{{ $title }}</h1>
    <p class="publication-date m-2">Last updated on {{date('d-M-y', strtotime($updated_at ?? $created_at))}}</p>
    <div class="article-content m-2" id="article-content">
        {!! $content !!}
    </div>
</div>
