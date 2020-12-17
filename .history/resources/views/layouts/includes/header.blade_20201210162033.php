<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', setting('site.title') . " - " . setting('site.description'))</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/tailwind.css">
</head>
<body>
@include('layouts.includes.partial.navbar')
