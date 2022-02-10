<?php
    $film = [
        'le pirate des mers du sud' => ['Robert Newton','Rod Taylor','Connie Gilchrist'],
        "l'île au tresor" => ['Bobby Driscoll','Basil Sydney','Finlay Currie'],
        'treasur island' => ['Oleg Borissov ','Leonid Markov','Gennadi Yukhtin'],
    ];

    foreach($film as $title => $actors){
        echo('dans le film'. $title . 'les acteurs sont:');
        echo('<br/>');
    
        foreach($actors as $actors){
            echo($actors);
        }
    }        
