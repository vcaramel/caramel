<?php
/**
 * Created by PhpStorm.
 * User: viet
 * Date: 22/06/15
 * Time: 18:00
 */
namespace Blog\Mapper;

use Blog\Model\PostInterface;

interface PostMapperInterface
{
    /**
     * @param int|string $id
     * @return PostInterface
     * @throws \InvalidArgumentException
     */
    public function find($id);

    /**
     * @return array|PostInterface[]
     */
    public function findAll();

    public function save(PostInterface $post);

    public function delete(PostInterface $post);
}