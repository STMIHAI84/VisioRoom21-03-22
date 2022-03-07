<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_29b4123e98048835b412d19587cb20ee143891dfae2011c673b8f9f41406930f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page not found!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"rightside\">
        <h1 class=\"page__title text--info\">404!</h1>
        <p class=\"page__title file--text\">Page not found!</p>
        <div class=\"file__image\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/error.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <p class=\"page__text text--sorry\">We’re sorry, the page you requested could not be found.</p>
        <p class=\"page__text text--please\"> Please go back to the <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> homepage!</a></p>
        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  78 => 17,  76 => 16,  74 => 15,  70 => 13,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\bundles\\TwigBundle\\Exception\\error404.html.twig");
    }
}
