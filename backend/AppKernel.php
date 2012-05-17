<?php

// For propel / doctrine uploads : getUploadRootDir() => __DIR__.'/../../../../web/', KERNEL_DIR.'/../web/'
define('KERNEL_DIR', __DIR__);

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),

            // Forms Extra
            new Trsteel\CkeditorBundle\TrsteelCkeditorBundle(),

            // Propel
            new Propel\PropelBundle\PropelBundle(),

            // Admingen
            new Admingenerator\GeneratorBundle\AdmingeneratorGeneratorBundle(),
            new Admingenerator\ActiveAdminThemeBundle\AdmingeneratorActiveAdminThemeBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Admingenerator\UserBundle\AdmingeneratorUserBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),

        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        if ('test' === $this->getEnvironment()) {
            $bundles[] = new Behat\BehatBundle\BehatBundle();
            $bundles[] = new Behat\MinkBundle\MinkBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
