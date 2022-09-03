<?php

function url_redirect($values = []) {
    $buildQueryString = http_build_query($values);
    header('Location: http://localhost/exercicios/avaliacao/minha-primeira-aplicacao-php/?' . $buildQueryString);
    exit;
}