<?php

use App\Controller\BlogController;
use App\Controller\LuckyController;
use App\Controller\TaskController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('blog_list', '/lucky_number/{max_number}')
        // the controller value has the format [controller_class, method_name]
        ->controller([LuckyController::class, 'number'])
        ->methods(['GET', 'POST'])
        ->requirements(['max-number' => '\d+']);

    $routes->add('new_task_form', '/new_task_form')
        ->controller([TaskController::class, 'new']);
};