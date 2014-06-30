
<!-- checkbox to return tag ids -->
<div class="form-group">
    <i class="fa fa-tags"> </i>
    @foreach(Tag::all() as $tag)
        <label class="checkbox-inline">
            {{ Form::checkbox('tags[]', $tag->id) }}
            {{ $tag->tag }}
        </label>
    @endforeach
</div>
