<?php

// Incluindo o autoload do Composer para carregar a biblioteca
require_once 'vendor/autoload.php';

// Incluindo a classe que criamos
require_once 'class/BackupDatabase.php';

// Como a geração do backup pode ser demorada, retiramos
// o limite de execução do script
set_time_limit(0);

// Utilizando a classe para gerar um backup na pasta 'backups'
// e manter os últimos dez arquivos

$caminho = __DIR__ . '/backups/sql';

$backup = new BackupDatabase($caminho, 0);
$backup->setDatabase('db_testephp', 'testephp', 'root', '123456');
$nome_arquivo = $backup->generate();

echo $nome_arquivo;

// $backup->clearOldFiles();
// chown -R www-data:www-data /var/www/html/