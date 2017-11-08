<div class="page-aside">
    <div class="page-aside-switch">
        <i class="icon wb-chevron-left" aria-hidden="true"></i>
        <i class="icon wb-chevron-right" aria-hidden="true"></i>
    </div>
    <div class="page-aside-inner page-aside-scroll">
        <div data-role="container">
            <div data-role="content">
                <section class="page-aside-section">
                    <h5 class="page-aside-title">General</h5>
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action" href="/"><i class="icon wb-camera" aria-hidden="true"></i>Videos Overview</a>
                        <a class="list-group-item" href="{{ route('youtube.create') }}"><i class="icon bd-youtube"  aria-hidden="true"></i>Upload YouTube Video</a>
                        <a class="list-group-item" href="{{ route('video.create') }}"><i class="icon wb-upload" aria-hidden="true"></i>Upload Manager</a>
                    </div>
                </section>
                <section class="page-aside-section">
                    <h5 class="page-aside-title">Filter</h5>
                    <div class="list-group">
                        <a class="list-group-item" href="{{ route('favourite.index') }}"><i class="icon wb-star" aria-hidden="true"></i>Favourites</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>