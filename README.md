
H4md1JsqueezeBundle
=====================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/073aa16d-fe30-40e3-ad30-745b33d2a440/big.png)](https://insight.sensiolabs.com/projects/073aa16d-fe30-40e3-ad30-745b33d2a440)
This bundle allows you to use jsqueeze in your twig template.

Installation
------------

### Step 1: Install H4md1JsqueezeBundle using [Composer](http://getcomposer.org)

Add MediaApiBundle in your `composer.json`:

{
    "require": {
        "h4md1/jsqueeze-bundle": "dev-master"
    }
}

Now tell composer to download the bundle by running the command:

$ php composer.phar update h4md1/jsqueeze-bundle

### Step 2: Enable the bundle

Enable the bundle in the kernel:

<?php

// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new H4md1\JsqueezeBundle\H4md1JsqueezeBundle(),
        // ...
        );
    }

Usage
-----
soon


Known limitations and bugs
-----
A lot for sure


License
-------

This bundle is licensed under the MIT license.
