Silex Skeleton
==============

Welcome to the Silex Skeleton - a fully-functional Silex
application that you can use as the skeleton for your new applications.

This document contains information on how to download, install, and start
using Silex Skeleton. For a more detailed explanation, see the page [Download and Installation][1]
of the Silex website.

1) Installing the Silex Skeleton
--------------------------------

When it comes to installing the Silex Skeleton, you have the following options.

### Use Composer (*recommended*)

As Silex uses [Composer][2] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new Silex application:

    php composer.phar create-project silexphp/Silex-Skeleton path/to/install

Composer will install Silex and all its dependencies under the
`path/to/install` directory.

2) Browsing the Demo Application
--------------------------------

Congratulations! You're now ready to use Silex.

To see a real-live Silex page in action, access the following page:

    web/index_dev.php/

3) Getting started with Silex
-----------------------------

This distribution is meant to be the starting point for your Silex
applications.

A great way to start learning Silex is via the [Documentation][3], which will
take you through all the features of Silex.

What's inside?
---------------

The Silex Skeleton is configured with the following service providers:

  * [**UrlGeneratorServiceProvider**][4] - Provides a service for generating
  URLs for named routes.

  * [**ValidatorServiceProvider**][5] - Provides a service for validating data.
  It is most useful when used with the FormServiceProvider, but can also be used
  standalone.

  * [**ServiceControllerServiceProvider**][6] - As your Silex application grows,
  you may wish to begin organizing your controllers in a more formal fashion.
  Silex can use controller classes out of the box, but with a bit of work, your
  controllers can be created as services, giving you the full power of dependency
   injection and lazy loading.

  * [**TwigServiceProvider**][7] - Provides integration with the Twig template
  engine.

See the page [Providers][8] for more details of Service Providers.

Enjoy!

[1]:  http://silex.sensiolabs.org/download
[2]:  http://getcomposer.org/
[3]:  http://silex.sensiolabs.org/documentation
[4]:  http://silex.sensiolabs.org/doc/providers/url_generator.html
[5]:  http://silex.sensiolabs.org/doc/providers/validator.html
[6]:  http://silex.sensiolabs.org/doc/providers/service_controller.html
[7]:  http://silex.sensiolabs.org/doc/providers/twig.html
[8]:  http://silex.sensiolabs.org/doc/providers.html
