<div class="footer-bottom">
    <div class="ms-container">
        <div class="d-flex  justify-content-between align-items-center">
            <a href="#" class="my-btn">Sign me up Now</a>
            <ul class="d-flex align-items-center">

                @foreach ($social as $icon)
                    @if ($loop->first)
                        <li><a href="#" class="follow-link">Follow Us</a></li>
                    @endif

                    <li><a href="#"><img src="{{ Vite::asset($icon) }}" alt=""></a></li>
                @endforeach

            </ul>
        </div>

    </div>
</div>
