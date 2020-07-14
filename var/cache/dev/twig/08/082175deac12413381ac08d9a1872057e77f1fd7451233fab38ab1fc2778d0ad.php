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

/* front/includes/_sort.html.twig */
class __TwigTemplate_d285cd48cf9612f463f6347b7a9428df098cd0bdb02ff4466f3f9d4cd6a00ce3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_sort.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_sort.html.twig"));

        // line 1
        echo "<form id=\"form-sorting\" method=\"GET\">
    ";
        // line 2
        if ((isset($context["query"]) || array_key_exists("query", $context))) {
            // line 3
            echo "        <input name=\"query\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\">
    ";
        }
        // line 5
        echo "    <select name=\"sortby\" class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\" onchange='this.form.submit();'>
        <option selected>Sort...</option>
        <option value=\"rating\">Highest rated</option>
        <option value=\"asc\">Title A-Z</option>
        <option value=\"desc\">Title Z-A</option>
    </select>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_sort.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"form-sorting\" method=\"GET\">
    {% if query is defined %}
        <input name=\"query\" type=\"hidden\" value=\"{{ query }}\">
    {% endif %}
    <select name=\"sortby\" class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\" onchange='this.form.submit();'>
        <option selected>Sort...</option>
        <option value=\"rating\">Highest rated</option>
        <option value=\"asc\">Title A-Z</option>
        <option value=\"desc\">Title Z-A</option>
    </select>
</form>", "front/includes/_sort.html.twig", "/Users/nico/PhpstormProjects/MetubeMaster/Metub/templates/front/includes/_sort.html.twig");
    }
}
