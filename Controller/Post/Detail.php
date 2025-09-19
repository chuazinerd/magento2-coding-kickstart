<?php declare(strict_types=1);

namespace Chuazinerd\Blog\Controller\Post;

use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ObjectManager;


// A classe 'Detail' é um controlador de ação (Action Controller)
// que responde a requisições HTTP do tipo GET.
// O nome 'Detail' é apenas um exemplo; ele se refere à página
// de detalhes que esta classe poderia exibir.
class Detail implements HttpGetActionInterface
{
    public function execute()
    {
        // Esta linha obtém uma instância do Object Manager, um serviço
        // central que gerencia a criação de objetos e a injeção de dependências
        $om = ObjectManager::getInstance();
        //obtém uma instância da classe de sessão do Magento através do Object Manager.
        $session = $om->get(Session::class);
        // formatar a saída do 'var_dump()' para que seja exibida
        echo '<pre>';
        // Depura e retorna os dados que getData() encontrar
        var_dump($session->getData());

        // A função 'die()' interrompe a execução do script imediatamente.
        die();
    }
}
