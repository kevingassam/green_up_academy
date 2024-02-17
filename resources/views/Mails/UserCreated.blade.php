E html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à GREEN UP ACADEMY</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #04a100;
        }

        p {
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            background-color: #04a100;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #038e00;
        }

        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
                border-radius: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bienvenue à GREEN UP ACADEMY</h1>
        <p>Cher(e) {{ $user->prenom }} ,</p>
        <p>Nous sommes ravis de vous accueillir à GREEN UP ACADEMY!</p>
        <p>Nous sommes heureux de vous informer que votre compte MY-GUA a été créé avec succès. Votre compte MY-GUA est
            votre passerelle vers un monde d'opportunités éducatives et de ressources précieuses.</p>
        <p>Veuillez trouver ci-dessous vos informations de connexion :</p>
        <ul>
            <li><strong>Identifiant de Compte MY-GUA :</strong> {{ $user->code }} </li>
            <li><strong>Adresse E-mail :</strong> {{ $user->email }} </li>
            <li><strong>Mot de Passe :</strong> {{ $password }}</li>
        </ul>
        <p>Veuillez garder ces informations en sécurité et ne les partager avec personne. Votre identifiant de compte
            MY-GUA est unique et vous permettra d'accéder à divers services et ressources de GREEN UP ACADEMY.</p>
        <p>Nous vous encourageons à explorer notre plateforme en ligne et à découvrir toutes les fonctionnalités
            passionnantes que nous offrons. Si vous avez des questions ou besoin d'assistance, n'hésitez pas à nous
            contacter à contact@green-up-academy.com.</p>
        <p>Nous sommes impatients de vous accompagner dans votre parcours éducatif et de vous aider à atteindre vos
            objectifs académiques.</p>
        <p>Cordialement,</p>
        <p>L'équipe de GREEN UP ACADEMY</p>
    </div>
</body>

</html>
