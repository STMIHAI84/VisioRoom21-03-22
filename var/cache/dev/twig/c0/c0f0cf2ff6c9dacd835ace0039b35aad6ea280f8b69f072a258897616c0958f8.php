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
class __TwigTemplate_50d48b8c94c981c8b2640ebd9620a88c27d51b0fa68055f9c4d3bad688f705ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/userEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/userEdit.html.twig"));

        $this->parent = $this->loadTemplate("backend.html.twig", "dashboard/userEdit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["inovalidate" => "novalidate"]]);
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'errors');
        echo "<br>
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 29, $this->source); })()), "imageFile", [], "any", false, false, false, 29), 'errors');
        echo "
                <div class=\"container-body col-md-6\">
                    <div class=\"form__control\"> ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 31, $this->source); })()), "fullName", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "input rounded--top form-control is-invalid", "placeholder" => "FullName"]]);
        echo "</div>
                    <div class=\"form__control\"> ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget', ["label" => false, "attr" => ["class" => "input", "placeholder" => "Email Address"]]);
        echo "</div>
                    <div class=\"form__control\"> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 33, $this->source); })()), "imageFile", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "input"]]);
        echo "</div>
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 34, $this->source); })()), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  167 => 48,  157 => 47,  143 => 43,  131 => 34,  127 => 33,  123 => 32,  119 => 31,  114 => 29,  110 => 28,  106 => 27,  94 => 18,  90 => 17,  78 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend.html.twig' %}

{% block body %}
    <div class=\"rightside\">
        <div class=\"page__header\">
            <div class=\"page__user\"><!----><!---->
                <div class=\"return\"><a href=\"{{ path('admin_dash') }}\" class=\"\"><img
                                src=\"{{ asset('VisioStyle/assets/icons/arrow-back.svg') }}\"
                                alt=\"\"></a>
                    <p>Profile update!</p>
                </div>
            </div>
            <div class=\"page__actions\">
                <div class=\"page__actions-buttons\">

                    <div class=\"page__actions-log\">
                        <a class=\"page__actions-button warning\" href=\"{{ path('app_logout') }}\">
                            <img src=\"{{ asset('VisioStyle/assets/icons/logout.svg') }}\"
                                 alt=\"app_index\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <form class=\"schedule--form\">
            <div class=\"schedule__form\">
                {{ form_start(formUser, {'attr': {'inovalidate': 'novalidate'}}) }}
                {{ form_errors(formUser.email) }}<br>
                {{ form_errors(formUser.imageFile) }}
                <div class=\"container-body col-md-6\">
                    <div class=\"form__control\"> {{ form_widget(formUser.fullName,{'attr': {'class': 'input rounded--top form-control is-invalid','placeholder':'FullName'}}) }}</div>
                    <div class=\"form__control\"> {{ form_widget(formUser.email,{'label':false,'attr': {'class': 'input','placeholder':'Email Address'}}) }}</div>
                    <div class=\"form__control\"> {{ form_widget(formUser.imageFile,{'attr': {'class': 'input'}}) }}</div>
                    {{ form_widget(formUser) }}
                    <br>
                    <div class=\"form__buttons\">
                        <div class=\"button__group-btn\">
                            <button type=\"submit\" class=\"btn btn--medium btn--default\"><!----> Update</button>
                        </div>
                    </div>
                </div>
            </div>
            {{ form_end(formUser) }}
        </form>
    </div>
{% endblock %}
    {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                \$(\".rooms\").select2({
                    placeholder: \"Select room\",
                    class: \"form__control\"
                });
            });
        </script>
    {% endblock %}", "dashboard/userEdit.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_01.febr.22\\templates\\dashboard\\userEdit.html.twig");
    }
}
