<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.gGr0Wzu' shared service.

return $this->privates['.service_locator.gGr0Wzu'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('connection' => function () {
    return ($this->services['doctrine.dbal.default_connection'] ?? $this->load('getDoctrine_Dbal_DefaultConnectionService.php'));
}));