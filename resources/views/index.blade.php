@extends('layouts.app')

@section('content')

    {{--    @php--}}
    {{--        $posts = get_posts([--}}
    {{--        'post_type' => 'test_types',--}}
    {{--        'posts_per_page' => -1,--}}
    {{--        ]);--}}
    {{--    @endphp--}}

    @php
        $posts = get_posts([
        'post_type' => 'home_cards',
        'posts_per_page' => -1,
        ]);
    @endphp

    @if (! have_posts())
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'radicle') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endif

    <div class="flex flex-row" style="gap: 16px; overflow: auto">
        @foreach ($posts as $post)
            @php
                $image = get_the_post_thumbnail_url($post->ID, 'full');
                $description = get_field('card_description', $post->ID);
                $post_title = get_field('card_title', $post->ID);
            @endphp
            <x-home-card :title="$post_title" :content="$description" :image="$image"></x-home-card>
        @endforeach
    </div>

    {{--    @while(have_posts()) @php(the_post())--}}
    {{--        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])--}}
    {{--    @endwhile--}}

    {{--    {!! get_the_posts_navigation() !!}--}}
@endsection
