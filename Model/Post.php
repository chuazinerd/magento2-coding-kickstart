<?php declare(strict_types=1);

namespace Chuazinerd\Blog\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{

    protected function _construct()
    {
        $this->_init(ResourceModel\post::class);
    }
}
