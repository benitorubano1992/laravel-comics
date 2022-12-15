<section class="icon-list">
    <div class="ms-container icons">
        <ul class="d-flex justify-content-between">
            @foreach ($icons as $icon)
                <li class="d-flex align-items-center">
                    <img src="{{ Vite::asset($icon['img']) }}" alt="dc-logo">
                    <p class="icon-title">{{ $icon['title'] }}</p>
                </li>
            @endforeach

        </ul>

    </div>

</section>
