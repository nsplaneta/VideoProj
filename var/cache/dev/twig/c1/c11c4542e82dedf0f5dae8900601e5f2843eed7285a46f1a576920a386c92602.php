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

/* front/video_details.html.twig */
class __TwigTemplate_e5928dfc2889719262f9e8a1049aef1cfc9688887fc458bece88d9d2aebc21b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_details.html.twig"));

        // line 6
        if ( !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 6, $this->source); })()))) {
            // line 7
            $context["videoid"] = (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 7, $this->source); })());
        } else {
            // line 9
            $context["videoid"] = twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 9, $this->source); })()), "path", [], "any", false, false, false, 9);
        }
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/video_details.html.twig", 1);
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

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "<div class=\"container-fluid offset-md-2\" style=\"padding-top: 80px\">
    <div class=\"row\">
        <div class=\"col-md-10\" >
          <h2>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 text-center\">
            <video width=\"100%\" height=\"auto\" controls>
                <source src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["videoid"]) || array_key_exists("videoid", $context) ? $context["videoid"] : (function () { throw new RuntimeError('Variable "videoid" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" type=\"video/mp4\">
            </video>
        </div>
        <div class=\"col-md-4 \">
            <p><b>Uploaded by:</b>  ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            <p><b>Rates: </b> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 26, $this->source); })()), "usersrate", [], "any", false, false, false, 26), "count", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
            <p><b>Duration: </b> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 27, $this->source); })()), "duration", [], "any", false, false, false, 27), "html", null, true);
        echo " minutes</p>
            <p>
                ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "                    ";
            echo twig_include($this->env, $context, "front/includes/_likes.html.twig");
            echo "
                ";
        }
        // line 32
        echo "            </p>
        </div>
    </div>


";
        // line 45
        echo "
";
        // line 47
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
        ";
        // line 50
        echo twig_include($this->env, $context, "front/includes/_comments.html.twig");
        echo "
        ";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 51, $this->source); })()));
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6 pb-5\">
            <form method=\"POST\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_comment", ["video" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">
                <div class=\"form-group\">
                    <label for=\"exampleFormControlTextarea1\">Write your comment</label>
                    <textarea required name=\"comment\" class=\"form-control green\" rows=\"3\"></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-outline-violet btn-md btn-block\">Add</button>

            </form>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/video_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 57,  166 => 51,  162 => 50,  157 => 47,  154 => 45,  147 => 32,  141 => 30,  139 => 29,  134 => 27,  130 => 26,  126 => 25,  119 => 21,  110 => 15,  105 => 12,  95 => 11,  83 => 4,  78 => 3,  68 => 2,  57 => 1,  54 => 9,  51 => 7,  49 => 6,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/video_list.css')}}\">
{% endblock %}
{% if video_no_members is not null %}
    {% set videoid = video_no_members %}
{% else %}
    {% set videoid = video.path %}
{% endif %}
{% block main %}
<div class=\"container-fluid offset-md-2\" style=\"padding-top: 80px\">
    <div class=\"row\">
        <div class=\"col-md-10\" >
          <h2>{{video.title}}</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6 text-center\">
            <video width=\"100%\" height=\"auto\" controls>
                <source src=\"{{videoid}}\" type=\"video/mp4\">
            </video>
        </div>
        <div class=\"col-md-4 \">
            <p><b>Uploaded by:</b>  {{ video.user.name }}</p>
            <p><b>Rates: </b> {{ video.usersrate.count }}</p>
            <p><b>Duration: </b> {{ video.duration }} minutes</p>
            <p>
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED')  %}
                    {{ include('front/includes/_likes.html.twig') }}
                {% endif  %}
            </p>
        </div>
    </div>


{#    #}
{#    <br>#}
{#    <h1>{{video.title}}</h1>#}
{#    <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">#}
{#        <video width=\"80px%\" height=\"auto\" controls>#}
{#            <source src=\"{{videoid}}\" type=\"video/mp4\">#}
{#        </video>#}
{#    </div>#}

{#    <hr>#}

    <div class=\"row\">
        <div class=\"col-md-6\">
        {{ include('front/includes/_comments.html.twig')}}
        {{ knp_pagination_render(comments) }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6 pb-5\">
            <form method=\"POST\" action=\"{{ path('create_comment', {'video':video.id}) }}\">
                <div class=\"form-group\">
                    <label for=\"exampleFormControlTextarea1\">Write your comment</label>
                    <textarea required name=\"comment\" class=\"form-control green\" rows=\"3\"></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-outline-violet btn-md btn-block\">Add</button>

            </form>
        </div>
    </div>
</div>
{% endblock %}
", "front/video_details.html.twig", "/home/nico/Shared/PhpstormProjects/MetubeMaster/Metub/templates/front/video_details.html.twig");
    }
}
