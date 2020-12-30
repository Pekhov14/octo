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

/* /home/pekhov/Projects/octo.loc/themes/octo/partials/blog-slider.htm */
class __TwigTemplate_87db850287c9cd251bd65bab6ce8767e961211f7b65e2d2a009183e386489f4b extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1, "for" => 4);
        $filters = array("escape" => 7, "slice" => 8, "date" => 25);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'slice', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["comments"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 5
            echo "<div class=\"col-lg-4\">
    <div class=\"card hover-shadow-lg hover-translate-y-n10\">
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "url", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "featured_images", [], "any", false, false, true, 8), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 9
                echo "                <img alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" class=\"card-img-top\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </a>
        <div class=\"card-body py-5 text-center\">
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" class=\"d-block h5 lh-150\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</a>
        </div>
        <div class=\"card-footer delimiter-top\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "excerpt", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col text-center\">
                    <ul class=\"list-inline mb-0\">
                        <li class=\"list-inline-item pr-4\">
                            <a href=\"#\" class=\"text-muted\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "published_at", [], "any", false, false, true, 25), 25, $this->source), "d M Y"), "html", null, true);
            echo "</a>
                        </li>
                        <li class=\"list-inline-item pr-4\">
                            <a href=\"#\" class=\"text-muted\"><i class=\"fas fa-eye mr-1 text-muted\"></i> &#128065; ";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "views", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "        ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noPostsMessage"] ?? null), 37, $this->source), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/pekhov/Projects/octo.loc/themes/octo/partials/blog-slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 37,  126 => 28,  120 => 25,  110 => 18,  100 => 13,  96 => 11,  85 => 9,  81 => 8,  77 => 7,  73 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set comments = blogPosts.posts %}


{% for comment in comments %}
<div class=\"col-lg-4\">
    <div class=\"card hover-shadow-lg hover-translate-y-n10\">
        <a href=\"{{ comment.url }}\">
            {% for image in comment.featured_images|slice(0, 1) %}
                <img alt=\"{{ comment.title }}\" src=\"{{ image.path }}\" class=\"card-img-top\">
            {% endfor %}
        </a>
        <div class=\"card-body py-5 text-center\">
            <a href=\"{{ comment.url }}\" class=\"d-block h5 lh-150\">{{ comment.title }}</a>
        </div>
        <div class=\"card-footer delimiter-top\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <p>{{ comment.excerpt }}</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col text-center\">
                    <ul class=\"list-inline mb-0\">
                        <li class=\"list-inline-item pr-4\">
                            <a href=\"#\" class=\"text-muted\">{{ comment.published_at|date('d M Y') }}</a>
                        </li>
                        <li class=\"list-inline-item pr-4\">
                            <a href=\"#\" class=\"text-muted\"><i class=\"fas fa-eye mr-1 text-muted\"></i> &#128065; {{ comment.views }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    {% else %}
        {{ noPostsMessage }}
{% endfor %}", "/home/pekhov/Projects/octo.loc/themes/octo/partials/blog-slider.htm", "");
    }
}
