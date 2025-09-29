<?php declare(strict_types=1);

namespace Chuazinerd\Blog\Model;

use Chuazinerd\Blog\Api\Data\PostInterface;
use Chuazinerd\Blog\Api\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function getById(int $id): PostInterface
    {
        // TODO: Implement getById() method.
    }

    public function save(PostInterface $post): PostInterface
    {
        // TODO: Implement save() method.
    }

    public function deleteById(int $id): bool
    {
        // TODO: Implement getById() method.
    }
}
