<div class="toolbar-container flex-col bg-neutral-50">
    <div class="toolbar-top bg-primary-green700 flex-row justify-start items-center">
        <p class="text-primary-green50 text-label-xs-bold">Aeroporto di Comiso</p>
    </div>
    <nav>
        <x-icon name="Logo_Aeroporto_Catania" id="airport_ct_logo" />
        <ul class="nav">
            @foreach ($menu_items as $item)
                <li class="menu-item">
                    <div class="flex flex-row align-middle">
                        <a href="{{ $item->url }}" class="menu-button">
                            {!! $item->title !!}
                        </a>
                        <div class="icon self-center">
                            <x-icon name="plus_icon" class="icon-svg"/>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </nav>
</div>
