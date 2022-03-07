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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_0bc7770312101b7501006cf26ab82af37a81c8c589c4e793e9b5db214b2bfebf extends Template
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
        $this->parent = $this->loadTemplate("backend.html.twig", "@Twig/Exception/error.html.twig", 1);
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
        <h1 class=\"page__title text--info\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</h1>
        <p class=\"page__title file--text\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "!</p>
        <div class=\"file__image\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/error.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <p class=\"page__text text--sorry\">The page you requested return status: - ";
        // line 14
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ".</p>
        <p class=\"page__text text--please\"> Please go back to the <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> homepage!</a></p>

    </div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  77 => 14,  72 => 12,  67 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\bundles\\TwigBundle\\Exception\\error.html.twig");
    }
}
