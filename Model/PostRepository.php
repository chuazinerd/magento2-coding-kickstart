<?php declare(strict_types=1);

namespace Chuazinerd\Blog\Model;

use Chuazinerd\Blog\Api\Data\PostInterface;
use Chuazinerd\Blog\Api\PostRepositoryInterface;
use Chuazinerd\Blog\Model\ResourceModel\Post;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class PostRepository implements PostRepositoryInterface
{
    public function __construct(
        private PostFactory $postFactory,
        private Post $postResourceModel,
    ) {}

    public function getById(int $id): PostInterface
    {
        $post = $this->postFactory->create();
        $this->postResourceModel->load($post, $id);

        if (!$post->getId()) {
            throw new NoSuchEntityException(__('The blog post with the "%1" ID doesn\'t exist.', $id));
        }

        return $post;
    }
}
