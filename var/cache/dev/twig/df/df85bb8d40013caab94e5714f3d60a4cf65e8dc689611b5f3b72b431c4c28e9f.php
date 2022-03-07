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

/* registration/register.html.twig */
class __TwigTemplate_7dea68a59ac2bbe1a7073608babdcbf15edf99409840b8f6e5a8c544d79aab5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'leftbar' => [$this, 'block_leftbar'],
            'body' => [$this, 'block_body'],
            'bottom' => [$this, 'block_bottom'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("backend.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_leftbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "leftbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "leftbar"));

        // line 6
        echo "<main>
    <div class=\"leftbar\" style=\"max-width: 25%;\">
        <div class=\"leftbar__circle\"></div>
        <div class=\"leftbar__circle\"></div>
    </div>
    <div class=\"container\" style=\"margin: 0 60px;\">
        <div class=\"wrapper\">
            <div class=\"signup\">
                <div class=\"leftside\">
                    <div class=\"topbar\">
                        <a href=\"/\" class=\"router-link-active\"><img src=\"";
        // line 16
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "                <div class=\"rightside\">
                    <h2 class=\"page__title\">Welcome!</h2>
                    <p class=\"page__text\">We are glad to see you with us.</p>

                    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["inovalidate" => "novalidate"]]);
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
        echo "<br>
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), "first", [], "any", false, false, false, 32), 'errors');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "password", [], "any", false, false, false, 33), "second", [], "any", false, false, false, 33), 'errors');
        echo "
                    <div class=\"form__actions\">
                        <div class=\"form__control\"> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "FullName", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "input rounded--top", "placeholder" => "FullName"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["label" => false, "attr" => ["class" => "input", "placeholder" => "Email Address"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), 'widget', ["label" => false, "attr" => ["class" => "input", "placeholder" => "Password"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "password", [], "any", false, false, false, 38), "second", [], "any", false, false, false, 38), 'widget', ["label" => false, "attr" => ["class" => "input rounded--bottom", "placeholder" => "Repeat password"]]);
        echo "</div>
                        <div class=\"form__actions\">
                            <div class=\"checkbox\"><label for=\"agree\"><input type=\"checkbox\" id=\"agree\">
                                    <span class=\"checkmark\"></span> I agree all statement in
                                    <a href=\"#\" class=\"\">Terms &amp; Conditions</a></label>
                            </div>
                            <div class=\"checkbox\"><label for=\"remember\"><input type=\"checkbox\" id=\"remember\">
                                    <span class=\"checkmark\"></span> Remember me </label>
                            </div>
                        </div>
                        <div class=\"form__buttons\">
                            <div class=\"button__group-btn\">
                                <button type=\"submit\" class=\"btn btn--medium btn--default\">Sign Up</button>
                            </div>
                        </div>
                        ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
                        <div class=\"additional__actions\">
                            <br>
                            <p> Already have an account? <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"\">Log In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 64
        echo "        <div class=\"bottom\">
            <!---->
            <p class=\"copyrights\" style=\"margin: 0;\">© 2021 VisioRoom.com</p>
        </div>
    </div>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 64,  207 => 63,  190 => 56,  184 => 53,  166 => 38,  162 => 37,  158 => 36,  154 => 35,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  131 => 26,  121 => 25,  102 => 16,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend.html.twig' %}

{% block title %}Register{% endblock %}

{% block leftbar %}
<main>
    <div class=\"leftbar\" style=\"max-width: 25%;\">
        <div class=\"leftbar__circle\"></div>
        <div class=\"leftbar__circle\"></div>
    </div>
    <div class=\"container\" style=\"margin: 0 60px;\">
        <div class=\"wrapper\">
            <div class=\"signup\">
                <div class=\"leftside\">
                    <div class=\"topbar\">
                        <a href=\"/\" class=\"router-link-active\"><img src=\"{{ asset('VisioStyle/assets/img/logo.svg') }}\"
                                                                    alt=\"\"></a>
                    </div>
                    <div class=\"leftside__text\">
                        <h1> Welcome to <span>VisioRoom!</span></h1>
                        <p class=\"page__description\"> The service of free <br>personal and group calls. </p>
                    </div>
                </div>
                {% endblock %}
                {% block body %}
                <div class=\"rightside\">
                    <h2 class=\"page__title\">Welcome!</h2>
                    <p class=\"page__text\">We are glad to see you with us.</p>

                    {{ form_start(registrationForm, {'attr': {'inovalidate': 'novalidate'}}) }}
                    {{ form_errors(registrationForm.email) }}<br>
                    {{ form_errors(registrationForm.password.first) }}
                    {{ form_errors(registrationForm.password.second) }}
                    <div class=\"form__actions\">
                        <div class=\"form__control\"> {{ form_widget(registrationForm.FullName,{'attr': {'class': 'input rounded--top','placeholder':'FullName'}}) }}</div>
                        <div class=\"form__control\"> {{ form_widget(registrationForm.email,{'label':false,'attr': {'class': 'input','placeholder':'Email Address'}}) }}</div>
                        <div class=\"form__control\"> {{ form_widget(registrationForm.password.first,{'label':false,'attr': {'class': 'input','placeholder':'Password'}}) }}</div>
                        <div class=\"form__control\"> {{ form_widget(registrationForm.password.second,{'label':false,'attr': {'class': 'input rounded--bottom','placeholder':'Repeat password'}}) }}</div>
                        <div class=\"form__actions\">
                            <div class=\"checkbox\"><label for=\"agree\"><input type=\"checkbox\" id=\"agree\">
                                    <span class=\"checkmark\"></span> I agree all statement in
                                    <a href=\"#\" class=\"\">Terms &amp; Conditions</a></label>
                            </div>
                            <div class=\"checkbox\"><label for=\"remember\"><input type=\"checkbox\" id=\"remember\">
                                    <span class=\"checkmark\"></span> Remember me </label>
                            </div>
                        </div>
                        <div class=\"form__buttons\">
                            <div class=\"button__group-btn\">
                                <button type=\"submit\" class=\"btn btn--medium btn--default\">Sign Up</button>
                            </div>
                        </div>
                        {{ form_end(registrationForm) }}
                        <div class=\"additional__actions\">
                            <br>
                            <p> Already have an account? <a href=\"{{ path('app_login') }}\" class=\"\">Log In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% block bottom %}
        <div class=\"bottom\">
            <!---->
            <p class=\"copyrights\" style=\"margin: 0;\">© 2021 VisioRoom.com</p>
        </div>
    </div>
</main>

{% endblock %}
", "registration/register.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_01.febr.22\\templates\\registration\\register.html.twig");
    }
}
