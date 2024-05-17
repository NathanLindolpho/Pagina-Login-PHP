<?php

//Inicia a sessão
session_start();

//Limpa as sessões
session_unset();

//Destroi a sessão
session_destroy();

//Redireciona para index
header("Location: index.html");

//Garante que o código finalize

exit(); 

?>