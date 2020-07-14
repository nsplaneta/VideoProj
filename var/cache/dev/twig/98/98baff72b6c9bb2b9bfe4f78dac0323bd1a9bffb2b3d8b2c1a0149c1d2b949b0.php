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

/* front/index.html.twig */
class __TwigTemplate_5823a73496e11fb4dbbf5cfac388f8c7d095a9838feaa89426608da0dbafad9b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/index.html.twig", 1);
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
        echo "    <div class=\"container shadow\">

        <!-- Heading Row -->
        <div class=\"row my-5\">
            <div class=\"col-lg-10 pt-5\">
                <h1>Top rated video
                    <i class=\"fa active fa-thumbs-up\" style=\"font-size: 36px\"></i>
                </h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-7\">
            <video width=\"550\" controls style=\"border: 1px solid #666666\">
                    <source src=\"";
        // line 16
        if ( !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 16, $this->source); })()))) {
            echo twig_escape_filter($this->env, (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 16, $this->source); })()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 16, $this->source); })()), 0, [], "array", false, false, false, 16), "path", [], "any", false, false, false, 16), "html", null, true);
        }
        echo "\" type=\"video/mp4\">
                </video>
            </div>
            <!-- /.col-lg-8 -->
            <div class=\"col-lg-4 rounded mx-sm-2\" style=\"background-color: #F5F5F5\">
                <h1 class=\"rated-name\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "title", [], "any", false, false, false, 21), "html", null, true);
        echo " </h1>
                <p><b>Uploaded by: </b> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22), "last_name", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                <p><b>Rates: </b> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "rates", [], "any", false, false, false, 23), "html", null, true);
        echo "
                    <i class=\"fa active fa-thumbs-up\"></i>

                </p>
                <p><b>Duration: </b> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 27, $this->source); })()), 0, [], "array", false, false, false, 27), "duration", [], "any", false, false, false, 27), "html", null, true);
        echo " minutes</p>
                <a class=\"btn btn-outline-violet my-2 my-sm-0\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details", ["video" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 28, $this->source); })()), 0, [], "array", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">Go to details!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Call to Action Well -->
        <div class=\"card text-white bg-secondary my-5 py-4 text-center \">
            <div class=\"col-md-6 mx-auto\">
            <div class=\"card-body\">
                <p class=\"text-white m-0\">Share with your friends:</p>
                <div class=\"input-group mb-3 \">
                    <div class=\"input-group-prepend\" >
                        <span class=\"input-group-text\" id=\"basic-addon3\">URL</span>
                    </div>
                    <input type=\"text\" class=\"form-control\" id=\"basic-url\" aria-describedby=\"basic-addon3\" value=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "video-details/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 43, $this->source); })()), 0, [], "array", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "\" />
                </div>
            </div>
            </div>
        </div>
        <!-- Content Row -->
        <div class=\"row\">
            ";
        // line 50
        $context["places"] = [0 => "2nd", 1 => "3rd", 2 => "4th"];
        // line 51
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 51, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 52
            echo "                <div class=\"card-deck\" style=\"padding: 10px\">

                    <div class=\"card mb-3\">

                        <div class=\"card-header\">
                            <i class=\"fa active fa-thumbs-up\" style=\"font-size: 20px\"></i>
                            ";
            // line 58
            echo twig_escape_filter($this->env, $context["place"], "html", null, true);
            echo "
                            <h4 class=\"card-title rated-name\">
                                ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 60, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 60) + 1), [], "array", false, false, false, 60), "title", [], "any", false, false, false, 60), "html", null, true);
            echo "
                            </h4>
                        </div>

                        <div class=\"card-body\">
                            ";
            // line 65
            if (( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65) ||  !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 65, $this->source); })())))) {
                // line 66
                echo "
                                <p class=\"card-text text-danger\">Only for <b>Subscribers</b>! <a href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
                echo "\">Sign up</a> <u>one month</u> trial available.</p>

                            ";
            }
            // line 70
            echo "                        </div>

                        <video  width=\"100%\" controls>
                            <source src=\"";
            // line 73
            if ( !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 73, $this->source); })()))) {
                echo twig_escape_filter($this->env, (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 73, $this->source); })()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 73, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73) + 1), [], "array", false, false, false, 73), "path", [], "any", false, false, false, 73), "html", null, true);
            }
            echo "\" type=\"video/mp4\">
                        </video>

                        <ul class=\"list-group list-group-flush\">

                            <li class=\"list-group-item\">

                                <b> Rates: </b>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 80, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80) + 1), [], "array", false, false, false, 80), "rates", [], "any", false, false, false, 80), "html", null, true);
            echo "

                            </li>

                            <li class=\"list-group-item\"><b>Duration: </b> ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 84, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84) + 1), [], "array", false, false, false, 84), "duration", [], "any", false, false, false, 84), "html", null, true);
            echo " minutes</li>

                        </ul>

                        <div class=\"card-footer\">
                            <a class=\"btn btn-outline-violet my-2 my-sm-0\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details", ["video" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rated"]) || array_key_exists("rated", $context) ? $context["rated"] : (function () { throw new RuntimeError('Variable "rated" does not exist.', 89, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 89) + 1), [], "array", false, false, false, 89), "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">Go to details!</a>

                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </div>
        <!-- /.row -->

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 95,  232 => 89,  224 => 84,  217 => 80,  203 => 73,  198 => 70,  192 => 67,  189 => 66,  187 => 65,  179 => 60,  174 => 58,  166 => 52,  148 => 51,  146 => 50,  134 => 43,  116 => 28,  112 => 27,  105 => 23,  99 => 22,  95 => 21,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}
    <div class=\"container shadow\">

        <!-- Heading Row -->
        <div class=\"row my-5\">
            <div class=\"col-lg-10 pt-5\">
                <h1>Top rated video
                    <i class=\"fa active fa-thumbs-up\" style=\"font-size: 36px\"></i>
                </h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-7\">
            <video width=\"550\" controls style=\"border: 1px solid #666666\">
                    <source src=\"{% if video_no_members is not null %}{{ video_no_members }}{% else %}{{ rated[0].path }}{% endif %}\" type=\"video/mp4\">
                </video>
            </div>
            <!-- /.col-lg-8 -->
            <div class=\"col-lg-4 rounded mx-sm-2\" style=\"background-color: #F5F5F5\">
                <h1 class=\"rated-name\">{{ rated[0].title }} </h1>
                <p><b>Uploaded by: </b> {{ rated[0].name }} {{ rated[0].last_name  }}</p>
                <p><b>Rates: </b> {{ rated[0].rates }}
                    <i class=\"fa active fa-thumbs-up\"></i>

                </p>
                <p><b>Duration: </b> {{ rated[0].duration }} minutes</p>
                <a class=\"btn btn-outline-violet my-2 my-sm-0\" href=\"{{path('video_details', {'video':rated[0].id})}}\">Go to details!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Call to Action Well -->
        <div class=\"card text-white bg-secondary my-5 py-4 text-center \">
            <div class=\"col-md-6 mx-auto\">
            <div class=\"card-body\">
                <p class=\"text-white m-0\">Share with your friends:</p>
                <div class=\"input-group mb-3 \">
                    <div class=\"input-group-prepend\" >
                        <span class=\"input-group-text\" id=\"basic-addon3\">URL</span>
                    </div>
                    <input type=\"text\" class=\"form-control\" id=\"basic-url\" aria-describedby=\"basic-addon3\" value=\"{{ url('home') }}video-details/{{ rated[0].id }}\" />
                </div>
            </div>
            </div>
        </div>
        <!-- Content Row -->
        <div class=\"row\">
            {% set places = { 0:'2nd', 1:'3rd',2:'4th' } %}
            {% for place in places %}
                <div class=\"card-deck\" style=\"padding: 10px\">

                    <div class=\"card mb-3\">

                        <div class=\"card-header\">
                            <i class=\"fa active fa-thumbs-up\" style=\"font-size: 20px\"></i>
                            {{ place }}
                            <h4 class=\"card-title rated-name\">
                                {{rated[(loop.index0+1)].title}}
                            </h4>
                        </div>

                        <div class=\"card-body\">
                            {% if not app.user or video_no_members is not null %}

                                <p class=\"card-text text-danger\">Only for <b>Subscribers</b>! <a href=\"{{path('pricing')}}\">Sign up</a> <u>one month</u> trial available.</p>

                            {% endif  %}
                        </div>

                        <video  width=\"100%\" controls>
                            <source src=\"{% if video_no_members is not null %}{{ video_no_members }}{% else %}{{ rated[(loop.index0+1)].path }}{% endif %}\" type=\"video/mp4\">
                        </video>

                        <ul class=\"list-group list-group-flush\">

                            <li class=\"list-group-item\">

                                <b> Rates: </b>{{rated[(loop.index0+1)].rates}}

                            </li>

                            <li class=\"list-group-item\"><b>Duration: </b> {{rated[(loop.index0+1)].duration}} minutes</li>

                        </ul>

                        <div class=\"card-footer\">
                            <a class=\"btn btn-outline-violet my-2 my-sm-0\" href=\"{{path('video_details', {'video':rated[loop.index0+1].id})}}\">Go to details!</a>

                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        <!-- /.row -->

    </div>

{% endblock %}", "front/index.html.twig", "/Users/nico/PhpstormProjects/MetubeMaster/Metub/templates/front/index.html.twig");
    }
}
