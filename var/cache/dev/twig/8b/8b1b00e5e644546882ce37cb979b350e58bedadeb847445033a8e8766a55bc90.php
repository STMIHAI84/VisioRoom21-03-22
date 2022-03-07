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

/* dashboard/dashboard.html.twig */
class __TwigTemplate_53024e97ab78f29a3a52f2cf7cfac6e3cf607d05b5279ca8180a41eef61c8c70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("backend.html.twig", "dashboard/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_leftbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "leftbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "leftbar"));

        // line 4
        echo "<main>
    <!---->
    <div class=\"leftbar\" style=\"max-width: 25%;\">
        <div class=\"leftbar__circle\"></div>
        <div class=\"leftbar__circle\"></div>
    </div>
    <div class=\"container\" style=\"margin: 0px 60px;\">
        <div class=\"wrapper\">
            <div class=\"dashboard\">
                <div class=\"leftside\">
                    <div class=\"topbar\">
                        <a href=\"/\" class=\"router-link-active\"><img
                                    src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/logo.svg"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                    <nav class=\"nav\">
                        <ul class=\"nav__list\">
                            ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 21
            echo "                                <li>
                                    <a href=\"#\" aria-current=\"page\"
                                       class=\"router-link-exact-active router-link-active\"><img
                                                src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/squares.svg"), "html", null, true);
            echo "\" alt=\"\">
                                        Dashboard </a>
                                </li>
                            ";
        } else {
            // line 28
            echo "                                <li>
                                    <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
            echo "\" aria-current=\"page\"
                                       class=\"router-link-exact-active router-link-active\"><img
                                                src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/squares.svg"), "html", null, true);
            echo "\" alt=\"\">
                                        Dashboard </a>
                                </li>
                            ";
        }
        // line 35
        echo "                            <li>
                                <a href=\"/contacts\" class=\"\"><img
                                            src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/contacts.svg"), "html", null, true);
        echo "\"
                                            alt=\"\"> Your contacts </a>
                            </li>
                            <li>
                                <a href=\"/join/trg-ras-dds\" class=\"\"><img
                                            src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/clock.svg"), "html", null, true);
        echo "\" alt=\"\"> History
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"\"><img
                                            src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/settings.svg"), "html", null, true);
        echo "\"
                                            alt=\"\"> Settings </a>
                            </li>
                            <li>
                                <a href=\"/terms\" class=\"\"><img
                                            src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/terms.svg"), "html", null, true);
        echo "\" alt=\"\">
                                    Terms &amp; Conditions </a>
                            </li>
                            <li>
                                <a href=\"/faq\" class=\"\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/faq.svg"), "html", null, true);
        echo "\"
                                                             alt=\"\"> FAQ
                                </a>
                            </li>
                            <li>
                                <a href=\"/contact\" class=\"\"><img
                                            src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/contacts.svg"), "html", null, true);
        echo "\"
                                            alt=\"\"> Contact us </a>
                            </li>
                            <li>
                                <a href=\"/about\" class=\"\"><img
                                            src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/about.svg"), "html", null, true);
        echo "\" alt=\"\">
                                    About us </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "                <div class=\"rightside\">
                    <div class=\"page__header\">
                        <div class=\"page__user\">
                            ";
        // line 78
        if ("ROLE_USER") {
            // line 79
            echo "                            <div class=\"page__user-avatar\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/avatar.png"), "html", null, true);
            echo "\"
                                                                alt=\"\">
                                <div class=\"page__user-edit\"><img
                                            src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/change-avatar.svg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                <div class=\"page__user-status\"></div>
                                ";
        }
        // line 85
        echo "                                <div class=\"page__user-status\"></div>
                            </div>
                            <div class=\"page__user-name\">
                                <p> Hello, <span>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "html", null, true);
        echo "</span>! </p>
                            </div>
                        </div>
                        <div class=\"page__actions\">
                            <div class=\"page__actions-buttons\">
                                <div class=\"page__actions-log\">
                                    <a class=\"page__actions-button warning\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/logout.svg"), "html", null, true);
        echo "\"
                                             alt=\"app_index\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"dashboard__body\">
                        <div class=\"dashboard__body-actions\">
                            <div class=\"dashboard__body-action meeting--new\">
                                <div class=\"dashboard__body-icon\"><img
                                            src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/new-meeting.svg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"dashboard__body-card\">
                                    <p> New <br>meeting </p>
                                    <span> Creat link to your right <br>now video call </span>
                                    <div class=\"button__group-btn\">
                                        <button class=\"btn btn--medium btn--default quick__link\"
                                        ><!----> Start now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard__body-action meeting--schedule\">
                                <div class=\"dashboard__body-icon\"><img
                                            src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/schedule-meeting.svg"), "html", null, true);
        echo "\"
                                            alt=\"\"></div>
                                <div class=\"dashboard__body-card\">
                                    <p> Schedule <br>a meeting </p>
                                    <span> Schedule a meeting with <br>your teammates </span>
                                    <div class=\"button__group-btn\">
                                        <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_meeting");
        echo "\" class=\"btn btn--medium btn--default\">
                                            <!---->Create </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 138
        echo "            <div class=\"bottom\">
                <!---->
                <p class=\"copyrights\" style=\"margin: 0px;\">© 2021 VisioRoom.com</p>
            </div>
        </div>
    </div>
