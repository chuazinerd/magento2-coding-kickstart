<?php declare(strict_types=1);

namespace Chuazinerd\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use mysql_xdevapi\Session;

class Detail implements HttpGetActionInterface
{
    public function execute()
    {
        echo "<pre>";
        var_dump(new Session());
        die();
    }
}
