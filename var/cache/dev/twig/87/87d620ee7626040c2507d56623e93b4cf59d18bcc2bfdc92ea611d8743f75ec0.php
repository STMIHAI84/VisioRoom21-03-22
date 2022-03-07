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
class __TwigTemplate_cd143bcaaf921cdbe3f6397d426373801b8f77faa60d8b80b783e3c070d46469 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("backend.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <div class=\"rightside\">
            <h2 class=\"page__title\">Hello !</h2>
            <p class=\"page__text\">Welcome back, please login to your account.</p>
            <form method=\"post\" action=\"\" class=\"form actions__form\">
                ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 13
        echo "
                ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "                    <div class=\"mb-3\">
                        You are logged in as ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 19
        echo "                <div class=\"form__control\">
                    <input type=\"email\" placeholder=\"Email Address\" class=\"input rounded--top\"
                           value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  156 => 48,  143 => 38,  132 => 30,  120 => 21,  116 => 19,  110 => 16,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend.html.twig' %}

    {% block title %}Log in!{% endblock %}

    {% block body %}
        <div class=\"rightside\">
            <h2 class=\"page__title\">Hello !</h2>
            <p class=\"page__text\">Welcome back, please login to your account.</p>
            <form method=\"post\" action=\"\" class=\"form actions__form\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                {% if app.user %}
                    <div class=\"mb-3\">
                        You are logged in as {{ app.user.fullName }}
                    </div>
                {% endif %}
                <div class=\"form__control\">
                    <input type=\"email\" placeholder=\"Email Address\" class=\"input rounded--top\"
                           value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"
                           autocomplete=\"email\" required autofocus><br>
                </div>
                <div class=\"form__control\">
                    <input type=\"password\" placeholder=\"Password\" class=\"input rounded--bottom\"
                           name=\"password\" id=\"inputPassword\"
                           autocomplete=\"current-password\" required>

                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\">
                </div>
                <div class=\"form__actions\">
                    <div class=\"checkbox\">
                        <label for=\"remember_me\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
                            <span class=\"checkmark\"></span> Remember me </label>
                    </div>
                    <a href=\"{{ path('app_forgot_password_request') }}\" class=\"links\">Forgot
                        password?</a>
                </div>
                <div class=\"form__buttons\">
                    <div class=\"button__group-btn\">
                        <button type=\"submit\" class=\"btn btn--medium btn--default\">Log in</button>
                    </div>
                </div>
            </form>
            <div class=\"additional__actions\">
                <p>Don't have an account? <a href=\"{{ path('app_register') }}\" class=\"\">Sign Up</a>
                </p>
            </div>
        </div>
    {% endblock %}

", "security/login.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_01.febr.22\\templates\\security\\login.html.twig");
    }
}
