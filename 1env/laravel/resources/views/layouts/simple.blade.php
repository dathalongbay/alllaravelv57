<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<style type="text/css">
    header {
        padding: 70px;
        background: deepskyblue;
    }

    #navigation {
        padding: 20px;
        background: yellow;

    }

    #navigation ul li {
        display: inline-block;
    }

    #main {
        overflow: auto;
    }

    #main aside {
        background: green;
        width: 400px;
        padding: 30px;
        float: left;
    }

    #main article {
        background: violet;
        width: 800px;
        padding: 30px;
        float: right;
    }

    footer {
        padding: 70px;
        background: deepskyblue;
    }
</style>
<body>

<!-- lây đường dẫn từ resources/views là folder gốc -->
@include('partials.header')

<!-- lây đường dẫn từ resources/views là folder gốc -->
@include('partials.navigation')

<section id="main">

    <!-- lây đường dẫn từ resources/views là folder gốc -->
    @include('partials.sidebar')

    <!-- phân ở giữa -->
    @yield("contentview")

</section>

<!-- lây đường dẫn từ resources/views là folder gốc -->
@include('partials.footer')

</body>
</html>