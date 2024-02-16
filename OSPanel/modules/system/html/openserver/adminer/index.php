<?php
function adminer_object() {
    include_once "plugin.php";
    include_once "login-password-less.php";
    return new AdminerPlugin(array(
        new AdminerLoginPasswordLess(password_hash("admin", PASSWORD_DEFAULT)),
    ));
}
include "adminer_core.php";