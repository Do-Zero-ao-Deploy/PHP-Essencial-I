<?php

// $html = '<a href="https://tiagofranca.com">Meu link</a>';
$html = '<div>';
$html .= PHP_EOL . ' <p>Paragrafo 1. Lorem ipsum dolor sit amet.</p>';
$html .= PHP_EOL . ' <p>Paragrafo 2. Lorem ipsum dolor sit amet.</p>';
$html .= PHP_EOL . ' <br>';
$html .= PHP_EOL . '</div>';


echo $html . PHP_EOL;
echo PHP_EOL;
echo strip_tags($html, ['div', 'br']) . PHP_EOL;












echo str_repeat(PHP_EOL, 20);
