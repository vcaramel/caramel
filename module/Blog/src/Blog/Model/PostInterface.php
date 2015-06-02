<?php
/**
 * Created by PhpStorm.
 * User: viet
 * Date: 07/05/15
 * Time: 17:32
 */
namespace Blog\Model;

interface PostInterface
{
    /**
     * Will return the ID of the blog post
     *
     * @return int
     */
    public function getId();

    /**
     * Will return the TITLE of the blog post
     *
     * @return string
     */
    public function getTitle();

    /**
     * Will return the TEXT of the blog post
     *
     * @return string
     */
    public function getText();
}