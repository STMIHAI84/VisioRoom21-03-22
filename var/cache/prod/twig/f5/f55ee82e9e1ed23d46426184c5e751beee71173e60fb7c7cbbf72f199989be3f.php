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

/* dashboard/userEdit.html.twig */
class __TwigTemplate_4438648d38aa253f5b78e9e729c7ee0bf08666f6fa770b830fb270d93e3e4757 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("backend.html.twig", "dashboard/userEdit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"rightside\">
        <div class=\"page__header\">
            <div class=\"page__user\"><!----><!---->
                <div class=\"return\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
        echo "\" class=\"\"><img
                                src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/arrow-back.svg"), "html", null, true);
        echo "\"
                                alt=\"\"></a>
                    <p>Profile update!</p>
                </div>
            </div>
            <div class=\"page__actions\">
                <div class=\"page__actions-buttons\">

                    <div class=\"page__actions-log\">
                        <a class=\"page__actions-button warning\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/logout.svg"), "html", null, true);
        echo "\"
                                 alt=\"app_index\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <form class=\"schedule--form\">
            <div class=\"schedule__form\">
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formUser"] ?? null), 'form_start', ["attr" => ["inovalidate" => "novalidate"]]);
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formUser"] ?? null), "email", [], "any", false, false, false, 28), 'errors');
        echo "<br>
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formUser"] ?? null), "imageFile", [], "any", false, false, false, 29), 'errors');
        echo "
                <div class=\"container-body col-md-6\">
                    <div class=\"form__control\"> ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formUser"] ?? null), "fullName", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "input rounded--top form-control is-invalid", "placeholder" => "FullName"]]);
        echo "</div>
                    <div class=\"form__control\"> ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formUser"] ?? null), "email", [], "any", false, false, false, 32), 'widget', ["label" => false, "attr" => ["class" => "input", "placeholder" => "Email Address"]]);
        echo "</div>
                    <div class=\"form__control\"> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formUser"] ?? null), "imageFile", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "input"]]);
        echo "</div>
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formUser"] ?? null), 'widget');
        echo "
                    <br>
                    <div class=\"form__buttons\">
                        <div class=\"button__group-btn\">
                            <button type=\"submit\" class=\"btn btn--medium btn--default\"><!----> Update</button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formUser"] ?? null), 'form_end');
        echo "
        </form>
    </div>
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                \$(\".rooms\").select2({
                    placeholder: \"Select room\",
                    class: \"form__control\"
                });
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "dashboard/userEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  133 => 47,  125 => 43,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  96 => 29,  92 => 28,  88 => 27,  76 => 18,  72 => 17,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/userEdit.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\dashboard\\userEdit.html.twig");
    }
}
