@extends('layouts.app')

@section('content')


<?php
    $url="http://api.openweathermap.org/data/2.5/weather?q=Creteil&lang=fr&units=metric&appid=938841d8050210a80d8073e5659518c0";

    $raw= file_get_contents($url);

    $json = json_decode($raw);

    $name=$json->name;

    $weather =$json->weather[0]->main;
    $desc = $json->weather[0]->description;

    $temp=$json->main->temp;
    $feel_like=$json->main->feels_like;

    $speed=$json->wind->speed;
    $deg=$json->wind->deg;

    // echo $weather." ".$desc;

?>


<h3>Bonjour {{ Auth::user()->name }} à votre espace d'évenement de L'EPISEN</h3>
 
<div class="container">  
    <div class="div3">
        <p>
            <span>Accueil:</span> Pour consulter tous les evenements de l'ecole publiés par vos collégues.
        <P>

    </div>

    <div class="div3">
        <p>
            <span>Nouvel evenement:</span> Pour créer un nouvel evenement que vos collégues peuvent y participer .
        <P>

    </div>


    <div class="div3">
        <p>
            <span>Mes Evenements:</span> Pour consulter tous les evenements que vous avez crées.
        <P>

    </div class="div3">


    <div class="div3">
        <p>
            <span>Mes Participations:</span> Pour consulter tous les evenements que vous participrez.
        <P>

    </div>
</div>

<hr>


<div class="container text-center py-5">
    <h1>Météo du jour à <strong><?php echo $name; ?></strong></h1>

    <div class="row justify-content-center align-items-center">
        <?php 
            switch($weather)
            {
                case "Clear":
                    ?>
                       <div class="icon sunny">
                            <div class="sun">
                                <div class="rays"></div>
                            </div>
                        </div>           
                    <?php
                    break;

                    case 'Drizzle':
                    ?>
                    <div class="icon sun-shower">
                        <div class="cloud"></div>
                            <div class="sun">
                                <div class="rays"></div>
                        </div>
                            <div class="rain"></div>
                    </div>
                    <?php 
                    break;

                    case 'Rain':
                    ?>
                    <div class="icon rainy">
                        <div class="cloud"></div>
                        <div class="rain"></div>
                    </div>
                    <?php 
                    break;

                    case 'Clouds':
                    ?>
                    <div class="icon cloudy">
                        <div class="cloud"></div>
                        <div class="cloud"></div>
                    </div>
                    <?php 
                    break;

                    case 'Thunderstorm':
                    ?>
                    <div class="icon thunder-storm">
                        <div class="cloud"></div>
                            <div class="lightning">
                                <div class="bolt"></div>
                                <div class="bolt"></div>
                        </div>
                    </div>
                    <?php 
                    break;

                    case 'Snow':
                    ?>
                    <div class="icon flurries">
                        <div class="cloud"></div>
                            <div class="snow">
                                <div class="flake"></div>
                                <div class="flake"></div>
                        </div>
                    </div>

                    <?php 
                    break;
            }
            ?>

            <div class="meteo_desc text-left">
                <h2>
                    <?php echo $temp; ?> °C / Ressenti <?php echo $feel_like; ?> °C <br />
                    <?php echo $speed; ?> Km/h - <?php echo $deg; ?> ° <br /> 
                    <?php echo $desc; ?>
            </h2>
        </div>
    </div>
</div>

<hr>

<div class="container text-center py-5">

    <h1>Nous suivre</h1>

    <div class="row justify-content-center align-items-center">

        <div class="row images">
            <div class="col"><a  href="https://www.facebook.com/EPISEN.Paris/" ><img src="{{ asset('assets/img/facebook.png')}}" style="height: 100px;"></a></div>
            <div class="col"><a  href="https://www.linkedin.com/school/episen-si/" ><img src="{{ asset('assets/img/linkedin.png')}}" style="height: 100px;"></a></div>
            <div class="col"><a  href="https://episen.u-pec.fr/" ><img src="{{ asset('assets/img/browser2.ico')}}" style="height: 100px;"></a></div>
            
            
            
        </div>


    </div>

</div>







    
       









  @endsection