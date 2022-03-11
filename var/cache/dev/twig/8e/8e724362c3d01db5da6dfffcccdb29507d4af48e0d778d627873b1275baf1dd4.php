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

/* video/video.html.twig */
class __TwigTemplate_9052162fbc4b427a33f893c03f437ef727da2f4c9c3284d58e6aa45bcf73edd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/video.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/video.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/css/MeetingPageStyle.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/css/style.css"), "html", null, true);
            echo "\">
        <style>
            .visible {
                display: block;
                background: red;
            }

            .hidden {
                display: none;
            }

            .changeFull {
                width: 100% !important;
                height: 100% !important;

            }
        </style>

    </head>

    <body>
    <div class=\"container\" style=\"margin: 0px;\">

        <div class=\"wrapper\">
            <div class=\"discussion\">
                <div class=\"discussion__grid\">
                    <div id=\"videos\" class=\"videos\">
                        <div id=\"localVideoContainer\" class=\"videoContainer\">
                            <video id=\"localVideo\" autoplay muted></video>
                        </div>

                        <!-- Remote videos get appended here -->

                    </div>
                </div>
                <div class=\"discussion__chat\">
                    <div class=\"discussion__chat-header\">

                        <p>Group chat</p><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/close.svg"), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                    <div class=\"discussion__chat-notify \"><img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/info.svg"), "html", null, true);
            echo "\"
                                                               alt=\"\">
                        <p> When the video call ends, <br>the messages will be deleted! </p><img
                                src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/close.svg"), "html", null, true);
            echo "\" alt=\"\" class=\"notify-close\">
                    </div>

                    <div class=\"messages\"></div>
                    <div class=\"discussion__chat-input\">
                        <div class=\"form__control\"><input id=\"input\" type=\"text\" placeholder=\"Type a message...\"
                                                          class=\"input input--small rounded\">
                            <button id=\"send\"><img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/send.svg"), "html", null, true);
            echo "\" alt=\"\">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"discussion__chat-actions\">
                <div class=\"discussion__chat-time\"><span></span>
                    <p>00 : 00</p>
                </div>
                <div class=\"discussion__chat-btns\">
                    <div class=\"button__group-btn\">
                        <button class=\"btn btn--default toggleFullscreen\"><img
                                    src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/expand.svg"), "html", null, true);
            echo "\" alt=\"\"></button>
                    </div>
                    <div class=\"button__group-btn\">
                        <button class=\"btn btn--default disable--audio\"><img
                                    src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/microphone.svg"), "html", null, true);
            echo "\" alt=\"\"></button>
                    </div>
                    <div class=\"button__group-btn\"><a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
            echo "\">
                            <button class=\"btn btn--default end stopVideo\"><img
                                        src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/endcall.svg"), "html", null, true);
            echo "\" alt=\"\">
                            </button>

                        </a>
                    </div>
                    <div class=\"button__group-btn\">
                        <button class=\"btn btn--default disable--video\"><img
                                    src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/video.svg"), "html", null, true);
            echo "\"
                                    alt=\"\"></button>
                        <button class=\"btn btn--default enable--video hidden\"><img
                                    src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/video.svg"), "html", null, true);
            echo "\"
                                    alt=\"\"></button>
                    </div>
                    <div class=\"button__group-btn\">
                        <button class=\"btn btn--default mute--button\"><img
                                    src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/sound.svg"), "html", null, true);
            echo "\"
                                    alt=\"\"></button>
                    </div>
                </div>
                <div class=\"discussion__chat-show\"><img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/chat-btn.svg"), "html", null, true);
            echo "\"
                                                        alt=\"\"></div>
            </div>
        </div>

        <script src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/js/main.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://cdn.socket.io/4.4.1/socket.io.min.js\"
                integrity=\"sha384-fKnu0iswBIqkjxrhQCTZ7qlLHOFEgNkRmK2vaO/LbTZSXdJfAu6ewRBdwHPhBo/H\"
                crossorigin=\"anonymous\"></script>
        <script src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/video.js"), "html", null, true);
            echo "\"></script>
        <script>
            let localDisplayName = '";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "html", null, true);
            echo "'
            localStorage.setItem('user', localDisplayName)
        </script>
    </div>
    </body>
    </html>
