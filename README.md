# A symfony ready to code version

## The power - out of the box

Ready to Work with :

* Composer
* A frontend
* A backend
* Admingenerator
* Behat

## Install

``` 
curl -s http://getcomposer.org/installer | php
php composer.phar install --dev
``` 

## Easy rebuild

``` 
./rebuild.sh
``` 

What's inside?
---------------

The Symfony ready to code version comes pre-configured with a backend and a frontend and with the following bundles:

* **FrameworkBundle** - The core Symfony framework bundle
* **SensioFrameworkExtraBundle** - Adds several enhancements, including template
  and routing annotation capability ([documentation](http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html))
* **PropelBundle** - Adds support for the Propel ORM
  ([documentation](http://www.propelorm.org/))
* **TwigBundle** - Adds support for the Twig templating engine
  ([documentation](http://symfony.com/doc/current/book/templating.html))
* **SecurityBundle** - Adds security by integrating Symfony's security component
  ([documentation](http://symfony.com/doc/current/book/security.html))
* **SwiftmailerBundle** - Adds support for Swiftmailer, a library for sending emails
  ([documentation](http://symfony.com/doc/2.0/cookbook/email.html))
* **MonologBundle** - Adds support for Monolog, a logging library
  ([documentation](http://symfony.com/doc/2.0/cookbook/logging/monolog.html))
* **AsseticBundle** - Adds support for Assetic, an asset processing library
  ([documentation](http://symfony.com/doc/2.0/cookbook/assetic/asset_management.html))
* **JMSSecurityExtraBundle** - Allows security to be added via annotations
  ([documentation](http://jmsyst.com/bundles/JMSSecurityExtraBundle/1.1))
* **JMSDiExtraBundle** - Adds more powerful dependency injection features 
  ([documentation](http://jmsyst.com/bundles/JMSDiExtraBundle/1.0))
* **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
  the web debug toolbar
* **SensioDistributionBundle** (in dev/test env) - Adds functionality for configuring
  and working with Symfony distributions
* **SensioGeneratorBundle** (in dev/test env) - Adds code generation capabilities
  ([documentation](http://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html))
* **AdminGeneratorGeneratorBundle** ([documentation](http://symfony2admingenerator.org/))

And for your tests

* **BehatBundle** ([documentation](http://http://docs.behat.org/bundle/index.html))

Enjoy!
