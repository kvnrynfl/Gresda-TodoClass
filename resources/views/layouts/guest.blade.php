<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="To-Do Class is a simple app to manage your daily tasks with a simple user interface." />
    <meta name="keywords" content="To-Do Class, To-Do, To-Do List, To-Do App, To-Do List App, To-Do List Application" />
    <meta name="author" content="Kim & Rey" />

    @include('includes.style')

</head>

<body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            {{ $slot }}
        </div>
    </div>

    <!-- / Content -->

    @include('includes.script')
</body>

</html>
