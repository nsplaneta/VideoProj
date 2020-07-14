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

/* front/search_results.html.twig */
class __TwigTemplate_b40f57b714f71b41b820fe90485cf38bd2a6ce50b6753aa83b430f865dfdfb02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/search_results.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/search_results.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/search_results.html.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/video_list.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 28
        echo "    <div class=\"container-fluid\" style=\"padding-top: 50px\">
        <div class=\"row\">
            <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom\">

                    <div class=\"text-left float-left\">
                        ";
        // line 34
        if ((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                            <h1 class=\"jumbotron-heading\">Search results</h1>
                        ";
        } else {
            // line 37
            echo "                            <h1 class=\"jumbotron-heading\">No results were found</h1>
                        ";
        }
        // line 39
        echo "                    </div>

                    <div class=\"btn-toolbar mb-2 mb-md-0\">
                        ";
        // line 42
        if ((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "                        ";
            echo twig_include($this->env, $context, "front/includes/_sort.html.twig", ["query" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 43, $this->source); })())]);
            echo "
                        ";
        }
        // line 45
        echo "                    </div>
                </div>
                    ";
        // line 47
        if ((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 48, $this->source); })()));
            echo "
                <div class=\"row\" style=\"padding-bottom: 150px\">
                    ";
            // line 50
            echo twig_include($this->env, $context, "front/includes/_videos_list.html.twig", ["videos" => (isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 50, $this->source); })())]);
            echo "
                </div>
                        ";
        } else {
            // line 53
            echo "                            <div class=\"col-md-12 p-5\">

                                <i class=\"fa fa-frown-o\" style=\"font-size: 400px; color: #D01C1B\" aria-hidden=\"true\"></i>

                            </div>

                    ";
        }
        // line 60
        echo "            </main>
        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/search_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 60,  145 => 53,  139 => 50,  133 => 48,  131 => 47,  127 => 45,  121 => 43,  119 => 42,  114 => 39,  110 => 37,  106 => 35,  104 => 34,  96 => 28,  86 => 27,  74 => 25,  69 => 24,  59 => 23,  36 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'base.html.twig' %}#}

{#{% block main %}#}
{#    <section class=\"jumbotron text-center\">#}
{#        <div class=\"container\">#}
{#            {% if videos %}#}
{#                <h1 class=\"jumbotron-heading\">Search results</h1>#}
{#                {{ include('front/includes/_sort.html.twig',{'query':query}) }}#}
{#            {% else %}#}
{#                <h1 class=\"jumbotron-heading\">No results were found</h1>#}
{#            {% endif %}#}
{#        </div>#}
{#    </section>#}
{#    {% if videos %}#}
{#        {{ include('front/includes/_videos_list.html.twig', {'videos' : videos}) }}#}
{#        {{ knp_pagination_render(videos) }}#}
{#    {% endif %}#}


{#{% endblock %}#}

{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/video_list.css')}}\">
{% endblock %}
{% block main %}
    <div class=\"container-fluid\" style=\"padding-top: 50px\">
        <div class=\"row\">
            <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom\">

                    <div class=\"text-left float-left\">
                        {% if videos %}
                            <h1 class=\"jumbotron-heading\">Search results</h1>
                        {% else %}
                            <h1 class=\"jumbotron-heading\">No results were found</h1>
                        {% endif %}
                    </div>

                    <div class=\"btn-toolbar mb-2 mb-md-0\">
                        {% if videos %}
                        {{ include('front/includes/_sort.html.twig',{'query':query}) }}
                        {% endif %}
                    </div>
                </div>
                    {% if videos %}
                {{ knp_pagination_render(videos) }}
                <div class=\"row\" style=\"padding-bottom: 150px\">
                    {{ include('front/includes/_videos_list.html.twig', {'videos': videos}) }}
                </div>
                        {% else %}
                            <div class=\"col-md-12 p-5\">

                                <i class=\"fa fa-frown-o\" style=\"font-size: 400px; color: #D01C1B\" aria-hidden=\"true\"></i>

                            </div>

                    {% endif %}
            </main>
        </div>
    </div>
    </div>
{% endblock %}

", "front/search_results.html.twig", "/Users/nico/PhpstormProjects/MetubeMaster/Metub/templates/front/search_results.html.twig");
    }
}
