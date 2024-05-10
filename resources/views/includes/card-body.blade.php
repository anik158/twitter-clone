<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                     src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>

            <div>
                <form method="POST" action="{{route('idea.destroy',$idea->id)}}">
                    @csrf
                    @method('delete')
                    <a class="btn btn-sm btn-warning" href="{{route('idea.show',$idea->id)}}">view</a>
                    <a class="btn btn-sm btn-secondary" href="{{route('idea.edit',$idea->id)}}">Edit</a>
                    <button class="btn btn-sm btn-danger">X</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($editing ?? null)
            <div class="row">
                <form action="{{route('idea.update', $idea->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <textarea name="content" class="form-control" id="idea" rows="3">{{$idea->content}}</textarea>
                        @error('content')
                        <div class="fs-6 text-danger block-d mt-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-dark btn-sm mt-1"> Update </button>
                    </div>
                </form>
            </div>
        @else
            <p class="fs-6 fw-light text-muted">
                {{$idea->content}}
            </p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                                            </span> {{$idea->likes}} </a>
                </div>
                <div>
                                        <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                            {{$idea->created_at}} </span>
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <textarea class="fs-6 form-control" rows="1"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm"> Post Comment </button>
                </div>

                <hr>

            </div>
        @endif

    </div>
</div>