</main>
    <div class=\"modal__container\">
        <div class=\"overlay\"></div>
        <div class=\"modal\">
            <div class=\"modal__header\">
                <div class=\"modal__header-close\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/close.svg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"modal__body\">
                <div class=\"modal__body-description\"><img
                            src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/img/modal-generate-link.svg"), "html", null, true);
        echo "\" alt=\"\">
                    <p>Link to your meeting</p><span> Copy this link and share with those you want <br> to invite. Save it if you are planning a meeting later. </span>
                    <div class=\"form__control\"><input readonly=\"readonly\" autocomplete=\"off\" type=\"text\"
                                                      class=\"input rounded input--small link--input\"><span
                                class=\"generated--link\">
                            </span>
                        <div class=\"button__group-btn\">
                            <button class=\"btn btn--medium btn--default copy--btn\"><!----> Copy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        // line 169
        echo "
    ";
        // line 171
        echo "    ";
        // line 172
        echo "    ";
        // line 173
        echo "    ";
        // line 174
        echo "    ";
        // line 175
        echo "    ";
        // line 176
        echo "    ";
        // line 177
        echo "    ";
        // line 178
        echo "    ";
        // line 179
        echo "    ";
        // line 180
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 180,  365 => 179,  363 => 178,  361 => 177,  359 => 176,  357 => 175,  355 => 174,  353 => 173,  351 => 172,  349 => 171,  346 => 169,  329 => 154,  321 => 149,  308 => 138,  298 => 137,  277 => 126,  268 => 120,  251 => 106,  237 => 95,  233 => 94,  224 => 88,  219 => 85,  213 => 82,  206 => 79,  204 => 78,  199 => 75,  189 => 74,  172 => 67,  164 => 62,  155 => 56,  148 => 52,  140 => 47,  132 => 42,  124 => 37,  120 => 35,  113 => 31,  108 => 29,  105 => 28,  98 => 24,  93 => 21,  91 => 20,  84 => 16,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backend.html.twig' %}

