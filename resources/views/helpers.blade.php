<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body class="antialiased">
      {{app()->getCachedConfigPath();}}
    </body>
</html>
