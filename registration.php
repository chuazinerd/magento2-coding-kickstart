<?php
// Declara o modo estrito para garantir que as tipagens sejam seguidas
declare(strict_types=1);

// Importa a Classe ComponentRegistrar para registrar o componente
use Magento\Framework\Component\ComponentRegistrar;

// Registra o componente no Magento
ComponentRegistrar::register(
// Define o tipo de componente como "MÓDULO"
    ComponentRegistrar::MODULE,

    // Define o nome do módulo no formato 'NomeVendor_NomeModulo'
    'Chuazinerd_Blog',

    // Define o caminho para a pasta do módulo usando a constante mágica __DIR__
    __DIR__,
);



