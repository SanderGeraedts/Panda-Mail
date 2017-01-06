<!DOCTYPE html>
<html lang="en">
@include('includes.head', ['title' => $title])
<body>
@include('includes.header')
<div class="container">
    @yield('body')
</div>
</body>
</html>
