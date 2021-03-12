<?php
    $liste = new listemagasin($cnx);
    $themes = $liste->getnom();
    $nbr = count($themes);
    ?>

<div class="container">

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Magasins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Liste des magasins</h5>
            <p class="card-text">
                <?php
                for($i=0; $i < $nbr;$i++)
                {
                    print $themes[$i]->magasin." ";
                }
                ?>
            </p>
            <a href="#" class="btn btn-primary">Commander</a>
        </div>
        <div class="card-footer text-muted">
            HelpIt
        </div>
    </div>