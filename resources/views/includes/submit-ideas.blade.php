<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('idea.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="content" class="form-control" id="idea" rows="3"></textarea>
            @error('content')
                <div class="fs-6 text-danger block-d mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
