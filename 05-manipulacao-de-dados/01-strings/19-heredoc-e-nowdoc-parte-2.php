<?php

$abc = 'xyz';

// heredoc
$texto = <<<MEU_TEXTO
        algo aqui
        aqui {$abc}
        aqui tbm
            e aqui
        abc MEU_TEXTO dfd
        MEU_TEXTO;

// nowdoc
$texto = <<<'MEU_TEXTO'
        algo aqui
        aqui {$abc}
        aqui tbm
            e aqui
        abc MEU_TEXTO dfd
        MEU_TEXTO;

echo $texto;
