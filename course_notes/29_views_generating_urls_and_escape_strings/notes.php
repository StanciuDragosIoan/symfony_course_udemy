<?php
/*
    VIEWS - generate URLS and escaping strings

    {{ path('home')}}  -> shows relative (not full) path

    {{ url('home')}}  -> shows absolute (full) path

    we can als use the asset() function if we:
            composer require symfony/asset

    {{ asset('images/logo.png') }}  -> use it as src attribute for image
    {{ absolute_url(asset('images/logo.png')) }}  -> absolute url for asset

    escaping php vars in JS scripts:

        <script>
            var route = "{{ string|escape('js') }}";
            alert(route);
        </script>
        *we can escape HTML and CSS strings similarly
*/