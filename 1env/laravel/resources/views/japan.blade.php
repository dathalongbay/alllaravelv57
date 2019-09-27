<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


    <p>dien tich japan : {{ $dientich }}  </p>
    <p>dan so japan : {{ $danso }}</p>
    <p>gdp japan : {{ $gdp }} </p>

    <?php
    $tuoi = 21;
    if ($tuoi > 18) {
        echo "<br> trưởng thành";
    } else {
        echo "<br> trẻ em";
    }
    ?>

    @if ($tuoi > 18)
        <br> trưởng thành
    @else
        <br> trẻ em
    @endif


    <?php
    for($i = 1;$i <= 10;$i++) {
        echo "<br>" . $i;
    }
    ?>

    @for($i = 1;$i <= 10;$i++)
        <br> {{ $i }}
    @endfor

    <?php
    $array = ["ha noi", "quang ninh", "hai phong"];
    foreach($array as $key => $value) {
        echo "<br>" . $key . " - " . $value;
    }
    ?>

    @foreach($array as $key => $value)
        <br> {{ $key }} - {{ $value }}
    @endforeach



</body>
</html>
