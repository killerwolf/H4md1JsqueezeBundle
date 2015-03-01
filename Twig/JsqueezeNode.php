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
        //dump($this->getNode('body'));
        $minifiedJs = (new JSqueeze())->squeeze(
            'plip',//$this->getNode('body')->getAttribute('data'),
            true,   // $singleLine
            true,   // $keepImportantComments
            false   // $specialVarRx
        );

        $bodyNode = $this->getNode('body');
        //$bodyNode->setAttribute('data', $minifiedJs);
        $compiler
            ->addDebugInfo($this)
            ->write("ob_start();\n")
            ->subcompile($bodyNode)
            ->write("echo((new \Patchwork\JSqueeze())->squeeze(ob_get_clean(),true,true,false));\n");
            //->raw(");\n");
    }
}