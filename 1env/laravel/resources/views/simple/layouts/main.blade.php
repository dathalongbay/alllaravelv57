<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>

    <link rel="stylesheet" href="{{ secure_asset("/simple/sample.css") }}">
    <script src="{{ secure_asset("simple/sample.js") }}"></script>
</head>

<body>

<header>
    Header cua trang
</header>
<nav id="navigation">
    <ul>
        <li><a href="{{ secure_url("/demo/hanoi") }}">ha noi</a> </li>
        <li><a href="{{ secure_url("/demo/hochiminh") }}">ho chi minh</a> </li>
        <li><a href="{{ secure_url("/demo/danang") }}">da nang</a> </li>
    </ul>
</nav>

<section id="main">
    <aside>
        <li><a href="{{ secure_url("/demo/trungquoc") }}"> trung quoc</a></li>
        <li><a href="{{ secure_url("/demo/hanquoc") }}">han quoc</a></li>
        <li><a href="{{ secure_url("/demo/hoaky") }}">hoa ky</a></li>
    </aside>

    <article>
        Nội dung giữa trang thường xuyên thay đổi
        @yield("content")
    </article>
</section>

<footer>
    Tôi là footer
</footer>

</body>
</html>
