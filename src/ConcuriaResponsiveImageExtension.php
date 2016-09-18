<?php

namespace Concuria\Bolt\Extension\ResponsiveImage;

use Bolt\Extension\AbstractExtension;
use Silex\ServiceProviderInterface;
use Silex\Application;

class ConcuriaResponsiveImageExtension extends AbstractExtension implements ServiceProviderInterface
{
    public function register(Application $app) 
    {
    }

    public function boot(Application $app)
    {
    }

    public function getServiceProviders()
    {
        return [ $this ];
    }
}
