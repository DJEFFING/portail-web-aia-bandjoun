<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
</head>
<body>
    <p>Salut Mr/Mme {{ $user->name }}</p><br>
    <p>Voici Vos information de connexion sur pour l'UR-AiA de Bandjoun</p><br>
    <p><strong>Email :</strong>{{ $user->email }}</p>
    <p><strong>Mot de passe :</strong>{{ $password }}</p>
    Merci..
</body>
</html>
