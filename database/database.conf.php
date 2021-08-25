<?php
# Configuração do banco de dados 
global $databases;
$databases = array( 
    'local'=> array
    (
            'host'=>'host.docker.internal',
            'port'=>3306,
            'dbname'=>'centralize_web',
            'user'=>'root',
            'password'=>'12345'
    ),
);