<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>covid statistics</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <div class="container p-3">

        <h6>Ukupno:</h6>
        <h3>UKUPNO OBOLJELIH SLUČAJEVA UKUPNO: <b>{{ $totalConfirmed->Cases }}</b></h3>
        <h3>UKUPNO UMRLIH UKUPNO: <b>{{ $totalDeaths->Cases }}</b></h3>
        <h3>UKUPNO IZLJEČENIH SLUČAJEVA UKUPNO: <b>{{ $totalRecovered->Cases }}</b></h3>

    </div>

</body>

</html>
