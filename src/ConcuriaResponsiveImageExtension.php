<?php

namespace Concuria\Bolt\Extension\ResponsiveImage;

use Bolt\Extension\SimpleExtension;
use DTL\Bolt\Extension\Fixtures\Command\LoadFixturesCommand;
use Bolt\Extension\AbstractExtension;
use Bolt\Extension\NutTrait;
use Silex\ServiceProviderInterface;
use Silex\Application;
use Nelmio\Alice\Fixtures\Loader;
use DTL\Bolt\Extension\Fixtures\Alice\Instantiator;
use DTL\Bolt\Extension\Fixtures\Alice\ReferencePopulator;
use DTL\Bolt\Extension\Fixtures\Alice\TaxonomyPopulator;
use DTL\Bolt\Extension\Fixtures\Alice\TemplateFieldsPopulator;
use DTL\Bolt\Extension\Fixtures\Fixture\Purger;
use DTL\Bolt\Extension\Fixtures\Alice\SlugPopulator;

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
