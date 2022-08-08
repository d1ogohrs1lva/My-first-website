<?php

if (!is_authenticaded()) {
    set_flash_message("Acesso negado. Faça login para ter acesso a esta página.");
    url_redirect(['route' => 'login']);
}