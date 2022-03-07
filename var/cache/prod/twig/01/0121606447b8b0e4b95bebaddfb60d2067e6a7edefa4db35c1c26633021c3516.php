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

/* reset_password/request.html.twig */
class __TwigTemplate_b8472efa40525ad687533e199d26f2f054112565e6efdd92a3e1cd2f99359ac5 extends Template
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
        $this->parent = $this->loadTemplate("backend.html.twig", "reset_password/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Reset your password";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"rightside\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "reset_password_error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 8
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        <div class=\"page__header\">
            <div class=\"return\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"\"><img
                            src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/arrow-back.svg"), "html", null, true);
        echo "\"
                            alt=\"\"></a>
                <p> Reset your password !</p>
            </div>
        </div>
        <p class=\"page__text\">
            Enter your email address and we will send you a
            link to reset your password.
        </p>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_start');
        echo "

        <div class=\"form__control\"> ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["requestForm"] ?? null), "email", [], "any", false, false, false, 24), 'row', ["label" => false, "attr" => ["class" => "input rounded", "placeholder" => "Email"]]);
        echo "</div>
        <br><br>
        <div class=\"form__buttons\">
            <div class=\"button__group-btn\">
                <button class=\"btn btn--lg btn--default\">Send reset email</button>
            </div>
        </div>
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  99 => 24,  94 => 22,  82 => 13,  78 => 12,  74 => 10,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/request.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\reset_password\\request.html.twig");
    }
}
