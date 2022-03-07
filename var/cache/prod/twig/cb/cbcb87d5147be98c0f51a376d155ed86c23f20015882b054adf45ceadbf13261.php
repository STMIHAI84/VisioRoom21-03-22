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

/* backend.html.twig */
class __TwigTemplate_d8627cb22fafe3571c717c25f2607ad72561c495689e67c8f8c9a2f33be17248 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'leftbar' => [$this, 'block_leftbar'],
            'body' => [$this, 'block_body'],
            'bottom' => [$this, 'block_bottom'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
</head>
<body>

";
        // line 26
        $this->displayBlock('leftbar', $context, $blocks);
        // line 48
        echo "
                ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
                ";
        // line 52
        $this->displayBlock('bottom', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\"/>
        <link href=\"https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css\" rel=\"stylesheet\">
        <script src=\"https://code.jquery.com/jquery-1.10.2.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/fonts/fonts.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/bg-bottom.svg"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/fonts/fonts.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/noise-bg.svg"), "html", null, true);
        echo "\">
    ";
    }

    // line 26
    public function block_leftbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<main>
    <div class=\"leftbar\" style=\"max-width: 25%;\">
        <div class=\"leftbar__circle\"></div>
        <div class=\"leftbar__circle\"></div>
    </div>

    <div class=\"container\" style=\"margin: 0px 60px;\">
        <div class=\"wrapper\">
            <div class=\"login\">
                <div class=\"leftside\">
                    <div class=\"topbar\">
                        <a href=\"/\" class=\"router-link-active\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/logo.svg"), "html", null, true);
        echo "\"
                                                                    alt=\"\"></a>
                    </div>
                    <div class=\"leftside__text\">
                        <h1> Welcome to <span>VisioRoom!</span></h1>
                        <p class=\"page__description\"> The service of free <br>personal and group calls. </p>
                    </div>
                </div>

                ";
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                ";
    }

    // line 52
    public function block_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                <div class=\"bottom\">
                    <p class=\"copyrights\" style=\"margin: 0px;\">© ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " VisioRoom.com</p>
                </div>
            </div>
        </div>
    </div>
</main>
";
    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/js/main.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "backend.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 65,  189 => 63,  185 => 62,  174 => 54,  171 => 53,  167 => 52,  163 => 50,  159 => 49,  145 => 38,  132 => 27,  128 => 26,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  99 => 11,  95 => 10,  88 => 8,  82 => 68,  80 => 62,  77 => 61,  75 => 52,  72 => 51,  70 => 49,  67 => 48,  65 => 26,  59 => 22,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\backend.html.twig");
    }
}
