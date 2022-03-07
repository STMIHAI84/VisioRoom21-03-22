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

/* @Twig/Exception/error400.html.twig */
class __TwigTemplate_eae17578879e667c55f5b2710465e73a83d58db1c51960fa22efb4905bcc2868 extends Template
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
        $this->parent = $this->loadTemplate("backend.html.twig", "@Twig/Exception/error400.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    File not found
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"rightside\">
        <h1 class=\"page__title text--info\">400 !</h1>
        <p class=\"page__title file--text\">Bad Request!</p>
        <div class=\"file__image\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/error.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <p class=\"page__text text--sorry\">We’re sorry, the page you requested could not be found.</p>
        <p class=\"page__text text--please\"> Please go back to the homepage!</p>
        ";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        // line 20
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error400.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  77 => 19,  75 => 18,  73 => 17,  66 => 12,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error400.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\bundles\\TwigBundle\\Exception\\error400.html.twig");
    }
}
