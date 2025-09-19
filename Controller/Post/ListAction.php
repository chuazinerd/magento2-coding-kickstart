<?php declare(strict_types=1);

namespace Chuazinerd\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;

class ListAction implements HttpGetActionInterface
{
    public function execute()
    {
        die('Blog post detail List without make error about Magento reserved keyword');
    }
}
