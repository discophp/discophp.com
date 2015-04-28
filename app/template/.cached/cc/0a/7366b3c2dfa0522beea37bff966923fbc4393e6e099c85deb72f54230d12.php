<?php

/* _layout.html */
class __TwigTemplate_cc0a7366b3c2dfa0522beea37bff966923fbc4393e6e099c85deb72f54230d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang='";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "lang", array()), "html", null, true);
        echo "'>
    <head>
        <meta charset='";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "charset", array()), "html", null, true);
        echo "' />
        <meta content='";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "robots", array()), "html", null, true);
        echo "' name='robots'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "title", array()), "html", null, true);
        echo "</title>
        ";
        // line 8
        if ($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "description", array())) {
            // line 9
            echo "        <meta name='description' content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "description", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 11
        echo "
        <link type='image/x-icon' href='";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "favIcon", array()))), "html", null, true);
        echo "' rel='shortcut icon'>

        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "styleSrcs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 15
            echo "        <link rel='stylesheet' href='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->getAttribute($context["s"], "src", array()))), "html", null, true);
            echo "' type='text/css'";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "props", array()));
            foreach ($context['_seq'] as $context["p"] => $context["a"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['p'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        ";
        // line 18
        if ($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "styles", array())) {
            // line 19
            echo "        <style>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "styles", array()), "html", null, true);
            echo "</style>
        ";
        }
        // line 21
        echo "
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "headScriptSrcs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 23
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->getAttribute($context["s"], "src", array()))), "html", null, true);
            echo "'";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "props", array()));
            foreach ($context['_seq'] as $context["p"] => $context["a"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['p'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        ";
        // line 26
        if ($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "headExtra", array())) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "headExtra", array()), "html", null, true);
            echo "
        ";
        }
        // line 29
        echo "
    </head>
    <body";
        // line 31
        if ($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "bodyStyles", array())) {
            echo " class='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "bodyStyles", array()), "html", null, true);
            echo "'";
        }
        echo ">

        ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "scriptSrcs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 36
            echo "        <script type='text/javascript' src='";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->getAttribute($context["s"], "src", array()))), "html", null, true);
            echo "'";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "props", array()));
            foreach ($context['_seq'] as $context["p"] => $context["a"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['p'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        ";
        // line 39
        if ($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "scripts", array())) {
            // line 40
            echo "        <script type='text/javascript'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "scripts", array()), "html", null, true);
            echo "</script>
        ";
        }
        // line 42
        echo "
    </body>
</html>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 33,  189 => 42,  183 => 40,  181 => 39,  178 => 38,  156 => 36,  152 => 35,  149 => 34,  147 => 33,  138 => 31,  134 => 29,  128 => 27,  126 => 26,  123 => 25,  101 => 23,  97 => 22,  94 => 21,  88 => 19,  86 => 18,  83 => 17,  61 => 15,  57 => 14,  52 => 12,  49 => 11,  43 => 9,  41 => 8,  37 => 7,  32 => 5,  28 => 4,  23 => 2,  20 => 1,);
    }
}
