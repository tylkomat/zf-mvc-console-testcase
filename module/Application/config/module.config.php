<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Application\Controller\IndexController;
use Zend\ServiceManager\Factory\InvokableFactory;

return array(
    'controllers' => array(
        'factories' => array(
            IndexController::class => InvokableFactory::class
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
                'test' => array(
                    'options' => array(
                        'route' => 'run',
                        'defaults' => array(
                            'controller' => IndexController::class,
                            'action' => 'index'
                        )
                    )
                )
            ),
        ),
    ),
);
