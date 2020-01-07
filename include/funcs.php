<?php

function ses_msg($tipo, $msg)
{
    $_SESSION['msg_type'] = $tipo;
    $_SESSION['msg'] = $msg;
}
