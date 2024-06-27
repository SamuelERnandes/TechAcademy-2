<?php
function ValidarEmail($Email) {
    if(filter_var($Email,FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }

}

$Email= "samuelernandes2012@hotmail.com";

if(!ValidarEmail($Email)) {
    echo "Email Valido";
}else {
    echo "Email Invalido";
}