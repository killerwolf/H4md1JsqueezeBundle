<?php

namespace H4md1\JsqueezeBundle\Twig;

class JsqueezeExtension extends \Twig_Extension
{
    public function getTokenParsers()
    {
        return array (
            new JsqueezeTokenParser(),
        );
    }

    public function getName()
    {
        return 'jsqueeze';
    }
}