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

/* services.html.twig */
class __TwigTemplate_8c964b4e540588b8fd24238e4387b3a7b9b8d386929c690e95fc73e69b8a1b3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services.html.twig"));

        $this->parent = $this->loadTemplate("navbar.html.twig", "services.html.twig", 1);
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
        <div class=\"row\">
            <!--texte-->
            <div class=\"col-6\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake. Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
                </div>
            </div>
            <!--photo-->
            <div class=\"col-6\">
                <figure>
                    <img src=\"https://media.istockphoto.com/photos/lady-with-kayak-picture-id516449022?b=1&k=6&m=516449022&s=170667a&w=0&h=Ds6gy4B06bGAvurG-Xj0fa96FxiRNnbf8xhfrjLef2k=\" class=\"card-img-top\" alt=\"img\">
                    <figcaption>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</figcaption>
                </figure>
                
            </div>
        </div>
    </div>

    <div class=\"container\">

    
    <div class=\"row mt-5\">
        <div class=\"col-3 text-center\">
            
            <img class=\"shadow p-3 mb-5 bg-body rounded\" src=\"https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5hdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60\" class=\"card-img-top\" alt=\"img\">
            <h3 class=\"text-primary\">Riviera Nature</h3>
            
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h4 class=\"text-warning\">Argentine</h4>
            
        </div>
        <div class=\"col-3 text-center\">
            <img class=\"shadow p-3 mb-5 bg-body rounded\" src=\"https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5hdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60\">
            <h3 class=\"text-primary\">Riviera Nature</h3>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h4 class=\"text-warning\">Argentine</h4>
            
        </div>
                <div class=\"col-3 text-center\">
            <img class=\"shadow p-3 mb-5 bg-body rounded\" src=\"https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5hdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60\">
            <h3 class=\"text-primary\">Riviera Nature</h3>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h4 class=\"text-warning\">Argentine</h4>
            
        </div>
                <div class=\"col-3 text-center\">
            <img class=\"shadow p-3 mb-5 bg-body rounded\" src=\"https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5hdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60\">
            <h3 class=\"text-primary\">Riviera Nature</h3>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h4 class=\"text-warning\">Argentine</h4>
            
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "services.html.twig";
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
            <!--texte-->
            <div class=\"col-6\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake. Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake. Fruitcake chocolate marshmallow jujubes icing macaroon gummies biscuit cake. Pie pudding bear claw gingerbread. Muffin toffee lemon drops chupa chups tiramisu lollipop bonbon tart.Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
                </div>
            </div>
            <!--photo-->
            <div class=\"col-6\">
                <figure>
                    <img src=\"https://media.istockphoto.com/photos/lady-with-kayak-picture-id516449022?b=1&k=6&m=516449022&s=170667a&w=0&h=Ds6gy4B06bGAvurG-Xj0fa96FxiRNnbf8xhfrjLef2k=\" class=\"card-img-top\" alt=\"img\">
                    <figcaption>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</figcaption>
                </figure>
                
            </div>
        </div>
    </div>

    <div class=\"container\">

    
    <div class=\"row mt-5\">
        <div class=\"col-3 text-center\">
            
            <img class=\"shadow p-3 mb-5 bg-body rounded\" src=\"https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5hdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60\" class=\"card-img-top\" alt=\"img\">
            <h3 class=\"text-primary\">Riviera Nature</h3>
            
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h4 class=\"text-warning\">Argentine</h4>
            
        </div>
        <div class=\"col-3 text-center\">
            <img class=\"shadow p-3 mb-5 bg-body rounded\" src=\"https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5hdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60\">
            <h3 class=\"text-primary\">Riviera Nature</h3>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h4 class=\"text-warning\">Argentine</h4>
            
        </div>
                <div class=\"col-3 text-center\">
            <img class=\"shadow p-3 mb-5 bg-body rounded\" src=\"https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5hdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60\">
            <h3 class=\"text-primary\">Riviera Nature</h3>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h4 class=\"text-warning\">Argentine</h4>
            
        </div>
                <div class=\"col-3 text-center\">
            <img class=\"shadow p-3 mb-5 bg-body rounded\" src=\"https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5hdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60\">
            <h3 class=\"text-primary\">Riviera Nature</h3>
            <p>Dessert pastry topping jelly-o toffee lollipop chocolate cake.</p>
            <h4 class=\"text-warning\">Argentine</h4>
            
        </div>
    </div>
</div>
{% endblock %}", "services.html.twig", "/Users/bouhidjennifer/Desktop/new-symfony/facetagram1/templates/services.html.twig");
    }
}
