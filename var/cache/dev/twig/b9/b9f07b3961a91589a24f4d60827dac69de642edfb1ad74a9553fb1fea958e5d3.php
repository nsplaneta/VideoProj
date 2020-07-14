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

/* front/pricing.html.twig */
class __TwigTemplate_120df03bb8a0008fd917d6bcd5797602f65e1adc7de43c69fc78c440c8636bb6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/pricing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/pricing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4\">Pricing</h1>
    <p class=\"lead\">Watch the best videos on the planet. Choose a plan that is right for you. Downgrade or upgrade at
        any time.
    </p>
</div>

<div class=\"container\">
    <div class=\"card-deck mb-3 text-center\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 16, $this->source); })()), 0, [], "array", false, false, false, 16)), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 19, $this->source); })()), 0, [], "array", false, false, false, 19), [], "array", false, false, false, 19), "html", null, true);
        echo " <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Access for one month</li>
                    <li>Help center access</li>
                </ul>
                <a role=\"button\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["plan" => twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 24, $this->source); })()), 0, [], "array", false, false, false, 24)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-outline-primary\">Sign up for free</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">";
        // line 29
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 29, $this->source); })()), 1, [], "array", false, false, false, 29)), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 32, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 32, $this->source); })()), 1, [], "array", false, false, false, 32), [], "array", false, false, false, 32), "html", null, true);
        echo " <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                </ul>
                <a role=\"button\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["plan" => twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 39, $this->source); })()), 1, [], "array", false, false, false, 39)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-primary\">Get started</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">";
        // line 44
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 44, $this->source); })()), 2, [], "array", false, false, false, 44)), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 47, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 47, $this->source); })()), 2, [], "array", false, false, false, 47), [], "array", false, false, false, 47), "html", null, true);
        echo " <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>Ultra HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                    <li>Unlimited live events</li>
                </ul>
                <a role=\"button\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["plan" => twig_get_attribute($this->env, $this->source, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 55, $this->source); })()), 2, [], "array", false, false, false, 55)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-primary\">Contact us</a>
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
        return "front/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  134 => 47,  128 => 44,  120 => 39,  110 => 32,  104 => 29,  96 => 24,  88 => 19,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}

<div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4\">Pricing</h1>
    <p class=\"lead\">Watch the best videos on the planet. Choose a plan that is right for you. Downgrade or upgrade at
        any time.
    </p>
</div>

<div class=\"container\">
    <div class=\"card-deck mb-3 text-center\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">{{ name[0]|capitalize }}</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">{{ price[name[0]]}} <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Access for one month</li>
                    <li>Help center access</li>
                </ul>
                <a role=\"button\" href=\"{{ path('register', {'plan':name[0]})}}\" class=\"btn btn-lg btn-block btn-outline-primary\">Sign up for free</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">{{ name[1]|capitalize }}</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">{{ price[name[1]]}} <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                </ul>
                <a role=\"button\" href=\"{{ path('register', {'plan':name[1]}) }}\" class=\"btn btn-lg btn-block btn-primary\">Get started</a>
            </div>
        </div>
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h4 class=\"my-0 font-weight-normal\">{{ name[2]|capitalize }}</h4>
            </div>
            <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">{{ price[name[2]]}} <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <li>Unlimited access</li>
                    <li>Ultra HD available</li>
                    <li>No ads on videos</li>
                    <li>Help center access</li>
                    <li>Unlimited live events</li>
                </ul>
                <a role=\"button\" href=\"{{ path('register', {'plan':name[2]})}}\" class=\"btn btn-lg btn-block btn-primary\">Contact us</a>
            </div>
        </div>
    </div>

</div>

{% endblock %}", "front/pricing.html.twig", "/Users/nico/PhpstormProjects/MetubeMaster/Metub/templates/front/pricing.html.twig");
    }
}
