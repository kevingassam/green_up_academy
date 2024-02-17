<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau fichier dans votre compte MY-GUA</title>
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
            color: #fff !important;
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
        <h1>Nouveau fichier dans votre compte MY-GUA</h1>
        <p>Cher(e) {{ $user->prenom }},</p>
        <p>Nous sommes heureux de vous informer qu'un nouveau fichier a été ajouté à votre compte MY-GUA. Connectez-vous dès maintenant pour consulter le fichier et accéder à d'autres ressources éducatives.</p>
        <p>Consultez votre compte MY-GUA au plus vite pour accéder au fichier :</p>
        <p><a href="green-up-academy.fr/login" class="button">Accéder à mon compte MY-GUA</a></p>
        <p>Si vous avez des questions ou besoin d'aide, n'hésitez pas à nous contacter.</p>
        <p>Cordialement,</p>
        <p>L'équipe de GREEN UP ACADEMY</p>
    </div>
</body>

</html>
