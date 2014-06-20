@if($blog->tags()->count())
    <p><i class="fa fa-tags"> </i>
        @foreach($blog->tags as $tag)
            <a class="btn btn-xs btn-success" href="#" role="button">{{ $tag->tag }}</a>
        @endforeach
    </p>
@endif
