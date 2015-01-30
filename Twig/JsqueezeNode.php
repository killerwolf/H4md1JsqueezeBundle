<?php

namespace H4md1\JsqueezeBundle\Twig;

use Patchwork\JSqueeze;

class JsqueezeNode extends \Twig_Node
{
    public function __construct(\Twig_NodeInterface $body,
                                $line, $tag = null)
    {
        parent::__construct(array('body' => $body), array(), $line, $tag);
    }

    public function compile(\Twig_Compiler $compiler)
    {
        //var_dump($this->getNode('body'));die();
        $minifiedJs = (new JSqueeze())->squeeze(
            $this->getNode('body')->getAttribute('data'),
            true,   // $singleLine
            true,   // $keepImportantComments
            false   // $specialVarRx
        );

        $bodyNode = $this->getNode('body');
        $bodyNode->setAttribute('data', $minifiedJs);
        $compiler
            ->addDebugInfo($this)
            ->write("ob_start();\n")
            ->subcompile($bodyNode)
            ->write("echo(ob_get_clean()");
        $compiler->raw(");\n");
    }
}