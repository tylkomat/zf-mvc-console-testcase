<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;
use Exception;
use Zend\Mvc\Console\Controller\AbstractConsoleController;

class IndexController extends AbstractConsoleController
{
    public function indexAction()
    {
        $this->console->writeLine('Exception after this line');
        throw new Exception('test');
    }
}