{% block leftbar %}
<main>
    <!---->
    <div class=\"leftbar\" style=\"max-width: 25%;\">
        <div class=\"leftbar__circle\"></div>
        <div class=\"leftbar__circle\"></div>
    </div>
    <div class=\"container\" style=\"margin: 0px 60px;\">
        <div class=\"wrapper\">
            <div class=\"dashboard\">
                <div class=\"leftside\">
                    <div class=\"topbar\">
                        <a href=\"/\" class=\"router-link-active\"><img
                                    src=\"{{ asset('VisioStyle/assets/img/logo.svg') }}\" alt=\"\"></a>
                    </div>
                    <nav class=\"nav\">
                        <ul class=\"nav__list\">
                            {% if is_granted('ROLE_SUPER_ADMIN') %}
                                <li>
                                    <a href=\"#\" aria-current=\"page\"
                                       class=\"router-link-exact-active router-link-active\"><img
                                                src=\"{{ asset('VisioStyle/assets/icons/squares.svg') }}\" alt=\"\">
                                        Dashboard </a>
                                </li>
                            {% else %}
                                <li>
                                    <a href=\"{{ path('admin_dash') }}\" aria-current=\"page\"
                                       class=\"router-link-exact-active router-link-active\"><img
                                                src=\"{{ asset('VisioStyle/assets/icons/squares.svg') }}\" alt=\"\">
                                        Dashboard </a>
                                </li>
                            {% endif %}
                            <li>
                                <a href=\"/contacts\" class=\"\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/contacts.svg') }}\"
                                            alt=\"\"> Your contacts </a>
                            </li>
                            <li>
                                <a href=\"/join/trg-ras-dds\" class=\"\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/clock.svg') }}\" alt=\"\"> History
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/settings.svg') }}\"
                                            alt=\"\"> Settings </a>
                            </li>
                            <li>
                                <a href=\"/terms\" class=\"\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/terms.svg') }}\" alt=\"\">
                                    Terms &amp; Conditions </a>
                            </li>
                            <li>
                                <a href=\"/faq\" class=\"\"><img src=\"{{ asset('VisioStyle/assets/icons/faq.svg') }}\"
                                                             alt=\"\"> FAQ
                                </a>
                            </li>
                            <li>
                                <a href=\"/contact\" class=\"\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/contacts.svg') }}\"
                                            alt=\"\"> Contact us </a>
                            </li>
                            <li>
                                <a href=\"/about\" class=\"\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/about.svg') }}\" alt=\"\">
                                    About us </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {% endblock %}
                {% block body %}
                <div class=\"rightside\">
                    <div class=\"page__header\">
                        <div class=\"page__user\">
                            {% if 'ROLE_USER' %}
                            <div class=\"page__user-avatar\"><img src=\"{{ asset('VisioStyle/assets/img/avatar.png') }}\"
                                                                alt=\"\">
                                <div class=\"page__user-edit\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/change-avatar.svg') }}\" alt=\"\"></div>
                                <div class=\"page__user-status\"></div>
                                {% endif %}
                                <div class=\"page__user-status\"></div>
                            </div>
                            <div class=\"page__user-name\">
                                <p> Hello, <span>{{ app.user }}</span>! </p>
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
                    <div class=\"dashboard__body\">
                        <div class=\"dashboard__body-actions\">
                            <div class=\"dashboard__body-action meeting--new\">
                                <div class=\"dashboard__body-icon\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/new-meeting.svg') }}\" alt=\"\">
                                </div>
                                <div class=\"dashboard__body-card\">
                                    <p> New <br>meeting </p>
                                    <span> Creat link to your right <br>now video call </span>
                                    <div class=\"button__group-btn\">
                                        <button class=\"btn btn--medium btn--default quick__link\"
                                        ><!----> Start now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard__body-action meeting--schedule\">
                                <div class=\"dashboard__body-icon\"><img
                                            src=\"{{ asset('VisioStyle/assets/icons/schedule-meeting.svg') }}\"
                                            alt=\"\"></div>
                                <div class=\"dashboard__body-card\">
                                    <p> Schedule <br>a meeting </p>
                                    <span> Schedule a meeting with <br>your teammates </span>
                                    <div class=\"button__group-btn\">
                                        <a href=\"{{ path('schedule_meeting') }}\" class=\"btn btn--medium btn--default\">
                                            <!---->Create </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
            {% endblock %}
            {% block bottom %}
            <div class=\"bottom\">
                <!---->
                <p class=\"copyrights\" style=\"margin: 0px;\">© 2021 VisioRoom.com</p>
            </div>
        </div>
    </div>
</main>
    <div class=\"modal__container\">
        <div class=\"overlay\"></div>
        <div class=\"modal\">
            <div class=\"modal__header\">
                <div class=\"modal__header-close\"><img src=\"{{ asset('VisioStyle/assets/icons/close.svg') }}\" alt=\"\">
                </div>
            </div>
            <div class=\"modal__body\">
                <div class=\"modal__body-description\"><img
                            src=\"{{ asset('VisioStyle/assets/img/modal-generate-link.svg') }}\" alt=\"\">
                    <p>Link to your meeting</p><span> Copy this link and share with those you want <br> to invite. Save it if you are planning a meeting later. </span>
                    <div class=\"form__control\"><input readonly=\"readonly\" autocomplete=\"off\" type=\"text\"
                                                      class=\"input rounded input--small link--input\"><span
                                class=\"generated--link\">
                            </span>
                        <div class=\"button__group-btn\">
                            <button class=\"btn btn--medium btn--default copy--btn\"><!----> Copy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{# {% else %} #}

    {# <div style=\"text-align:center\"> #}
    {# <div class=\"page__text\"> #}
    {# <H1>401 page not found!!!   </H1> #}
    {# <br> #}
    {# <p> Please #}
    {# <a href=\"{{ path('app_login') }}\">Log in</a> #}
    {# </p> #}
    {# </div> #}
    {# </div>> #}
    {# {% endif %} #}

{% endblock %}", "dashboard/dashboard.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_01.febr.22\\templates\\dashboard\\dashboard.html.twig");
    }
}
