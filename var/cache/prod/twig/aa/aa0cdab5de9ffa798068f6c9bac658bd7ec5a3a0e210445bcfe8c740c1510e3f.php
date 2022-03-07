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

/* reset_password/reset.html.twig */
class __TwigTemplate_462ddc70251b159771fc8c39baf0cc3edab2c0dfcfa8e4c43b6fd7c6e94b136b extends Template
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
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["resetForm"] ?? null), [0 => "bootstrap_4_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "reset_password/reset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Reset your password";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                    <div class=\"rightside\">
                        <h1>Reset your password</h1>
                        <div class=\"container-body col-md-6\">
                            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["resetForm"] ?? null), 'form_start');
        echo "

                            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 13), 'errors');
        echo "
                            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 14), 'row');
        echo "
                            <br>
                            <div class=\"form__buttons\">
                                <div class=\"button__group-btn\">
                                    <button class=\"btn btn--medium btn--default\">Reset password</button>
                                </div>
                            </div>
                            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["resetForm"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "reset_password/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  75 => 14,  71 => 13,  66 => 11,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/reset.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\reset_password\\reset.html.twig");
    }
}
