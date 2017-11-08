<header class="slidePanel-header overlay" style="background-image: url('    {{ url($video->thumbnail) }}');background-size: 100%;"
        data-method="scroll" data-min="50">
    <div class="overlay-top overlay-panel overlay-background">
        <div class="slidePanel-actions btn-group" aria-label="actions" role="group">
            <button type="button" class="btn btn-pure btn-inverse icon wb-chevron-left" aria-hidden="true"></button>
            <button type="button" class="btn btn-pure btn-inverse icon wb-chevron-right" aria-hidden="true"></button>
            <button type="button" class="btn btn-pure btn-inverse slidePanel-close icon wb-close"
                    aria-hidden="true"></button>
        </div>
        <h4>{{ $video->title }}</h4>
    </div>
</header>
<div class="slidePanel-inner">
    <section class="slidePanel-inner-section">
        <div class="media-header">
            <div class="tags">
                Tags:
                <a href="javascript: void(0)" class="badge badge-outline badge-default">Blog</a>
                <a href="javascript: void(0)" class="badge badge-outline badge-default">Design</a>
                <a href="javascript: void(0)" class="badge badge-outline badge-default">Cool</a>
            </div>
        </div>
        <div class="media-content">
            <p>{!! $video->description !!}</p>
            <strong>Create Command</strong>
            <code>ascii-video create "{{ public_path($video->safePath()) }}" "{{ public_path($video->safePath() . '.js') }}"</code>
            <strong>Play Command</strong>
            <code>ascii-video play "{{ public_path($video->safePath() . '.js') }}"</code>
        </div>
    </section>
</div>