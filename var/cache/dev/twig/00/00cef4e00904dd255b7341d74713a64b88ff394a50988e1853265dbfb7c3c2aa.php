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

/* front/includes/_videos_list.html.twig */
class __TwigTemplate_0130a06e2a9e4cfb28e1656292037fe6be48b0f7f0a613dfafc5b37af24ef8cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_videos_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_videos_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 1, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 2
            echo "    ";
            if ( !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 2, $this->source); })()))) {
                // line 3
                echo "        ";
                $context["videoid"] = (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 3, $this->source); })());
                // line 4
                echo "    ";
            } else {
                // line 5
                echo "        ";
                $context["videoid"] = twig_get_attribute($this->env, $this->source, $context["video"], "path", [], "any", false, false, false, 5);
                // line 6
                echo "    ";
            }
            // line 7
            echo " <div class=\"card-deck\" style=\"padding: 10px\">

    <div class=\"card mb-3\"  style=\"border: 1px solid #2D259D; width: 18rem;\">

        <div class=\"card-header\">

        <h5 class=\"card-title\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details", ["video" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getTitle", [], "method", false, false, false, 14), "html", null, true);
            echo "</a>
        </h5>
        </div>

        <div class=\"card-body\">
        ";
            // line 19
            if (( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19) ||  !(null === (isset($context["video_no_members"]) || array_key_exists("video_no_members", $context) ? $context["video_no_members"] : (function () { throw new RuntimeError('Variable "video_no_members" does not exist.', 19, $this->source); })())))) {
                // line 20
                echo "
            <p class=\"card-text text-danger\">Only for <b>Subscribers</b>! <a href=\"";
                // line 21
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
                echo "\">Sign up</a> <u>one month</u> trial available.</p>

        ";
            }
            // line 24
            echo "        </div>

            <video controls>
                <source src=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["videoid"]) || array_key_exists("videoid", $context) ? $context["videoid"] : (function () { throw new RuntimeError('Variable "videoid" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" type=\"video/mp4\">
            </video>

        <ul class=\"list-group list-group-flush\">

            <li class=\"list-group-item\">

                 <b>Rates: </b> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "usersrate", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34), "html", null, true);
            echo "

                <div style=\"color: #2D259D\" class=\"video-list text-right float-right\" >

                    ";
            // line 38
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 39
                echo "                        ";
                echo twig_include($this->env, $context, "front/includes/_likes.html.twig");
                echo "
                    ";
            }
            // line 41
            echo "                </div>

            </li>

            <li class=\"list-group-item\"><b>Duration: </b> ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "getDuration", [], "method", false, false, false, 45), "html", null, true);
            echo " minutes</li>

        </ul>

        <div class=\"card-footer\">

            <b>Comments: </b> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "comments", [], "any", false, false, false, 51), "count", [], "any", false, false, false, 51), "html", null, true);
            echo "
            <div style=\"color: #2D259D\" class=\"video-list text-right float-right\">

            <a class=\"card-link\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details", ["video" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Add a comment
                <svg width=\"24px\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chat-dots\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z\"/>
                    <path d=\"M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                </svg>
            </a>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_videos_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 54,  150 => 51,  141 => 45,  135 => 41,  129 => 39,  127 => 38,  120 => 34,  110 => 27,  105 => 24,  99 => 21,  96 => 20,  94 => 19,  84 => 14,  75 => 7,  72 => 6,  69 => 5,  66 => 4,  63 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for video in videos %}
    {% if video_no_members is not null %}
        {% set videoid = video_no_members %}
    {% else %}
        {% set videoid = video.path %}
    {% endif %}
 <div class=\"card-deck\" style=\"padding: 10px\">

    <div class=\"card mb-3\"  style=\"border: 1px solid #2D259D; width: 18rem;\">

        <div class=\"card-header\">

        <h5 class=\"card-title\">
            <a href=\"{{ path('video_details', {'video':video.id }) }}\">{{video.getTitle()}}</a>
        </h5>
        </div>

        <div class=\"card-body\">
        {% if not app.user or video_no_members is not null   %}

            <p class=\"card-text text-danger\">Only for <b>Subscribers</b>! <a href=\"{{path('pricing')}}\">Sign up</a> <u>one month</u> trial available.</p>

        {% endif  %}
        </div>

            <video controls>
                <source src=\"{{videoid}}\" type=\"video/mp4\">
            </video>

        <ul class=\"list-group list-group-flush\">

            <li class=\"list-group-item\">

                 <b>Rates: </b> {{ video.usersrate.count }}

                <div style=\"color: #2D259D\" class=\"video-list text-right float-right\" >

                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED')  %}
                        {{ include('front/includes/_likes.html.twig') }}
                    {% endif  %}
                </div>

            </li>

            <li class=\"list-group-item\"><b>Duration: </b> {{video.getDuration()}} minutes</li>

        </ul>

        <div class=\"card-footer\">

            <b>Comments: </b> {{ video.comments.count }}
            <div style=\"color: #2D259D\" class=\"video-list text-right float-right\">

            <a class=\"card-link\" href=\"{{path('video_details', {'video':video.id})}}\">Add a comment
                <svg width=\"24px\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chat-dots\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z\"/>
                    <path d=\"M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                </svg>
            </a>
            </div>
        </div>
    </div>
</div>
{% endfor %}", "front/includes/_videos_list.html.twig", "/Users/nico/PhpstormProjects/MetubeMaster/Metub/templates/front/includes/_videos_list.html.twig");
    }
}
