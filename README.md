SkeletonBundle
==============

The HTML markup skeleton of base templates for Symfony Framework

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/cb900935-8444-496a-8a97-8af04fad1aba/mini.png)](https://insight.sensiolabs.com/projects/cb900935-8444-496a-8a97-8af04fad1aba)

Install
-------

Install bundle with `Composer` dependency manager first by running the command:

`$ composer require "bocharsky-bw/skeleton-bundle:dev-master"`

`Composer` will install the bundle to your project's `vendor` directory.

Include
-------

Including the bundle to your `Symfony` project is as easy as to do a few simple steps.

1) Enable the bundle in application kernel for `prod` environment:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // other bundles...
        new BW\SkeletonBundle\BWSkeletonBundle(),
    );
}
```

2) Register the bundle's routes for `dev` environment *(optional, if you want to see the demo examples)*:

``` yaml
# app/config/routing_dev.yml
_bw_skeleton_bundle:
    resource: "@BWSkeletonBundle/Controller/"
    type:     annotation
    prefix:   /_bw/skeleton
```

Congratulations!
----------------
You're ready to rock your templates to extends skeleton templates!
