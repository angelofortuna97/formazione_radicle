<div class="my-component">
    <h2>{{ $title }}</h2>
    <p>{!! $content !!}</p>
    @if(!empty($image))
        <img src="{{ $image }}" alt="{{ $title }}">
    @endif
</div>
