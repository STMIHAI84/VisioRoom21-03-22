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

/* security/login.html.twig */
class __TwigTemplate_016742c3748f85a0930fb1ce265cfd82cce2063850be0d19723be652489361da extends Template
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
        $this->parent = $this->loadTemplate("backend.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <div class=\"rightside\">
            <h2 class=\"page__title\">Hello !</h2>
            <p class=\"page__text\">Welcome back, please login to your account.</p>
            <form method=\"post\" action=\"\" class=\"form actions__form\">
                ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 13
        echo "
                ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "                    <div class=\"mb-3\">
                        You are logged in as ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 19
        echo "                <div class=\"form__control\">
                    <input type=\"email\" placeholder=\"Email Address\" class=\"input rounded--top\"
                           value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\"
                           autocomplete=\"email\" required autofocus><br>
                </div>
                <div class=\"form__control\">
                    <input type=\"password\" placeholder=\"Password\" class=\"input rounded--bottom\"
                           name=\"password\" id=\"inputPassword\"
                           autocomplete=\"current-password\" required>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form__actions\">
                    <div class=\"checkbox\">
                        <label for=\"remember_me\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
                            <span class=\"checkmark\"></span> Remember me </label>
                    </div>
                    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"links\">Forgot
                        password?</a>
                </div>
                <div class=\"form__buttons\">
                    <div class=\"button__group-btn\">
                        <button type=\"submit\" class=\"btn btn--medium btn--default\">Log in</button>
                    </div>
                </div>
            </form>
            <div class=\"additional__actions\">
                <p>Don't have an account? <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"\">Sign Up</a>
                </p>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 48,  113 => 38,  102 => 30,  90 => 21,  86 => 19,  80 => 16,  77 => 15,  75 => 14,  72 => 13,  66 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\security\\login.html.twig");
    }
}
