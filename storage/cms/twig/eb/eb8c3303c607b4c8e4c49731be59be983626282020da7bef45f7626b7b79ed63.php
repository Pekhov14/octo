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
        $filters = array("slice" => 10, "escape" => 11, "date" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['slice', 'escape', 'date'],
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 5
            echo "<div class=\"swiper-slide p-4 swiper-slide-active\" style=\"width: 338.333px;\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <div>
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "featured_images", [], "any", false, false, true, 10), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 11
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\" class=\"avatar  rounded-circle\">
                        <small class=\"d-block text-muted\">";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "published_at", [], "any", false, false, true, 12), 12, $this->source), "d:M"), "html", null, true);
                echo "</small>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                </div>
                <div class=\"pl-3\">
                    <h5 class=\"h6 mb-0\">";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</h5>
                </div>
            </div>
            <p class=\"mt-4 lh-180\">";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comment"], "excerpt", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</p>
            <span class=\"static-rating static-rating-sm\">
                    <i class=\"star fas fa-star voted\"></i>
                    <i class=\"star fas fa-star voted\"></i>
                    <i class=\"star fas fa-star voted\"></i>
                    <i class=\"star fas fa-star voted\"></i>
                    <i class=\"star fas fa-star voted\"></i>
                </span>
        </div>
    </div>
</div>
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
        return array (  108 => 19,  102 => 16,  98 => 14,  90 => 12,  83 => 11,  79 => 10,  72 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set comments = blogPosts.posts %}


{% for comment in comments %}
<div class=\"swiper-slide p-4 swiper-slide-active\" style=\"width: 338.333px;\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <div>
                    {% for image in comment.featured_images|slice(0, 1) %}
                        <img alt=\"{{ comment.title }}\" src=\"{{ image.path }}\" class=\"avatar  rounded-circle\">
                        <small class=\"d-block text-muted\">{{ comment.published_at|date('d:M') }}</small>
                    {% endfor %}
                </div>
                <div class=\"pl-3\">
                    <h5 class=\"h6 mb-0\">{{ comment.title }}</h5>
                </div>
            </div>
            <p class=\"mt-4 lh-180\">{{ comment.excerpt }}</p>
            <span class=\"static-rating static-rating-sm\">
                    <i class=\"star fas fa-star voted\"></i>
                    <i class=\"star fas fa-star voted\"></i>
                    <i class=\"star fas fa-star voted\"></i>
                    <i class=\"star fas fa-star voted\"></i>
                    <i class=\"star fas fa-star voted\"></i>
                </span>
        </div>
    </div>
</div>
{% endfor %}", "/home/pekhov/Projects/octo.loc/themes/octo/partials/blog-slider.htm", "");
    }
}
