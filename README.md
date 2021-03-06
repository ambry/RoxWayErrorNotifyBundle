README
======

Provides e-mail error notification for your Symfony2 Project (only exceptions right now).

**Caution:** This bundles is developed in sync with [symfony's repository](https://github.com/symfony/symfony)

Requirements
============

- Twig
- Swift Mailer

Installation
============

Add RoxWayErrorNotifyBundle to your deps
------------------------------------------

    [RoxWayErrorNotifyBundle]
	    git=https://github.com/szymek/RoxWayErrorNotifyBundle.git
	    target=/bundles/RoxWay/Bundle/ErrorNotifyBundle

Add the RoxWay namespace to your autoloader
----------------------------------------

    // app/autoload.php
    $loader->registerNamespaces(array(
        'RoxWay' => __DIR__.'/../vendor/bundles',
        // your other namespaces
    );

Add RoxWayErrorNotifyBundle to your application kernel
-----------------------------------------

    // app/AppKernel.php

    public function registerBundles()
    {
        return array(
            // ...
            new RoxWay\Bundle\ErrorNotifyBundle\RoxWayErrorNotifyBundle(),
            // ...
        );
    }

Configure your project
----------------------
	// app/config.yml
	rox_way_error_notify:
	  is_enable: true
	  to_mail: error_notify_to_mail@example.com
	  from_mail: error_notify_from_mail@example.com