";
        } else {
            // line 119
            echo "    ";
            $this->loadTemplate("/bundles/TwigBundle/Exception/error403.html.twig", "video/video.html.twig", 119)->display($context);
        }
        // line 121
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "video/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 121,  215 => 119,  205 => 112,  200 => 110,  193 => 106,  185 => 101,  178 => 97,  170 => 92,  164 => 89,  154 => 82,  149 => 80,  144 => 78,  137 => 74,  121 => 61,  111 => 54,  105 => 51,  100 => 49,  59 => 11,  55 => 10,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user %}
    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        <link rel=\"stylesheet\" href=\"{{ asset('VisioStyle/css/MeetingPageStyle.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('VisioStyle/css/style.css') }}\">
        <style>
            .visible {
                display: block;
                background: red;
            }

            .hidden {
                display: none;
            }

            .changeFull {
                width: 100% !important;
                height: 100% !important;

            }
        </style>

    </head>

    <body>
    <div class=\"container\" style=\"margin: 0px;\">

        <div class=\"wrapper\">
            <div class=\"discussion\">
                <div class=\"discussion__grid\">
                    <div id=\"videos\" class=\"videos\">
                        <div id=\"localVideoContainer\" class=\"videoContainer\">
                            <video id=\"localVideo\" autoplay muted></video>
                        </div>

                        <!-- Remote videos get appended here -->

                    </div>
                </div>
                <div class=\"discussion__chat\">
                    <div class=\"discussion__chat-header\">

                        <p>Group chat</p><img src=\"{{ asset('VisioStyle/assets/icons/close.svg') }}\" alt=\"\">
                    </div>
                    <div class=\"discussion__chat-notify \"><img src=\"{{ asset('VisioStyle/assets/icons/info.svg') }}\"
                                                               alt=\"\">
                        <p> When the video call ends, <br>the messages will be deleted! </p><img
                                src=\"{{ asset('VisioStyle/assets/icons/close.svg') }}\" alt=\"\" class=\"notify-close\">
                    </div>

                    <div class=\"messages\"></div>
                    <div class=\"discussion__chat-input\">
                        <div class=\"form__control\"><input id=\"input\" type=\"text\" placeholder=\"Type a message...\"
                                                          class=\"input input--small rounded\">
                            <button id=\"send\"><img src=\"{{ asset('VisioStyle/assets/icons/send.svg') }}\" alt=\"\">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"discussion__chat-actions\">
                <div class=\"discussion__chat-time\"><span></span>
                    <p>00 : 00</p>
                </div>
                <div class=\"discussion__chat-btns\">
                    <div class=\"button__group-btn\">
                        <button class=\"btn btn--default toggleFullscreen\"><img
                                    src=\"{{ asset('VisioStyle/assets/icons/expand.svg') }}\" alt=\"\"></button>
                    </div>
                    <div class=\"button__group-btn\">
                        <button class=\"btn btn--default disable--audio\"><img
                                    src=\"{{ asset('VisioStyle/assets/icons/microphone.svg') }}\" alt=\"\"></button>
                    </div>
                    <div class=\"button__group-btn\"><a href=\"{{ path('admin_dash') }}\">
                            <button class=\"btn btn--default end stopVideo\"><img
                                        src=\"{{ asset('VisioStyle/assets/icons/endcall.svg') }}\" alt=\"\">
                            </button>

                        </a>
                    </div>
                    <div class=\"button__group-btn\">
                        <button class=\"btn btn--default disable--video\"><img
                                    src=\"{{ asset('VisioStyle/assets/icons/video.svg') }}\"
                                    alt=\"\"></button>
                        <button class=\"btn btn--default enable--video hidden\"><img
                                    src=\"{{ asset('VisioStyle/assets/icons/video.svg') }}\"
                                    alt=\"\"></button>
                    </div>
                    <div class=\"button__group-btn\">
                        <button class=\"btn btn--default mute--button\"><img
                                    src=\"{{ asset('VisioStyle/assets/icons/sound.svg') }}\"
                                    alt=\"\"></button>
                    </div>
                </div>
                <div class=\"discussion__chat-show\"><img src=\"{{ asset('VisioStyle/assets/icons/chat-btn.svg') }}\"
                                                        alt=\"\"></div>
            </div>
        </div>

        <script src=\"{{ asset('VisioStyle/js/main.js') }}\"></script>
        <script src=\"https://cdn.socket.io/4.4.1/socket.io.min.js\"
                integrity=\"sha384-fKnu0iswBIqkjxrhQCTZ7qlLHOFEgNkRmK2vaO/LbTZSXdJfAu6ewRBdwHPhBo/H\"
                crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('VisioStyle/video.js') }}\"></script>
        <script>
            let localDisplayName = '{{ app.user }}'
            localStorage.setItem('user', localDisplayName)
        </script>
    </div>
    </body>
    </html>
{% else %}
    {% include '/bundles/TwigBundle/Exception/error403.html.twig' %}
{% endif %}

", "video/video.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_01.febr.22\\templates\\video\\video.html.twig");
    }
}
