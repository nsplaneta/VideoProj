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

/* admin/includes/_category_form.html.twig */
class __TwigTemplate_cd3564a3bace34dbd6cd66345939a6b73d1614cee8ced45dc00c6533a18289f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/includes/_category_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/includes/_category_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
";
        // line 2
        if (twig_test_empty((isset($context["edit_page"]) || array_key_exists("edit_page", $context) ? $context["edit_page"] : (function () { throw new RuntimeError('Variable "edit_page" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "<div class=\"row p-3\">
    <div class=\"col-md-2\">
        <i class=\"fa fa-plus-circle\" aria-hidden=\"true\" style=\"color: #2D259D; font-size: 24px\"></i>
        <b>Add category</b>
    </div>
    <div class=\"col-md-4\">
    ";
            // line 9
            $context["category"] = ["name" => ""];
            // line 10
            echo "    ";
            $context["submitButton"] = "Add";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $context["submitButton"] = "Update";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => ("form-control " . (isset($context["invalid"]) || array_key_exists("invalid", $context) ? $context["invalid"] : (function () { throw new RuntimeError('Variable "invalid" does not exist.', 14, $this->source); })())), "placeholder" => "Category name", "value" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14)]]);
        echo "

    </div>
    <div class=\"col-md-4\">
        <select name=\"category[parent]\" class=\"custom-select\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\Admin\\Superadmin\\CategoryController::getAllCategories"));
        echo "
        </select>

    </div>
    <div class=\"col-md-2\">
        <button class=\"btn btn-outline-violet my-2 my-sm-0\" type=\"submit\">Update</button>
    </div>
</div>
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/includes/_category_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  80 => 19,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  57 => 9,  49 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
{% if edit_page is empty %}
<div class=\"row p-3\">
    <div class=\"col-md-2\">
        <i class=\"fa fa-plus-circle\" aria-hidden=\"true\" style=\"color: #2D259D; font-size: 24px\"></i>
        <b>Add category</b>
    </div>
    <div class=\"col-md-4\">
    {% set category = { 'name':''} %}
    {% set submitButton = 'Add' %}
    {% else %}
        {% set submitButton = 'Update' %}
    {% endif %}
    {{ form_widget(form.name, {'attr': {'class': 'form-control ' ~ invalid, 'placeholder':'Category name', 'value':category.name}}) }}

    </div>
    <div class=\"col-md-4\">
        <select name=\"category[parent]\" class=\"custom-select\">
            {{ render(controller('App\\\\Controller\\\\Admin\\\\Superadmin\\\\CategoryController::getAllCategories')) }}
        </select>

    </div>
    <div class=\"col-md-2\">
        <button class=\"btn btn-outline-violet my-2 my-sm-0\" type=\"submit\">Update</button>
    </div>
</div>
{{ form_end(form) }}
", "admin/includes/_category_form.html.twig", "/Users/nico/PhpstormProjects/MetubeMaster/Metub/templates/admin/includes/_category_form.html.twig");
    }
}
