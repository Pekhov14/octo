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

/* /home/pekhov/Projects/octo.loc/themes/octo/layouts/default.htm */
class __TwigTemplate_bb7ee7da5cb52717753e86bf7b264ae6f6c417d01e07354b0832bbf322b2d506 extends \Twig\Template
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
        $tags = array("component" => 9, "styles" => 10, "partial" => 23, "page" => 26, "framework" => 48, "scripts" => 49);
        $filters = array("escape" => 8, "theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\" data-lt-installed=\"true\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.\">
    <meta name=\"author\" content=\"Webpixels\">
   <!-- <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</title> -->
     ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 11
        echo "    <!-- Favicon -->
    <link rel=\"icon\" href=\"https://preview.webpixels.io/purpose-website-ui-kit/assets/img/brand/favicon.png\" type=\"image/png\">
    <!-- Font Awesome 5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/all.min.css");
        echo "\"><!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/swiper.min.css");
        echo "\">
    <!-- Purpose CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/purpose.css");
        echo "\" id=\"stylesheet\">
    <style></style>
</head>

<body class=\"g-sidenav-show g-sidenav-pinned\">

";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "
<div class=\"main-content\">
    ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "</div>

";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/purpose.core.js");
        echo "\"></script>
<!-- Page JS -->
<script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper.min.js");
        echo "\"></script>
<!-- Purpose JS -->
<script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js//purpose.js");
        echo "\"></script><div class=\"mask-body mask-body-light d-xl-none\" data-action=\"sidenav-unpin\" data-target=\"undefined\"></div>
<!-- Demo JS - remove it when starting your project -->
<script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/demo.js");
        echo "\"></script>

<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/purpose.core.js");
        echo "\"></script>
<!-- Page JS -->
<script src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper.min.js");
        echo "\"></script>
<!-- Purpose JS -->
<script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/purpose.js");
        echo "\"></script><div class=\"mask-body mask-body-light d-xl-none\" data-action=\"sidenav-unpin\" data-target=\"undefined\"></div>
<!-- Demo JS - remove it when starting your project -->
<script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/demo.js");
        echo "\"></script>

";
        // line 48
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 50
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/pekhov/Projects/octo.loc/themes/octo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 50,  179 => 49,  168 => 48,  163 => 46,  158 => 44,  153 => 42,  148 => 40,  142 => 37,  137 => 35,  132 => 33,  127 => 31,  124 => 30,  120 => 29,  116 => 27,  114 => 26,  110 => 24,  106 => 23,  97 => 17,  92 => 15,  88 => 14,  83 => 11,  79 => 10,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" data-lt-installed=\"true\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.\">
    <meta name=\"author\" content=\"Webpixels\">
   <!-- <title>{{ this.page.title }}</title> -->
     {% component 'SeoCmsPage' %}
    {% styles %}
    <!-- Favicon -->
    <link rel=\"icon\" href=\"https://preview.webpixels.io/purpose-website-ui-kit/assets/img/brand/favicon.png\" type=\"image/png\">
    <!-- Font Awesome 5 -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/all.min.css'|theme }}\"><!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/swiper.min.css'|theme }}\">
    <!-- Purpose CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/purpose.css'|theme }}\" id=\"stylesheet\">
    <style></style>
</head>

<body class=\"g-sidenav-show g-sidenav-pinned\">

{% partial 'header' %}

<div class=\"main-content\">
    {% page %}
</div>

{% partial 'footer' %}
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src=\"{{ 'assets/js/purpose.core.js'|theme }}\"></script>
<!-- Page JS -->
<script src=\"{{ 'assets/js/swiper.min.js'|theme }}\"></script>
<!-- Purpose JS -->
<script src=\"{{ 'assets/js//purpose.js'|theme }}\"></script><div class=\"mask-body mask-body-light d-xl-none\" data-action=\"sidenav-unpin\" data-target=\"undefined\"></div>
<!-- Demo JS - remove it when starting your project -->
<script src=\"{{ 'assets/js/demo.js'|theme }}\"></script>

<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src=\"{{ 'assets/js/purpose.core.js'|theme }}\"></script>
<!-- Page JS -->
<script src=\"{{ 'assets/js/swiper.min.js'|theme }}\"></script>
<!-- Purpose JS -->
<script src=\"{{ 'assets/js/purpose.js'|theme }}\"></script><div class=\"mask-body mask-body-light d-xl-none\" data-action=\"sidenav-unpin\" data-target=\"undefined\"></div>
<!-- Demo JS - remove it when starting your project -->
<script src=\"{{ 'assets/js/demo.js'|theme }}\"></script>

{% framework extras %}
{% scripts %}

</body>
</html>", "/home/pekhov/Projects/octo.loc/themes/octo/layouts/default.htm", "");
    }
}
