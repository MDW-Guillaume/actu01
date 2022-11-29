<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau message</title>
</head>
<body>
    <h1>Nouveau message depuis le site Laravel</h1>
    <ul>
        <p>Nom : {{$data->name}}</p>
        <p>Email : {{$data->mail}}</p>
        <p>Service : {{$data->service}}</p>
        <p>Message : {{$data->content}}</p>
    </ul>
</body>
</html>