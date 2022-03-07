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
class __TwigTemplate_5b25a65593663da9dd234f57fb5e84c9d48d4fea56d83d64ada7c2c50788c3a4 extends Template
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
        $this->parent = $this->loadTemplate("backend.html.twig", "dashboard/schedule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["inovalidate" => "novalidate"]]);
        echo "
            <form action=\"\" class=\"schedule--form\">

                <div class=\"schedule__form-body\">
                    <div class=\"schedule__form-data\">
                        <div class=\"form__control\"> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 33), 'widget', ["label" => false, "attr" => ["class" => "input rounded--top form-control is-invalid", "placeholder" => "Meeting Name"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 34), 'widget', ["label" => false, "attr" => ["class" => "input", "placeholder" => "Description of the meeting"]]);
        echo "</div>

                        <!----></div>
                    <div class=\"schedule__form-time\">
                        <div class=\"form__control\"> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "programedFor", [], "any", false, false, false, 38), "time", [], "any", false, false, false, 38), 'widget', ["label" => false, "value" => false, "id" => "timepicker-1", "attr" => ["class" => "input rounded--top", "type" => "time", "autocomplete" => "off", "placeholder" => "--:--"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "programedFor", [], "any", false, false, false, 39), "date", [], "any", false, false, false, 39), 'widget', ["label" => false, "value" => false, "id" => "datepicker-13", "attr" => ["autocomplete" => "off", "type" => "text", "class" => "input rounded--bottom", "placeholder" => "dd/mm/yyyy"]]);
        echo "</div>
                    </div>
                </div>
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    </div>
";
    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  149 => 65,  145 => 64,  137 => 60,  116 => 42,  110 => 39,  106 => 38,  99 => 34,  95 => 33,  87 => 28,  76 => 20,  72 => 19,  60 => 10,  56 => 9,  51 => 6,  47 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/schedule.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\dashboard\\schedule.html.twig");
    }
}
