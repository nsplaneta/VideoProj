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

/* front/videos_list.html.twig */
class __TwigTemplate_1fc5668256b33907e6ecaa9c822e48a2caf60a3331c900d6d6557fbcbf2ecc1c extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/videos_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/videos_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/videos_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/video_list.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <div class=\"container-fluid\" style=\"padding-top: 50px\">
        <div class=\"row\">
            <nav class=\"col-md-1 d-none d-md-block bg-light sidebar\">
                <div class=\"sidebar-sticky\">
                    <ul class=\"nav flex-column\" style=\"padding-top: 25px\">
                        <li class=\"nav-item\">
                                    <b> Subcategories: </b>
                        </li>
                        ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 15, $this->source); })()), "categorylist", [], "any", false, false, false, 15);
        echo "
                    </ul>
                </div>
            </nav>
            <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom\">

                    <div class=\"text-left float-left\">
                    <a style=\"color: #222222\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_list", ["category" => twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 23, $this->source); })()), "mainParentName", [], "any", false, false, false, 23), "id" => twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 23, $this->source); })()), "mainParentId", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\">
                        <i class=\"h2\">{ ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 24, $this->source); })()), "mainParentName", [], "any", false, false, false, 24), "html", null, true);
        echo " }</i>
                    </a>
                        ";
        // line 26
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 26, $this->source); })()), "currentCategoryName", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 26, $this->source); })()), "mainParentName", [], "any", false, false, false, 26)))) {
            // line 27
            echo "
                    <a style=\"color: #222222\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_list", ["category" => twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 28, $this->source); })()), "currentCategoryName", [], "any", false, false, false, 28), "id" => twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 28, $this->source); })()), "currentCategoryId", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                    <i class=\"h2\">{ ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 29, $this->source); })()), "currentCategoryName", [], "any", false, false, false, 29), "html", null, true);
            echo " }</i>
                    </a>

                        ";
        }
        // line 33
        echo "                    </div>

                    <div class=\"btn-toolbar mb-2 mb-md-0\">
                        ";
        // line 36
        echo twig_include($this->env, $context, "front/includes/_sort.html.twig");
        echo "
                    </div>
                </div>
                ";
        // line 39
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 39, $this->source); })()));
        echo "
                <div class=\"row\" style=\"padding-bottom: 150px\">
                    ";
        // line 41
        echo twig_include($this->env, $context, "front/includes/_videos_list.html.twig", ["videos" => (isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 41, $this->source); })())]);
        echo "
                </div>
            </main>
        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/videos_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 41,  153 => 39,  147 => 36,  142 => 33,  135 => 29,  131 => 28,  128 => 27,  126 => 26,  121 => 24,  117 => 23,  106 => 15,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/video_list.css')}}\">
{% endblock %}
{% block main %}
    <div class=\"container-fluid\" style=\"padding-top: 50px\">
        <div class=\"row\">
            <nav class=\"col-md-1 d-none d-md-block bg-light sidebar\">
                <div class=\"sidebar-sticky\">
                    <ul class=\"nav flex-column\" style=\"padding-top: 25px\">
                        <li class=\"nav-item\">
                                    <b> Subcategories: </b>
                        </li>
                        {{ subcategories.categorylist|raw }}
                    </ul>
                </div>
            </nav>
            <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom\">

                    <div class=\"text-left float-left\">
                    <a style=\"color: #222222\" href=\"{{ path('video_list', {'category':subcategories.mainParentName, 'id':subcategories.mainParentId} ) }}\">
                        <i class=\"h2\">{ {{ subcategories.mainParentName }} }</i>
                    </a>
                        {% if subcategories.currentCategoryName != subcategories.mainParentName %}

                    <a style=\"color: #222222\" href=\"{{ path('video_list', {'category':subcategories.currentCategoryName, 'id':subcategories.currentCategoryId} ) }}\">
                    <i class=\"h2\">{ {{ subcategories.currentCategoryName }} }</i>
                    </a>

                        {% endif %}
                    </div>

                    <div class=\"btn-toolbar mb-2 mb-md-0\">
                        {{ include('front/includes/_sort.html.twig') }}
                    </div>
                </div>
                {{ knp_pagination_render(videos) }}
                <div class=\"row\" style=\"padding-bottom: 150px\">
                    {{ include('front/includes/_videos_list.html.twig', {'videos': videos}) }}
                </div>
            </main>
        </div>
    </div>
    </div>
{% endblock %}", "front/videos_list.html.twig", "/home/nico/Shared/PhpstormProjects/MetubeMaster/Metub/templates/front/videos_list.html.twig");
    }
}
