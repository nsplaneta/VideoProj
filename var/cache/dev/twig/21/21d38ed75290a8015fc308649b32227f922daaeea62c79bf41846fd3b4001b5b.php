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

/* front/includes/_comments.html.twig */
class __TwigTemplate_c071c554aec227b6a20a581606a22875e08fac1e47f502c727ab14ceb7dc3632 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_comments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_comments.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "    <ul class=\"list-unstyled text-left shadow\" style=\"background-color: #f0f0f0; padding: 5px\">
        <li class=\"card-link\" style=\"background-color: #F9f9f9\">
        <h5 class=\"mt-0 mb-1\"><b>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 4), "lastname", [], "any", false, false, false, 4), "html", null, true);
            echo "</b>
            <small>(<b>";
            // line 5
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "createdat", [], "any", false, false, false, 5));
            echo "</b>)
            ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6))))) {
                // line 7
                echo "                { <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_comment", ["comment" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 7)]), "html", null, true);
                echo "\">
                    <i>delete</i>
                </a> }
            ";
            }
            // line 11
            echo "            </small>
        </h5>
    </li>
        <li class=\"media\">
            <img class=\"mr-3\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user.png"), "html", null, true);
            echo "\"  width=\"100px\">
            <div class=\"media-body\">
                ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 17), "html", null, true);
            echo "
            </div>
        </li>
    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  82 => 17,  77 => 15,  71 => 11,  63 => 7,  61 => 6,  57 => 5,  51 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for comment in comments %}
    <ul class=\"list-unstyled text-left shadow\" style=\"background-color: #f0f0f0; padding: 5px\">
        <li class=\"card-link\" style=\"background-color: #F9f9f9\">
        <h5 class=\"mt-0 mb-1\"><b>{{comment.user.name}} {{comment.user.lastname}}</b>
            <small>(<b>{{comment.createdat|ago}}</b>)
            {% if app.user and app.user.id == comment.user.id %}
                { <a href=\"{{path('delete_comment',{'comment':comment.id})}}\">
                    <i>delete</i>
                </a> }
            {% endif %}
            </small>
        </h5>
    </li>
        <li class=\"media\">
            <img class=\"mr-3\" src=\"{{asset('assets/img/user.png')}}\"  width=\"100px\">
            <div class=\"media-body\">
                {{comment.content}}
            </div>
        </li>
    </ul>
{% endfor %}

", "front/includes/_comments.html.twig", "/Users/nico/PhpstormProjects/MetubeMaster/Metub/templates/front/includes/_comments.html.twig");
    }
}
