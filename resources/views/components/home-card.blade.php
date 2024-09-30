<div class="home-card flex flex-col relative overflow-hidden">
    @if(!empty($image))
        <img class="absolute" src="{{ $image }}" alt="{{ $title }}">
    @endif
    <div id="home-card-overlay"></div>
    <div class="home-card-content-row flex flex-col">
        <h2 class="text-subhead-1 text-white" style="margin-bottom: 12px">{{ $title }} </h2>
        <div class="home-card-content flex flex-row">
            <p class="text-label-s-regular">{{ $content }}</p>
            <div class="card-add-button flex">
                <x-icon name="plus_icon" class="icon-svg text-white"/>
            </div>
        </div>
    </div>
</div>
