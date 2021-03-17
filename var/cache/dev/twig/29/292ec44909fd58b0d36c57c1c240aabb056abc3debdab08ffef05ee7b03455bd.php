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

/* product.html.twig */
class __TwigTemplate_eee2e4da4aa34e65bebc1b7ceecb4f1f5549723c06bb0eb12bbb58b9034db9e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "product.html.twig", 1);
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

<div class=\"container\">
    <button  class=\"au-btn au-btn-icon au-btn--blue\">
                <i class=\"zmdi zmdi-plus\"></i><a class=\"text-dark btn\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newProduct");
        echo "\">Ajouter un produit
                </a>
    </button>
    <button  class=\"au-btn au-btn-icon au-btn--blue\">
                <i class=\"zmdi zmdi-plus\"></i><a class=\"text-dark btn\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newClient");
        echo "\">Ajouter un client
                </a>
    </button>


    <div class=\" text-center my-5\">
        <h1>Catégorie Of The Months</h1>
        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velits</p>
    </div>

    <div class=\"row mt-5\">
        <div class=\"col-4 text-center\">
            <img src=\"https://images.unsplash.com/photo-1583312572805-32ece488eb6e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80\" class=\"rounded-circle\">
            <p>Shoes</p>
            <button type=\"button\" class=\"btn btn-success\">Shop</button>
        </div>
                <div class=\"col-4 text-center\">
            <img src=\"https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8c2hvZXN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60\" class=\"rounded-circle\">
            <p>Shoes</p>
            <button type=\"button\" class=\"btn btn-success\">Shop</button>
        </div>
                <div class=\"col-4 text-center\">
            <img src=\"https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80\" class=\"rounded-circle\">
            <p>Shoes</p>
            <button type=\"button\" class=\"btn btn-success mb-5\">Shop</button>
        
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  76 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'navbar.html.twig' %}

{% block contenuPrincipal %}
    {{parent()}}

<div class=\"container\">
    <button  class=\"au-btn au-btn-icon au-btn--blue\">
                <i class=\"zmdi zmdi-plus\"></i><a class=\"text-dark btn\" href=\"{{ path('newProduct') }}\">Ajouter un produit
                </a>
    </button>
    <button  class=\"au-btn au-btn-icon au-btn--blue\">
                <i class=\"zmdi zmdi-plus\"></i><a class=\"text-dark btn\" href=\"{{ path('newClient') }}\">Ajouter un client
                </a>
    </button>


    <div class=\" text-center my-5\">
        <h1>Catégorie Of The Months</h1>
        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velits</p>
    </div>

    <div class=\"row mt-5\">
        <div class=\"col-4 text-center\">
            <img src=\"https://images.unsplash.com/photo-1583312572805-32ece488eb6e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80\" class=\"rounded-circle\">
            <p>Shoes</p>
            <button type=\"button\" class=\"btn btn-success\">Shop</button>
        </div>
                <div class=\"col-4 text-center\">
            <img src=\"https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8c2hvZXN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60\" class=\"rounded-circle\">
            <p>Shoes</p>
            <button type=\"button\" class=\"btn btn-success\">Shop</button>
        </div>
                <div class=\"col-4 text-center\">
            <img src=\"https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80\" class=\"rounded-circle\">
            <p>Shoes</p>
            <button type=\"button\" class=\"btn btn-success mb-5\">Shop</button>
        
    </div>
</div>

{% endblock %}", "product.html.twig", "/Users/bouhidjennifer/Desktop/new-symfony/facetagram1/templates/product.html.twig");
    }
}
