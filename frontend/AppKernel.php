<?php

require_once __DIR__.'/../commons/BaseKernel.php';

// For propel / doctrine uploads : getUploadRootDir() => __DIR__.'/../../../../web/', KERNEL_DIR.'/../web/'
define('KERNEL_DIR', __DIR__);

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends BaseKernel
{
    public function registerAppBundles()
    {
        $bundles = array(

        );

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
