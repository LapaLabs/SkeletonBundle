# SkeletonBundle

The HTML markup skeleton of base templates for Symfony Framework

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/cb900935-8444-496a-8a97-8af04fad1aba/mini.png)](https://insight.sensiolabs.com/projects/cb900935-8444-496a-8a97-8af04fad1aba)

## Install

Install bundle with `Composer` dependency manager first by running the command:

`$ composer require "lapalabs/skeleton-bundle:dev-master"`

`Composer` will install the bundle to your project's `vendor` directory.

## Include

Including the bundle to your `Symfony` project is as easy as to do a few simple steps.

1) Enable the bundle in application kernel for `prod` environment:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // other bundles...
        new LapaLabs\SkeletonBundle\LapaLabsSkeletonBundle(),
    );
}
```

2) Register the bundle's routes for `dev` environment *(optional, if you want to see demo examples)*:

``` yaml
# app/config/routing_dev.yml
_lapalabs_skeleton_bundle:
    resource: "@LapaLabsSkeletonBundle/Controller/"
    type:     annotation
    prefix:   /_lapalabs/skeleton
```

## Usage

The best practices is to create your own template, that extends skeleton one.
For example, create your own `layout.html.twig` in `AppBundle`:

``` jinja
{# src/AppBundle/Resources/views/layout.html.twig #}

{% extends 'LapaLabsSkeletonBundle:html5:layout.html.twig' %}

{% block css %}
    {{ parent() }} {# if you want to include content of parent block #}
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap-theme.min.css') }}">
{% endblock %}

{% block js %}
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
{% endblock %}
```

And then you can extends it in other templates:

``` jinja
{# src/AppBundle/Resources/views/Post/show.html.twig #}

{% extends 'AppBundle::layout.html.twig' %}

{% block content_wrap %}
    <h1>{{ entity.heading }}</h1>
    <p>{{ entity.description }}</p>
{% endblock %}
```

## Congratulations!

You're ready to rock your templates to extends skeleton templates!

More documentation:
* [Overriding Bundle Templates][1]
* [How to Use Bundle Inheritance to Override Parts of a Bundle][2]


[1]: http://symfony.com/doc/current/book/templating.html#overriding-bundle-templates
[2]: http://symfony.com/doc/current/cookbook/bundles/inheritance.html
