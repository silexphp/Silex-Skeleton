Silex Skeleton
==============

Welcome to the Silex Skeleton - a fully-functional Silex application that you
can use as the skeleton for your new applications.

This document contains information on how to start using the Silex Skeleton.

Creating a Silex Application
----------------------------

Silex uses `Composer`_ to ease the creation of a new project:

.. code-block:: console

    $ composer create-project fabpot/silex-skeleton path/to/install "~2.0"

Composer will create a new Silex project under the `path/to/install` directory.

Browsing the Demo Application
-----------------------------

Congratulations! You're now ready to use Silex.

To see a real-live Silex page in action, start the PHP built-in web server with
command:

.. code-block:: console

    $ cd path/to/install
    $ COMPOSER_PROCESS_TIMEOUT=0 composer run

Then, browse to http://localhost:8888/index_dev.php/

Getting started with Silex
--------------------------

This distribution is meant to be the starting point for your Silex applications.

A great way to start learning Silex is via the `Documentation`_, which will
take you through all the features of Silex.

What's inside?
---------------

The Silex Skeleton is configured with the following service providers:

* `ValidatorServiceProvider`_ - Provides a service for validating data. It is
  most useful when used with the FormServiceProvider, but can also be used
  standalone.

* `ServiceControllerServiceProvider`_ - As your Silex application grows, you
  may wish to begin organizing your controllers in a more formal fashion.
  Silex can use controller classes out of the box, but with a bit of work,
  your controllers can be created as services, giving you the full power of
  dependency injection and lazy loading.

* `TwigServiceProvider`_ - Provides integration with the Twig template engine.

* `WebProfilerServiceProvider`_ - Enable the Symfony web debug toolbar and
  the Symfony profiler in your Silex application when developing.

* `MonologServiceProvider`_ - Enable logging in the development environment.

Read the `Providers`_ documentation for more details about Silex Service
Providers.

Enjoy!

.. _Composer: http://getcomposer.org/
.. _Documentation: http://silex.sensiolabs.org/documentation
.. _ValidatorServiceProvider: http://silex.sensiolabs.org/doc/master/providers/validator.html
.. _ServiceControllerServiceProvider: http://silex.sensiolabs.org/doc/master/providers/service_controller.html
.. _TwigServiceProvider: http://silex.sensiolabs.org/doc/master/providers/twig.html
.. _WebProfilerServiceProvider: http://github.com/silexphp/Silex-WebProfiler
.. _MonologServiceProvider: http://silex.sensiolabs.org/doc/master/providers/monolog.html
.. _Providers: http://silex.sensiolabs.org/doc/providers.html
