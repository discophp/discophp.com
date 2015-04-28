<?php

/* docsBasePage.template.html */
class __TwigTemplate_b81df70ab23280582f7c01f1af6b23b4a46aca3985614bf0d8a7e64007aae61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class='row collapse'>
    <div class='docs-content small-12 medium-10 columns right'>
        ";
        // line 3
        $this->loadTemplate("inPageStickyNav.template.html", "docsBasePage.template.html", 3)->display($context);
        // line 4
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
    <div class='docs-menu small-12 medium-2 columns'>
        <ul class='side-nav'>
            <li class='divide'>Getting Started</li>
            <div class='menu-wrap'>
                <li><a href='/docs'>Introduction</a></li>
                <li><a href='/docs/install'>Installation</a></li>
                <li><a href='/docs/config'>Configuration</a></li>
                <li><a href='/docs/request-lifecycle'>Request Lifecycle</a></li>
                <li><a href='/docs/routing-guide'>Routing & Controllers</a></li>
                <li><a href='/docs/template-guide'>Views & Templates</a></li>
                <li><a href='/docs/IoC-facades'>IoC & Facades</a></li>
            </div>


            <li class='divide'>Facades</li>
            <div class='menu-wrap'>
                <li><a href='/docs/Cache'>Cache</a></li>
                <li><a href='/docs/Crypt'>Crypt</a></li>
                <li><a href='/docs/Data'>Data</a></li>
                <li><a href='/docs/Database'>Database(DB)</a></li>
                <li><a href='/docs/Email'>Email</a></li>
                <li><a href='/docs/Event'>Event</a></li>
                <li><a href='/docs/Form'>Form</a></li>
                <li><a href='/docs/Html'>Html</a></li>
                <li><a href='/docs/Model'>Model</a></li>
                <li><a href='/docs/Queue'>Queue</a></li>
                <li><a href='/docs/Router'>Router</a></li>
                <li><a href='/docs/Session'>Session</a></li>
                <li><a href='/docs/Template'>Template</a></li>
                <li><a href='/docs/Util'>Util</a></li>
                <li><a href='/docs/View'>View</a></li>
            </div>

            <li class='divide'>More</li>
            <div class='menu-wrap'>
                <li><a href='/docs/user'>user</a></li>
                <li><a href='/docs/Authentication'>Authentication</a></li>
                <li><a href='/docs/CLI'>Command Line Interface</a></li>
            </div>

            <li class='divide'>Addons</li>
            <div class='menu-wrap'>
                <li><a href='/docs/Addons'>How To</a></li>
                <li><a href='/docs/addon/directory'>Directory</a></li>
            </div>


        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "docsBasePage.template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  19 => 1,);
    }
}
