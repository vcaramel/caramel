<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        // Customize Zfc-user form
        $em = $eventManager->getSharedManager();
        $em->attach(
            'ZfcUser\Form\Register',
            'init',
            function($e)
            {
                /* @var $form \ZfcUser\Form\Register */
                $form = $e->getTarget();
                $form->add(array(
                    'name' => 'username',
                    'options' => array(
                        'label' => 'Username',
                    ),
                    'attributes' => array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => ''
                    ),
                ));

                $form->add(array(
                    'name' => 'email',
                    'options' => array(
                        'label' => 'Email',
                    ),
                    'attributes' => array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'email@example.com'
                    ),
                ));

                $form->add(array(
                    'name' => 'display_name',
                    'options' => array(
                        'label' => 'Display Name',
                    ),
                    'attributes' => array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => ''
                    ),
                ));

                $form->add(array(
                    'name' => 'password',
                    'options' => array(
                        'label' => 'Password',
                    ),
                    'attributes' => array(
                        'type' => 'password',
                        'class' => 'form-control',
                        'placeholder' => '********'
                    ),
                ));

                $form->add(array(
                    'name' => 'passwordVerify',
                    'options' => array(
                        'label' => 'Password Verify',
                    ),
                    'attributes' => array(
                        'type' => 'password',
                        'class' => 'form-control',
                        'placeholder' => '********'
                    ),
                ));
            }
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
