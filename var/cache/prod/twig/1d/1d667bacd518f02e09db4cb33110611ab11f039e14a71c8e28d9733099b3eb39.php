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
class __TwigTemplate_a7674a6bf03e06b95a5f45ec3ff7c2a469f4826e7631ed6d060822af2b37cbe2 extends Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1)) {
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
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/close.svg"), "html", null, true);
            echo "\" alt=\"\"></div>
                    <div class=\"discussion__chat-notify \"><img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/info.svg"), "html", null, true);
            echo "\"
                                                               alt=\"\">
                        <p> When the video call ends, <br>the messages will be deleted! </p><img
                                src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/close.svg"), "html", null, true);
            echo "\" alt=\"\" class=\"notify-close\">
                    </div>
                    <div class=\"discussion__chat-messages\"></div>
                    <div class=\"discussion__chat-input\">
                        <div class=\"form__control\"><input type=\"text\" placeholder=\"Type a message...\"
                                                          class=\"input input--small rounded\">
                            <button><img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/send.svg"), "html", null, true);
            echo "\" alt=\"\"></button>
                        </div>
                    </div>
                </div>
                <div class=\"discussion__chat-actions\">
                    <div class=\"discussion__chat-time\"><span></span>
                        <p>00 : 00</p>
                    </div>
                    <div class=\"discussion__chat-btns\">
                        <div class=\"button__group-btn\">
                            <button class=\"btn btn--default\"><img
                                        src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/expand.svg"), "html", null, true);
            echo "\" alt=\"\"></button>
                        </div>
                        <div class=\"button__group-btn\">
                            <button class=\"btn btn--default\"><img
                                        src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/microphone.svg"), "html", null, true);
            echo "\" alt=\"\"></button>
                        </div>
                        <div class=\"button__group-btn\"><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dash");
            echo "\">
                                <button class=\"btn btn--default end\"><img
                                            src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/endcall.svg"), "html", null, true);
            echo "\" alt=\"\">
                            </a></button></div>
                        <div class=\"button__group-btn\">
                            <button class=\"btn btn--default\"><img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/video.svg"), "html", null, true);
            echo "\"
                                                                  alt=\"\"></button>
                        </div>
                        <div class=\"button__group-btn\">
                            <button class=\"btn btn--default\"><img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/sound.svg"), "html", null, true);
            echo "\"
                                                                  alt=\"\"></button>
                        </div>
                    </div>
                    <div class=\"discussion__chat-show\"><img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/assets/icons/chat-btn.svg"), "html", null, true);
            echo "\"
                                                            alt=\"\"></div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/js/main.js"), "html", null, true);
            echo "\"></script>
    <script src=\"https://cdn.socket.io/4.4.1/socket.io.min.js\"
            integrity=\"sha384-fKnu0iswBIqkjxrhQCTZ7qlLHOFEgNkRmK2vaO/LbTZSXdJfAu6ewRBdwHPhBo/H\"
            crossorigin=\"anonymous\"></script>
    <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("VisioStyle/video.js"), "html", null, true);
            echo "\"></script>
    <script>
        let localDisplayName = '";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 84), "html", null, true);
            echo "'
        localStorage.setItem('user', localDisplayName)
    </script>
    </body>
    </html>
";
        } else {
            // line 90
            echo "    ";
            $this->loadTemplate("/bundles/TwigBundle/Exception/error404.html.twig", "video/video.html.twig", 90)->display($context);
            // line 91
            echo "    ";
        }
        // line 93
        echo "
";
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
        return array (  183 => 93,  180 => 91,  177 => 90,  168 => 84,  163 => 82,  156 => 78,  147 => 72,  140 => 68,  133 => 64,  127 => 61,  122 => 59,  117 => 57,  110 => 53,  96 => 42,  87 => 36,  81 => 33,  77 => 32,  53 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "video/video.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_02.01.22\\templates\\video\\video.html.twig");
    }
}
