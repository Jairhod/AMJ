<?php
function afficherVarGlob ($nomVariable)
{
    // JE VERIFIE SI LA VARIABLE EXISTE
    if (isset($GLOBALS[$nomVariable]))
    {
        // ALORS J'AFFICHE LA VALEUR DE LA VARIABLE
        echo $GLOBALS[$nomVariable];
    }
}
?>