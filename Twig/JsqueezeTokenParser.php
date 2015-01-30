<?php

namespace H4md1\JsqueezeBundle\Twig;

class JsqueezeTokenParser extends \Twig_TokenParser
{
    public function parse(\Twig_Token $token)
    {
        $parser = $this->parser;
        $stream = $parser->getStream();

        $stream->expect(\Twig_Token::BLOCK_END_TYPE);

        $body = $this->parser->subparse(array($this, 'decideJsqueezeEnd'), true);

        $stream->expect(\Twig_Token::BLOCK_END_TYPE);

        return new JsqueezeNode($body, $token->getLine(), $this->getTag());
    }

    public function decideJsqueezeEnd(\Twig_Token $token)
    {
        return $token->test('end'.$this->getTag());
    }

    public function getTag()
    {
        return 'jsqueeze';
    }
}