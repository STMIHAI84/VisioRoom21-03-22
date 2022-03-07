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

/* dashboard/schedule.html.twig */
class __TwigTemplate_c11fd5109df924a9374ba47dea05f25d7ce43e79dd6ea42c232116f07702290d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/schedule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/schedule.html.twig"));

        $this->parent = $this->loadTemplate("backend.html.twig", "dashboard/schedule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "    <div class=\"rightside\">
        <div class=\"page__header\">
            <div class=\"page__user\"><!----><!---->
                <div class=\"return\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
        echo "\" class=\"\"><img
                                src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/arrow-back.svg"), "html", null, true);
        echo "\"
                                alt=\"\"></a>
                    <p>Schedule a meeting</p>
                </div>
            </div>
            <div class=\"page__actions\">
                <div class=\"page__actions-buttons\">

                    <div class=\"page__actions-log\">
                        <a class=\"page__actions-button warning\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                            <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/logout.svg"), "html", null, true);
        echo "\"
                                 alt=\"app_index\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"schedule__form\">
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["inovalidate" => "novalidate"]]);
        echo "
            <form action=\"\" class=\"schedule--form\">

                <div class=\"schedule__form-body\">
                    <div class=\"schedule__form-data\">
                        <div class=\"form__control\"> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), 'widget', ["label" => false, "attr" => ["class" => "input rounded--top form-control is-invalid", "placeholder" => "Meeting Name"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'widget', ["label" => false, "attr" => ["class" => "input", "placeholder" => "Description of the meeting"]]);
        echo "</div>

                        <!----></div>
                    <div class=\"schedule__form-time\">
                        <div class=\"form__control\"> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "programedFor", [], "any", false, false, false, 38), "time", [], "any", false, false, false, 38), 'widget', ["label" => false, "value" => false, "id" => "timepicker-1", "attr" => ["class" => "input rounded--top", "type" => "time", "autocomplete" => "off", "placeholder" => "--:--"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "programedFor", [], "any", false, false, false, 39), "date", [], "any", false, false, false, 39), 'widget', ["label" => false, "value" => false, "id" => "datepicker-13", "attr" => ["autocomplete" => "off", "type" => "text", "class" => "input rounded--bottom", "placeholder" => "dd/mm/yyyy"]]);
        echo "</div>
                    </div>
                </div>
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'widget');
        echo "
                <div class=\"form__actions\">
                    <div class=\"checkbox\">
                        <label for=\"agree\">
                            <input type=\"checkbox\" id=\"agree\">
                            <span class=\"checkmark\">
                                </span> I agree all statement in <a href=\"#\" class=\"\">&nbsp;Terms
                                &amp; Conditions</a></label>
                    </div>
                </div>
                <div class=\"form__buttons\">
                    <div class=\"button__group-btn\">
                        <button type=\"submit\" class=\"btn btn--medium btn--default\"><!----> Create</button>
                    </div>
                </div>
            </form>
        </div>

        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    <script src=\"//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        \$(function () {
            \$(\"#datepicker-13\").datepicker();
            \$(\"#timepicker-1\").timepicker({timeFormat: 'HH:mm'});

        });

        type = \"text/javascript\" >
            \$(document).ready(function () {
                \$(\".users\").select2({
                    placeholder: \"Select participant\"
                });
            });

        \$(document).ready(function () {
            \$('input.timepicker').timepicker({});
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 65,  169 => 64,  155 => 60,  134 => 42,  128 => 39,  124 => 38,  117 => 34,  113 => 33,  105 => 28,  94 => 20,  90 => 19,  78 => 10,  74 => 9,  69 => 6,  59 => 5,  36 => 1,);
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
                    <p>Schedule a meeting</p>
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
        <div class=\"schedule__form\">
            {{ form_start(form, {'attr': {'inovalidate': 'novalidate'}}) }}
            <form action=\"\" class=\"schedule--form\">

                <div class=\"schedule__form-body\">
                    <div class=\"schedule__form-data\">
                        <div class=\"form__control\"> {{ form_widget(form.name,{'label':false,'attr': {'class': 'input rounded--top form-control is-invalid','placeholder':'Meeting Name'}}) }}</div>
                        <div class=\"form__control\"> {{ form_widget(form.description,{'label':false,'attr': {'class': 'input','placeholder':'Description of the meeting'}}) }}</div>

                        <!----></div>
                    <div class=\"schedule__form-time\">
                        <div class=\"form__control\"> {{ form_widget(form.programedFor.time,{'label':false,'value':false,'id':'timepicker-1','attr': {'class': 'input rounded--top','type':'time','autocomplete':'off','placeholder':'--:--'} }) }}</div>
                        <div class=\"form__control\"> {{ form_widget(form.programedFor.date,{'label':false,'value':false,'id':'datepicker-13','attr': {'autocomplete':'off','type':'text','class': 'input rounded--bottom','placeholder':'dd/mm/yyyy'} }) }}</div>
                    </div>
                </div>
                {{ form_widget(form) }}
                <div class=\"form__actions\">
                    <div class=\"checkbox\">
                        <label for=\"agree\">
                            <input type=\"checkbox\" id=\"agree\">
                            <span class=\"checkmark\">
                                </span> I agree all statement in <a href=\"#\" class=\"\">&nbsp;Terms
                                &amp; Conditions</a></label>
                    </div>
                </div>
                <div class=\"form__buttons\">
                    <div class=\"button__group-btn\">
                        <button type=\"submit\" class=\"btn btn--medium btn--default\"><!----> Create</button>
                    </div>
                </div>
            </form>
        </div>

        {{ form_end(form) }}
    </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        \$(function () {
            \$(\"#datepicker-13\").datepicker();
            \$(\"#timepicker-1\").timepicker({timeFormat: 'HH:mm'});

        });

        type = \"text/javascript\" >
            \$(document).ready(function () {
                \$(\".users\").select2({
                    placeholder: \"Select participant\"
                });
            });

        \$(document).ready(function () {
            \$('input.timepicker').timepicker({});
        });
    </script>

{% endblock %}", "dashboard/schedule.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_01.febr.22\\templates\\dashboard\\schedule.html.twig");
    }
}
