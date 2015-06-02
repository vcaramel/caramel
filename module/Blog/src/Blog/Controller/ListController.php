<?php
/**
 * Created by PhpStorm.
 * User: viet
 * Date: 07/05/15
 * Time: 17:17
 */
namespace Blog\Controller;

use Blog\Service\PostServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ListController extends AbstractActionController
{
    protected $postService;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }
    public function indexAction()
    {
        return new ViewModel(array(
            'posts' => $this->postService->findAllPosts()
        ));
    }
}