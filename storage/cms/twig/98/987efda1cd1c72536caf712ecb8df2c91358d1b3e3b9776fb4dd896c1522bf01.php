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

/* /home/pekhov/Projects/octo.loc/themes/octo/partials/call2action.htm */
class __TwigTemplate_b7ccd4fe25c4f3f2a24d4a7902dcf3258b0ab9988478508e752cca3b47f06849 extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<section class=\"slice slice-lg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card bg-gradient-dark shadow hover-shadow-lg border-0 position-relative zindex-100\">
                    <div class=\"card-body py-5\">
                        <div class=\"d-flex align-items-start\">
                            <div class=\"icon\">
                                <i class=\"fas fa-file-alt text-white\"></i>
                            </div>
                            <div class=\"icon-text\">
                                <h3 class=\"text-white h4\">70+ example pages</h3>
                                <p class=\"text-white mb-0\">You get 70+ pre-built pages for a variety of purposes that makes it the ideal point to start building websites of any kind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-primary shadow hover-shadow-lg border-0 position-relative zindex-100\">
                    <div class=\"card-body py-5\">
                        <div class=\"d-flex align-items-start\">
                            <div class=\"icon text-white\">
                                <i class=\"fas fa-question-circle\"></i>
                            </div>
                            <div class=\"icon-text\">
                                <h5 class=\"h4 text-white\">6 months technical support</h5>
                                <p class=\"mb-0 text-white\">Use our dedicated support email to send your issues or suggestions. We are here to help anytime: <strong>support@webpixels.io</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/pekhov/Projects/octo.loc/themes/octo/partials/call2action.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slice slice-lg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card bg-gradient-dark shadow hover-shadow-lg border-0 position-relative zindex-100\">
                    <div class=\"card-body py-5\">
                        <div class=\"d-flex align-items-start\">
                            <div class=\"icon\">
                                <i class=\"fas fa-file-alt text-white\"></i>
                            </div>
                            <div class=\"icon-text\">
                                <h3 class=\"text-white h4\">70+ example pages</h3>
                                <p class=\"text-white mb-0\">You get 70+ pre-built pages for a variety of purposes that makes it the ideal point to start building websites of any kind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-primary shadow hover-shadow-lg border-0 position-relative zindex-100\">
                    <div class=\"card-body py-5\">
                        <div class=\"d-flex align-items-start\">
                            <div class=\"icon text-white\">
                                <i class=\"fas fa-question-circle\"></i>
                            </div>
                            <div class=\"icon-text\">
                                <h5 class=\"h4 text-white\">6 months technical support</h5>
                                <p class=\"mb-0 text-white\">Use our dedicated support email to send your issues or suggestions. We are here to help anytime: <strong>support@webpixels.io</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/home/pekhov/Projects/octo.loc/themes/octo/partials/call2action.htm", "");
    }
}
