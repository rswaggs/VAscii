<li>
    <div class="media-item" data-toggle="slidePanel" data-url="{{ route('video.preview', $video->id) }}">
        <div class="checkbox-custom checkbox-primary checkbox-lg">
            <input type="checkbox" class="selectable-item" id="media_1" />
            <label for="media_1"></label>
        </div>
        <div class="image-wrap">
            <img class="image img-rounded" src="{{ $video->thumbnail }}"
                 alt="...">
        </div>
        <div class="info-wrap">
            <div class="dropdown">
                    <span class="icon wb-settings" data-toggle="dropdown" aria-expanded="false" role="button"
                          data-animation="scale-up"></span>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a class="dropdown-item" href="{{ route('video.show', $video->id) }}"><i class="icon wb-play" aria-hidden="true"></i>Play</a>

                    @if($video->favouritedBy->count())
                        <a class="dropdown-item" style="color: #D6494B" href="{{ route('favourite.toggle', $video->id) }}"><i class="icon wb-heart" aria-hidden="true"></i>Favourited</a>
                    @else
                        <a class="dropdown-item" href="{{ route('favourite.toggle', $video->id) }}"><i class="icon wb-heart" aria-hidden="true"></i>Favourite</a>
                    @endif

                    @if(Auth::id() === $video->user_id)
                        <a class="dropdown-item" href="javascript:void(0)"><i class="icon wb-pencil" aria-hidden="true"></i>Edit</a>
                    @endif
                    <a class="dropdown-item" href="{{ url($video->path) }}"><i class="icon wb-download" aria-hidden="true"></i>Download</a>
                    @if(Auth::id() === $video->user_id)
                        <a class="dropdown-item delete-video" href="javascript:void(0)"><i class="icon wb-trash" aria-hidden="true"></i>Delete</a>
                        <form method="post" action="{{ route('video.destroy', $video->id) }}">
                            {{ method_field('DELETE') }}
                        </form>
                    @endif
                </div>
            </div>
            <div class="title">{{ $video->title }}</div>
            <div class="time">{{ $video->created_at->diffForHumans() }} - By {{ $video->user->name   }}</div>
            <div class="media-item-actions btn-group">
                <button class="btn btn-icon btn-pure btn-default" data-original-title="Edit" data-toggle="tooltip"
                        data-container="body" data-placement="top" data-trigger="hover"
                        type="button">
                    <i class="icon wb-pencil" aria-hidden="true"></i>
                </button>
                <button class="btn btn-icon btn-pure btn-default" data-original-title="Download"
                        data-toggle="tooltip" data-container="body" data-placement="top"
                        data-trigger="hover" type="button">
                    <i class="icon wb-download" aria-hidden="true"></i>
                </button>
                <button class="btn btn-icon btn-pure btn-default" data-original-title="Delete"
                        data-toggle="tooltip" data-container="body" data-placement="top"
                        data-trigger="hover" type="button">
                    <i class="icon wb-trash" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</li>