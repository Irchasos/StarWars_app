@if (Route::currentRouteName() === 'index')
    <div class="slider">
        <div class="col-12">
            <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" width="100%"
                        height="500px" src="https://www.youtube.com/embed/CmygQFhjaKM" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endif
