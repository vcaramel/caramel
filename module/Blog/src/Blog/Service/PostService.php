<?php
/**
 * Created by PhpStorm.
 * User: viet
 * Date: 07/05/15
 * Time: 17:31
 */
namespace Blog\Service;
use Blog\Model\Post;
use Blog\Mapper\PostMapperInterface;
use Blog\Model\PostInterface;

class PostService implements PostServiceInterface
{

    /**
     * @var \Blog\Mapper\PostMapperInterface
     */
    protected $postMapper;

    /**
     * @param PostMapperInterface $postMapper
     */
    public function __construct(PostMapperInterface $postMapper)
    {
        $this->postMapper = $postMapper;
    }

    /**
     * {@inheritDoc}
     */
    public function findAllPosts()
    {
        return $this->postMapper->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findPost($id)
    {
        return $this->postMapper->find($id);
    }

    public function savePost(PostInterface $post)
    {
        return $this->postMapper->save($post);
    }

    public function deletePost(PostInterface $post) {
        return $this->postMapper->delete($post);
    }
}