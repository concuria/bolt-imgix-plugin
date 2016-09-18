<?php

use Bolt\Application as BoltApplication;
use Ylly\Bolt\Extension\Fnair\Storage\Entity\User;
use Bolt\Configuration\Composer;
use Concuria\Bolt\Extension\ResponsiveImage\ConcuriaResponsiveImageExtension;

class Application extends BoltApplication
{
    public static function create()
    {
        $paths = [
            'cache' => 'app/cache',
            'config' => 'app/config',
            'database' => 'app/database',
            'web' => 'public',
            'themebase' => 'public/theme',
            'files' => 'public/files',
            'view' => 'public/bolt-public/view',
        ];

        $resources = new Composer(__DIR__.'/..');

        // Set any non-standard paths
        foreach ($paths as $name => $path) {
            $resources->setPath($name, $path);
        }
        $resources->verify();

        $app = new self(['resources' => $resources]);
        $app->initialize();

        return $app;
    }

    public function initialize()
    {
        parent::initialize();
        $this->register(new ConcuriaResponsiveImageExtension());
    }
}
