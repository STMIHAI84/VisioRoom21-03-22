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
class __TwigTemplate_689a8bb8b5beb3bad20362ea2b6327d9bcdec8f6086437d50d82547f8b9a8ea9 extends Template
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
        $this->parent = $this->loadTemplate("backend.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 5
    public function block_leftbar($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                <div class=\"rightside\">
                    <h2 class=\"page__title\">Welcome!</h2>
                    <p class=\"page__text\">We are glad to see you with us.</p>

                    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start', ["attr" => ["inovalidate" => "novalidate"]]);
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 31), 'errors');
        echo "<br>
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 32), "first", [], "any", false, false, false, 32), 'errors');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 33), "second", [], "any", false, false, false, 33), 'errors');
        echo "
                    <div class=\"form__actions\">
                        <div class=\"form__control\"> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "FullName", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "input rounded--top", "placeholder" => "FullName"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 36), 'widget', ["label" => false, "attr" => ["class" => "input", "placeholder" => "Email Address"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), 'widget', ["label" => false, "attr" => ["class" => "input", "placeholder" => "Password"]]);
        echo "</div>
                        <div class=\"form__control\"> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 38), "second", [], "any", false, false, false, 38), 'widget', ["label" => false, "attr" => ["class" => "input rounded--bottom", "placeholder" => "Repeat password"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
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
    }

    // line 63
    public function block_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        <div class=\"bottom\">
            <!---->
            <p class=\"copyrights\" style=\"margin: 0;\">© 2021 VisioRoom.com</p>
        </div>
    </div>
</main>

";
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
        return array (  163 => 64,  159 => 63,  148 => 56,  142 => 53,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  89 => 26,  85 => 25,  72 => 16,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\registration\\register.html.twig");
    }
}
