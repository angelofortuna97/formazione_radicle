@if (has_nav_menu('top-toolbar-menu'))
<nav class="custom-menu">
    @if (has_nav_menu('custom_navigation'))
    {!! wp_nav_menu(['theme_location' => 'toolbar', 'menu_class' => 'nav', 'container' => false]) !!}
    @endif
</nav>
@endif
