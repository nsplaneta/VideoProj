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

/* admin/videos.html.twig */
class __TwigTemplate_c08ff5967a204bf5b04e6dce88689a4d28e71889d4a4d47686132a84a94e118e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainadmin' => [$this, 'block_mainadmin'],
            'customjavascripts' => [$this, 'block_customjavascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/videos.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/videos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_mainadmin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainadmin"));

        // line 4
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "        <h2>{ Videos } </h2>
    ";
        } else {
            // line 6
            echo "\\
        <h2>My rated videos</h2>
    ";
        }
        // line 9
        echo "
<div class=\"table-responsive\">
  <table class=\"table\">
    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Video name</th>
        <th>Link</th>
          ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "        <th scope=\"col\">Category</th>
        <th scope=\"col\">Delete</th>
          ";
        }
        // line 21
        echo "      </tr>
    </thead>
    <tbody>
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 24, $this->source); })()));
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
            // line 25
            echo "      <tr>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
        <td><a target=\"_blank\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video_details", ["video" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></td>
          ";
            // line 29
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 30
                echo "        <td>
            <form action=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_video_category", ["video" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" method=\"POST\">
                <select name=\"video_category\" onchange=\"this.form.submit();\">
                    ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })()), "categorylist", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "                    ";
                    if (( !(null === twig_get_attribute($this->env, $this->source, $context["video"], "category", [], "any", false, false, false, 34)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["video"], "category", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 34))))) {
                        // line 35
                        echo "                        <option selected value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 35), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35), "html", null, true);
                        echo "</option>
                        ";
                    } else {
                        // line 37
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 37), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37), "html", null, true);
                        echo "</option>
                        ";
                    }
                    // line 39
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                    ";
                if ((null === twig_get_attribute($this->env, $this->source, $context["video"], "category", [], "any", false, false, false, 40))) {
                    // line 41
                    echo "                        <option selected value=\"0\">No category</option>
                    ";
                }
                // line 43
                echo "                </select>
            </form>
        </td>
        <td>
            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_video", ["video" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 47), "path" => twig_get_attribute($this->env, $this->source, $context["video"], "path", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" onclick=\"delete_video(event);\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </a>
        </td>
      ";
            }
            // line 52
            echo "      </tr>
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
        // line 54
        echo "    </tbody>
  </table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_customjavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customjavascripts"));

        // line 60
        echo "    ";
        $this->displayParentBlock("customjavascripts", $context, $blocks);
        echo "
    <script>
        function delete_video(e)
        {
            confirm('Are you sure?');
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 60,  224 => 59,  210 => 54,  195 => 52,  187 => 47,  181 => 43,  177 => 41,  174 => 40,  168 => 39,  160 => 37,  152 => 35,  149 => 34,  145 => 33,  140 => 31,  137 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  120 => 25,  103 => 24,  98 => 21,  93 => 18,  91 => 17,  81 => 9,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block mainadmin %}
    {% if is_granted('ROLE_ADMIN') %}
        <h2>{ Videos } </h2>
    {% else %}\\
        <h2>My rated videos</h2>
    {% endif %}

<div class=\"table-responsive\">
  <table class=\"table\">
    <thead class=\"thead-dark\">
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Video name</th>
        <th>Link</th>
          {% if is_granted('ROLE_ADMIN') %}
        <th scope=\"col\">Category</th>
        <th scope=\"col\">Delete</th>
          {% endif %}
      </tr>
    </thead>
    <tbody>
    {% for video in videos %}
      <tr>
        <td>{{loop.index }}</td>
        <td>{{ video.title }}</td>
        <td><a target=\"_blank\" href=\"{{ path('video_details', {'video':video.id}) }}\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></td>
          {% if is_granted('ROLE_ADMIN') %}
        <td>
            <form action=\"{{ path('update_video_category', {'video': video.id}) }}\" method=\"POST\">
                <select name=\"video_category\" onchange=\"this.form.submit();\">
                    {% for category in categories.categorylist %}
                    {% if video.category is not null and video.category.id == category.id %}
                        <option selected value=\"{{ category.id }}\"> {{ category.name }}</option>
                        {% else %}
                            <option value=\"{{ category.id }}\"> {{ category.name }}</option>
                        {% endif %}
                    {% endfor %}
                    {% if video.category is null%}
                        <option selected value=\"0\">No category</option>
                    {% endif %}
                </select>
            </form>
        </td>
        <td>
            <a href=\"{{path('delete_video',{'video':video.id, 'path':video.path})}}\" onclick=\"delete_video(event);\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </a>
        </td>
      {% endif %}
      </tr>
    {% endfor %}
    </tbody>
  </table>
</div>

{% endblock %}
{% block customjavascripts %}
    {{parent()}}
    <script>
        function delete_video(e)
        {
            confirm('Are you sure?');
        }
    </script>
{% endblock %}
", "admin/videos.html.twig", "/home/nico/Shared/PhpstormProjects/MetubeMaster/Metub/templates/admin/videos.html.twig");
    }
}
