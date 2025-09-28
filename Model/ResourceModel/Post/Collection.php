<?php declare(strict_types=1);

namespace Chuazinerd\Blog\Model\Post;

use Chuazinerd\Blog\Model\Post;
use Chuazinerd\Blog\Model\ResourceModel\Post as PostResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _constructor()
    {

        $this->_init(Post::class, PostResource::class); //<- Modo correto.
        // Aqui o caminho "Chuazinerd\Blog\Model\Post::class" ficaria ambíguo e nesse tipo de situação
        // é possível usar o "as" nas linha onde está o use logo depois do namespace.
        // $this->_init(Post::class, \Chuazinerd\Blog\Model\Post::class);
    }
}
