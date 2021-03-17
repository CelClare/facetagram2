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

/* about.html.twig */
class __TwigTemplate_20d6ab251d9470941bec13cb7f737142b2cbc778d16cb073902655a79f850c00 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "about.html.twig", 1);
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
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <img src=\"https://media.istockphoto.com/photos/lady-with-kayak-picture-id516449022?b=1&k=6&m=516449022&s=170667a&w=0&h=Ds6gy4B06bGAvurG-Xj0fa96FxiRNnbf8xhfrjLef2k=\" class=\"card-img-top\" alt=\"img\">
            </div>
            <div class=\"col-6\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content. Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart. Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. </p>
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
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'navbar.html.twig' %}

{% block contenuPrincipal %}
{{parent()}}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                <img src=\"https://media.istockphoto.com/photos/lady-with-kayak-picture-id516449022?b=1&k=6&m=516449022&s=170667a&w=0&h=Ds6gy4B06bGAvurG-Xj0fa96FxiRNnbf8xhfrjLef2k=\" class=\"card-img-top\" alt=\"img\">
            </div>
            <div class=\"col-6\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content. Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart. Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. </p>
                </div>
            </div>
        </div>
    </div>
    {% endblock %}", "about.html.twig", "/Users/bouhidjennifer/Desktop/new-symfony/facetagram1/templates/about.html.twig");
    }
}
