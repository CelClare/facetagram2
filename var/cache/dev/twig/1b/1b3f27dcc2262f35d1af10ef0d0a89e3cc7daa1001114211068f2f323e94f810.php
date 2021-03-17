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
class __TwigTemplate_c710c6044a0b43539c220a8720e72e7cc078f7cf3bf169a8427677fe90ab3ecc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenuPrincipal' => [$this, 'block_contenuPrincipal'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 4
        echo "    ";
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"overview-wrap\">
                <h2 class=\"title-1\">Bienvenue sur mon site</h2>
                <button  class=\"au-btn au-btn-icon au-btn--blue\">
                <i class=\"zmdi zmdi-plus\"></i><a class=\"text-dark btn\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_propos");
        echo "\">Profil Jennifer
                </a></button>
            </div>
        </div>
    </div>
<div class=\"row m-t-25\">
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c1\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-account-o\"></i>
</div>
<div class=\"text\">
<h2>10368</h2>
<span>members online</span>
</div>
</div>
<div class=\"overview-chart\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart1\" height=\"722\" style=\"display: block; width: 384px; height: 361px;\" width=\"768\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c2\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-shopping-cart\"></i>
</div>
<div class=\"text\">
<h2>388,688</h2>
<span>items solid</span>
</div>
</div>
<div class=\"overview-chart\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart2\" height=\"230\" width=\"768\" class=\"chartjs-render-monitor\" style=\"display: block; width: 384px; height: 115px;\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c3\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-calendar-note\"></i>
</div>
<div class=\"text\">
<h2>1,086</h2>
<span>this week</span>
</div>
</div>
<div class=\"overview-chart\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart3\" height=\"230\" width=\"768\" class=\"chartjs-render-monitor\" style=\"display: block; width: 384px; height: 115px;\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c4\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
 <div class=\"icon\">
<i class=\"zmdi zmdi-money\"></i>
</div>
<div class=\"text\">
<h2>\$1,060,386</h2>
<span>total earnings</span>
</div>
</div>
<div class=\"overview-chart\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart4\" height=\"640\" width=\"768\" class=\"chartjs-render-monitor\" style=\"display: block; width: 384px; height: 320px;\"></canvas>
</div>
</div>
</div>
</div>
</div>


           
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'navbar.html.twig' %}
{#JE RAPPELLE LE BODY DE MA PAGE PRINCIPALE ET JE LE MODIFIE#}
{% block contenuPrincipal %}
    {{parent()}}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"overview-wrap\">
                <h2 class=\"title-1\">Bienvenue sur mon site</h2>
                <button  class=\"au-btn au-btn-icon au-btn--blue\">
                <i class=\"zmdi zmdi-plus\"></i><a class=\"text-dark btn\" href=\"{{ path('a_propos') }}\">Profil Jennifer
                </a></button>
            </div>
        </div>
    </div>
<div class=\"row m-t-25\">
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c1\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-account-o\"></i>
</div>
<div class=\"text\">
<h2>10368</h2>
<span>members online</span>
</div>
</div>
<div class=\"overview-chart\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart1\" height=\"722\" style=\"display: block; width: 384px; height: 361px;\" width=\"768\" class=\"chartjs-render-monitor\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c2\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-shopping-cart\"></i>
</div>
<div class=\"text\">
<h2>388,688</h2>
<span>items solid</span>
</div>
</div>
<div class=\"overview-chart\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart2\" height=\"230\" width=\"768\" class=\"chartjs-render-monitor\" style=\"display: block; width: 384px; height: 115px;\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c3\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
<div class=\"icon\">
<i class=\"zmdi zmdi-calendar-note\"></i>
</div>
<div class=\"text\">
<h2>1,086</h2>
<span>this week</span>
</div>
</div>
<div class=\"overview-chart\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart3\" height=\"230\" width=\"768\" class=\"chartjs-render-monitor\" style=\"display: block; width: 384px; height: 115px;\"></canvas>
</div>
</div>
</div>
</div>
<div class=\"col-sm-6 col-lg-3\">
<div class=\"overview-item overview-item--c4\">
<div class=\"overview__inner\">
<div class=\"overview-box clearfix\">
 <div class=\"icon\">
<i class=\"zmdi zmdi-money\"></i>
</div>
<div class=\"text\">
<h2>\$1,060,386</h2>
<span>total earnings</span>
</div>
</div>
<div class=\"overview-chart\"><div class=\"chartjs-size-monitor\" style=\"position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;\"><div class=\"chartjs-size-monitor-expand\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:1000000px;height:1000000px;left:0;top:0\"></div></div><div class=\"chartjs-size-monitor-shrink\" style=\"position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;\"><div style=\"position:absolute;width:200%;height:200%;left:0; top:0\"></div></div></div>
<canvas id=\"widgetChart4\" height=\"640\" width=\"768\" class=\"chartjs-render-monitor\" style=\"display: block; width: 384px; height: 320px;\"></canvas>
</div>
</div>
</div>
</div>
</div>


           
        {% endblock %}", "home.html.twig", "/Users/bouhidjennifer/Desktop/new-symfony/facetagram1/templates/home.html.twig");
    }
}
