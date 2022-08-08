<?php

function is_authenticaded() {
    if (empty($_SESSION['is_authenticaded'])) {
        return false;
    } else {
        return true;
    }
}