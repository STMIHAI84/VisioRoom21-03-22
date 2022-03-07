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

/* home.html.twig */
class __TwigTemplate_9c373233f873794aa57577f7086cdcb045b22f8bd08fc104ef9e4ec7b10c3648 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"VisioStyle/css/style.css\">
</head>

<body>
<main>
    <div class=\"leftbar\" style=\"max-width: 50%;\">
        <div class=\"leftbar__circle\"></div>
        <div class=\"leftbar__circle\"></div>
    </div>
    <div class=\"container\" style=\"margin: 0px 60px;\">
        <div class=\"wrapper\">
            <div class=\"home\">
                <div class=\"leftside\">
                    <div class=\"topbar\">
                        <a href=\"/\" aria-current=\"page\"><img src=\"VisioStyle/assets/img/logo.svg\" alt=\"\"></a>
                    </div>
                    <div class=\"leftside__text\">
                        <h1> THE MOST CONVENIENT AND <span>SIMPLE VIDEO CALL</span> SERVICE </h1>
                    </div>
                    <div class=\"chips\">
                        <ul class=\"chips__list\">
                            <li class=\"chips__list-item\">Your personal room</li>
                            <li class=\"chips__list-item\">Schedule</li>
                            <li class=\"chips__list-item\">Room with your team</li>
                            <li class=\"chips__list-item\">Add calendar</li>
                            <li class=\"chips__list-item\">Chat</li>
                            <li class=\"chips__list-item\">...</li>
                        </ul>
                    </div>
                </div>
                <div class=\"rightside\">
                    <div class=\"button__group\">
                        <div class=\"button__group-btn\">
                            <a href=\"/register\" class=\"btn btn--default btn--large\"><img
                                        src=\"VisioStyle/assets/icons/signup.svg\" alt=\"\"> Sign Up </a>
                        </div>
                        <div class=\"button__group-btn\">
                            <a href=\"/login\" class=\"btn btn--bordered btn--large\"><img
                                        src=\"VisioStyle/assets/icons/login.svg\" alt=\"\"> Log In </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"bottom\">
                <ul>
                    <li><a href=\"#\" class=\"\">About Us</a></li>
                    <li><a href=\"#\" class=\"\">Terms &amp; Conditions</a></li>
                    <li><a href=\"#\" class=\"\">FAQ</a></li>
                    <li><a href=\"\" class=\"\">Contact Us</a></li>
                </ul>
                <p class=\"copyrights\" style=\"margin: 0px;\">© 2021 VisioRoom.com</p>
            </div>
        </div>
    </div>

</main>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"VisioStyle/css/style.css\">
</head>

<body>
<main>
    <div class=\"leftbar\" style=\"max-width: 50%;\">
        <div class=\"leftbar__circle\"></div>
        <div class=\"leftbar__circle\"></div>
    </div>
    <div class=\"container\" style=\"margin: 0px 60px;\">
        <div class=\"wrapper\">
            <div class=\"home\">
                <div class=\"leftside\">
                    <div class=\"topbar\">
                        <a href=\"/\" aria-current=\"page\"><img src=\"VisioStyle/assets/img/logo.svg\" alt=\"\"></a>
                    </div>
                    <div class=\"leftside__text\">
                        <h1> THE MOST CONVENIENT AND <span>SIMPLE VIDEO CALL</span> SERVICE </h1>
                    </div>
                    <div class=\"chips\">
                        <ul class=\"chips__list\">
                            <li class=\"chips__list-item\">Your personal room</li>
                            <li class=\"chips__list-item\">Schedule</li>
                            <li class=\"chips__list-item\">Room with your team</li>
                            <li class=\"chips__list-item\">Add calendar</li>
                            <li class=\"chips__list-item\">Chat</li>
                            <li class=\"chips__list-item\">...</li>
                        </ul>
                    </div>
                </div>
                <div class=\"rightside\">
                    <div class=\"button__group\">
                        <div class=\"button__group-btn\">
                            <a href=\"/register\" class=\"btn btn--default btn--large\"><img
                                        src=\"VisioStyle/assets/icons/signup.svg\" alt=\"\"> Sign Up </a>
                        </div>
                        <div class=\"button__group-btn\">
                            <a href=\"/login\" class=\"btn btn--bordered btn--large\"><img
                                        src=\"VisioStyle/assets/icons/login.svg\" alt=\"\"> Log In </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"bottom\">
                <ul>
                    <li><a href=\"#\" class=\"\">About Us</a></li>
                    <li><a href=\"#\" class=\"\">Terms &amp; Conditions</a></li>
                    <li><a href=\"#\" class=\"\">FAQ</a></li>
                    <li><a href=\"\" class=\"\">Contact Us</a></li>
                </ul>
                <p class=\"copyrights\" style=\"margin: 0px;\">© 2021 VisioRoom.com</p>
            </div>
        </div>
    </div>

</main>
</body>

</html>", "home.html.twig", "C:\\Users\\UPC Media\\Desktop\\symfony\\VisioRoom_Admin_01.febr.22\\templates\\home.html.twig");
    }
}
