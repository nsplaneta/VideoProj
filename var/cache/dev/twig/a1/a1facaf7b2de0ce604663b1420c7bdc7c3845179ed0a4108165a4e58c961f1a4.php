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

/* admin/my_profile.html.twig */
class __TwigTemplate_cd8d84bf77ea86414f2d86b306c6555e2249475dfde5c55ac9f31901c137f2cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainadmin' => [$this, 'block_mainadmin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/my_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/my_profile.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/my_profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_mainadmin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        // line 3
        echo "<h2>My Details </h2>


    ";
        // line 6
        if ((( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 6, $this->source); })())) && twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 6, $this->source); })()), "getPlan", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 6, $this->source); })()), "getPlanDataNames", [], "any", false, false, false, 6)))) {
            // line 7
            echo "
        <p class=\"text-left alert alert-secondary\">My plan - ";
            // line 8
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 8, $this->source); })()), "getPlan", [], "any", false, false, false, 8)), "html", null, true);
            echo ". <b>valid to:</b> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 8, $this->source); })()), "validTo", [], "any", false, false, false, 8), "Y-m-d"), "html", null, true);
            echo "
            ";
            // line 9
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 9, $this->source); })()), "validTo", [], "any", false, false, false, 9), null)) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 9, $this->source); })()), "paymentStatus", [], "any", false, false, false, 9), null)))) {
                // line 10
                echo "                Plan is not active <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
                echo "\">pay for plan</a> |
            ";
            }
            // line 12
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 12, $this->source); })()), "getPlan", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 12, $this->source); })()), "getPlanDataNameByIndex", [0 => 0], "method", false, false, false, 12)))) {
                // line 13
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
                echo "\">get paid plan</a> |
            ";
            }
            // line 15
            echo "            <a onclick=\"return confirm('Are you sure? This can not be undone. Remember also to cancel payment in your PayPal account.');\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancel_plan");
            echo "\">cancel plan</a></p>
    ";
        } elseif ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "        <p class=\"text-left\">You don't have any plan. <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
            echo "\">Get plan</a></p>
    ";
        }
        // line 19
        echo "

    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">

        <label for=\"user_name\">Name</label>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 25, $this->source); })())]]);
        echo "

        <div class=\"invalid-feedback\">

            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_last_name\">Last name</label>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "last_name", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 35, $this->source); })())]]);
        echo "


        <div class=\"invalid-feedback\">

            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "last_name", [], "any", false, false, false, 40), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_email\">Email address</label>
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 46, $this->source); })())]]);
        echo "

        <div class=\"invalid-feedback\">

            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_password_first\">Password</label>
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 56, $this->source); })()), "required" => "required"]]);
        echo "

        <div class=\"invalid-feedback\">

            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), "first", [], "any", false, false, false, 60), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_password_second\">Confirm password</label>
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "password", [], "any", false, false, false, 66), "second", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => (isset($context["is_invalid"]) || array_key_exists("is_invalid", $context) ? $context["is_invalid"] : (function () { throw new RuntimeError('Variable "is_invalid" does not exist.', 66, $this->source); })()), "required" => "required"]]);
        echo "

        <div class=\"invalid-feedback\">

            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "password", [], "any", false, false, false, 70), "second", [], "any", false, false, false, 70), 'errors');
        echo "
        </div>
    </div>
    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "save", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "btn btn-outline-violet btn-md btn-block"], "label" => "Update"]);
        echo "
    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "
    <br>
    <a class=\"btn btn-outline-danger btn-sm btn-block\" onclick=\"return confirm('Are you sure?');\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account");
        echo "\">
        Delete account
    </a>
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/my_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 76,  206 => 74,  202 => 73,  196 => 70,  189 => 66,  180 => 60,  173 => 56,  164 => 50,  157 => 46,  148 => 40,  140 => 35,  131 => 29,  124 => 25,  117 => 21,  113 => 19,  107 => 17,  101 => 15,  95 => 13,  92 => 12,  86 => 10,  84 => 9,  78 => 8,  75 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block mainadmin %}
<h2>My Details </h2>


    {% if not is_granted('ROLE_ADMIN') and subscription and subscription.getPlan in subscription.getPlanDataNames %}

        <p class=\"text-left alert alert-secondary\">My plan - {{subscription.getPlan|upper}}. <b>valid to:</b> {{subscription.validTo|date('Y-m-d')}}
            {% if subscription.validTo == null or subscription.paymentStatus == null %}
                Plan is not active <a href=\"{{path('payment')}}\">pay for plan</a> |
            {% endif %}
            {% if subscription.getPlan == subscription.getPlanDataNameByIndex(0) %}
                <a href=\"{{path('pricing')}}\">get paid plan</a> |
            {% endif %}
            <a onclick=\"return confirm('Are you sure? This can not be undone. Remember also to cancel payment in your PayPal account.');\" href=\"{{path('cancel_plan')}}\">cancel plan</a></p>
    {% elseif not is_granted('ROLE_ADMIN') %}
        <p class=\"text-left\">You don't have any plan. <a href=\"{{path('pricing')}}\">Get plan</a></p>
    {% endif %}


    {{ form_start(form) }}
    <div class=\"form-group\">

        <label for=\"user_name\">Name</label>
        {{ form_widget(form.name, {'attr':{'class': is_invalid}}) }}

        <div class=\"invalid-feedback\">

            {{form_errors(form.name)}}
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_last_name\">Last name</label>
        {{ form_widget(form.last_name, {'attr':{'class': is_invalid}}) }}


        <div class=\"invalid-feedback\">

            {{form_errors(form.last_name)}}
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_email\">Email address</label>
        {{ form_widget(form.email, {'attr':{'class': is_invalid}}) }}

        <div class=\"invalid-feedback\">

            {{form_errors(form.email)}}
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_password_first\">Password</label>
        {{ form_widget(form.password.first, {'attr':{'class': is_invalid, 'required':'required'}}) }}

        <div class=\"invalid-feedback\">

            {{form_errors(form.password.first)}}
        </div>
    </div>
    <div class=\"form-group\">

        <label for=\"user_password_second\">Confirm password</label>
        {{ form_widget(form.password.second, {'attr':{'class': is_invalid, 'required':'required'}}) }}

        <div class=\"invalid-feedback\">

            {{form_errors(form.password.second)}}
        </div>
    </div>
    {{ form_widget(form.save,{'attr': {'class': 'btn btn-outline-violet btn-md btn-block'}, 'label': 'Update'}) }}
    {{ form_end(form) }}
    <br>
    <a class=\"btn btn-outline-danger btn-sm btn-block\" onclick=\"return confirm('Are you sure?');\" href=\"{{path('delete_account')}}\">
        Delete account
    </a>
    <br>
{% endblock %}
", "admin/my_profile.html.twig", "/Users/nico/PhpstormProjects/MetubeMaster/Metub/templates/admin/my_profile.html.twig");
    }
}
