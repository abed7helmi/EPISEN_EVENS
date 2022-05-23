<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>

    <p> Bonjour, </p>
    <p></p>
    <p></p>
    <p>Letudiant (ou le groupe) {{$user->name}} demande la réservation de la salle {{$even->Salle}} pour son évenement d'intitulé : {{$even->Nom_evenement}}</p>
    <p></p>
    <p></p>
    <p>Infos concernant l'evenement :</p>
    <p>Type : {{$even->Type}} </p>
    <p>Nombre de participants : {{$even->Nb_participants}} </p>
    
    <p>Date evenement : {{$even->date_evenement}}</p>
    <p>Commentaire organisateur : {{$even->Commentaire}} </p>
    <p></p>
    <p></p>
    <p> Bien cordialement.</p>
    <p></p>
    <p>{{$user->name}} </p>
    <p>{{$user->email}} </p>
    <p></p>
</body>

</html>