<?php
/**
 * Created by PhpStorm.
 * User: viet
 * Date: 23/06/15
 * Time: 15:30
 */
namespace Blog\Form;

use Zend\Form\Fieldset;
use Blog\Model\Post;
use Zend\Stdlib\Hydrator\ClassMethods;

class PostFieldset extends Fieldset
{
    public function __construct($name = null, $options = array())
    {
        parent::__construct($name, $options);

        $this->setHydrator(new ClassMethods(false));
        $this->setObject(new Post());

        $this->add(array(
            'type' => 'hidden',
            'name' => 'id'
        ));

        $this->add(array(
            'type' => 'text',
            'name' => 'text',
            'options' => array(
                'label' => 'The Text'
            )
        ));

        $this->add(array(
            'type' => 'text',
            'name' => 'title',
            'options' => array(
                'label' => 'Blog Title'
            )
        ));
    }
}