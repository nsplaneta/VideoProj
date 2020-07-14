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

/* front/register.html.twig */
class __TwigTemplate_465853523f4b69b82604231fc3d70df0d1f03f348483329389a6278686d4567c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"container-fluid mt-lg-5\">
        <div class=\"row mt-lg-5\">
        </div>
        <div class=\"row mt-lg-5\">
            ";
        // line 7
        echo twig_include($this->env, $context, "front/includes/_cart.html.twig");
        echo "
            <div class=\"col-md-8 order-md-1\">
                <h4 class=\"mb-3\">Register first (free)</h4>
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"user_name\">Name</label>
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <div class=\"invalid-feedback\">
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"user_last_name\">Last name</label>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "last_name", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <div class=\"invalid-feedback\">
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "last_name", [], "any", false, false, false, 23), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"user_email\">Email</label>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email@example.com"]]);
        echo "
                    <div class=\"invalid-feedback\">
                        Please enter a valid email address.
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"user_password_first\">Password</label>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"invalid-feedback\">
                        Please enter a valid password.
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "password", [], "any", false, false, false, 40), "first", [], "any", false, false, false, 40), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"user_password_second\">Repeat Password</label>
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "password", [], "any", false, false, false, 45), "second", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <div class=\"invalid-feedback\">
                        Please enter a valid password confirmation.
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "second", [], "any", false, false, false, 48), 'errors');
        echo "
                    </div>
                </div>
                <hr class=\"mb-4\">
                <div class=\"my-5\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "save", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "btn btn-violet btn-lg btn-block"]]);
        echo "

                </div>
                ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  156 => 53,  148 => 48,  142 => 45,  134 => 40,  128 => 37,  120 => 32,  114 => 29,  105 => 23,  100 => 21,  92 => 16,  87 => 14,  80 => 10,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}
    <div class=\"container-fluid mt-lg-5\">
        <div class=\"row mt-lg-5\">
        </div>
        <div class=\"row mt-lg-5\">
            {{ include('front/includes/_cart.html.twig') }}
            <div class=\"col-md-8 order-md-1\">
                <h4 class=\"mb-3\">Register first (free)</h4>
                {{ form_start(form,{'attr': {'class':'needs-validation'}}) }}
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"user_name\">Name</label>
                        {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback\">
                            {{ form_errors(form.name) }}
                        </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"user_last_name\">Last name</label>
                        {{ form_widget(form.last_name, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback\">
                            {{ form_errors(form.last_name) }}
                        </div>
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"user_email\">Email</label>
                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'email@example.com'}}) }}
                    <div class=\"invalid-feedback\">
                        Please enter a valid email address.
                        {{ form_errors(form.email) }}
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"user_password_first\">Password</label>
                    {{ form_widget(form.password.first, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"invalid-feedback\">
                        Please enter a valid password.
                        {{ form_errors(form.password.first) }}
                    </div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"user_password_second\">Repeat Password</label>
                    {{ form_widget(form.password.second, {'attr': {'class': 'form-control'}}) }}
                    <div class=\"invalid-feedback\">
                        Please enter a valid password confirmation.
                        {{ form_errors(form.password.second) }}
                    </div>
                </div>
                <hr class=\"mb-4\">
                <div class=\"my-5\">
                    {{ form_widget(form.save, {'attr': {'class': 'btn btn-violet btn-lg btn-block'}}) }}

                </div>
                {{ form_end(form) }}
            </div>
        </div>

    </div>
{% endblock %}


", "front/register.html.twig", "/home/nico/Shared/PhpstormProjects/MetubeMaster/Metub/templates/front/register.html.twig");
    }
}
