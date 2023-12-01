<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Domain-Driven-Design Example</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        @vite('resources/css/app.css')
        @livewireStyles

        @vite('resources/js/app.js')
        @livewireScripts
    </head>
    <body>
        {{ $slot }}

        @livewire('livewire-ui-spotlight')
    </body>
</html>