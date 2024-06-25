<?php

// heredoc -> Se assemelha às aspas duplas
// nowdoc -> Se assemelha às aspas simples

$nome = 'Tiago';
$url = 'https://tiagofranca.com';

echo "
--------------------------
exemplo com aspas duplas
<a href=\"{$url}\">{$nome}</a>
--------------------------
abc\t123\vxyz
\n
";


// heredoc exemplo 1
echo <<<MSG
--------------------------
heredoc exemplo 1
<a href="{$url}">{$nome}</a>
--------------------------
abc\t123\vxyz
\n
MSG;

// heredoc exemplo 2
echo <<<"ALGO"
--------------------------
heredoc exemplo 2
<a href="{$url}">{$nome}</a>
--------------------------

ALGO;

// nowdoc exemplo 1
echo <<<'ABCXYZ'
--------------------------
nowdoc exemplo 1
<a href="{$url}">{$nome}</a>
--------------------------

ABCXYZ;

// nowdoc exemplo 2
echo <<<'ALGO'
--------------------------
nowdoc exemplo 2
<a href="{$url}">{$nome}</a>
--------------------------

abc\t123\vxyz
\n
ALGO;
