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

/* reset_password/check_email.html.twig */
class __TwigTemplate_1fdafe515346e664e4baee8ca62c5e78e4dd68c34c617f05d72c2facdaa5660b extends Template
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
        $this->parent = $this->loadTemplate("backend.html.twig", "reset_password/check_email.html.twig", 1);
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
        <div class=\"page__header\">
            <div class=\"return\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"\"><img
                            src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/arrow-back.svg"), "html", null, true);
        echo "\"
                            alt=\"\"></a>
                <p> Back to login !</p>
            </div>
        </div>
        <p class=\"page__text\">
            If an account matching your email exists, then an email was just sent that contains a link
            that
            you can use to reset your password.
            This link will expire
            in ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageData", [], "any", false, false, false, 19), "ResetPasswordBundle"), "html", null, true);
        echo "
            .</p><br>
        <br>
        <p class=\"page__text\">
            If you don't receive an email please check your spam folder or <a
                    href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">try again</a>.</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "reset_password/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  79 => 19,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/check_email.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\reset_password\\check_email.html.twig");
    }
}
