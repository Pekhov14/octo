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

/* /home/pekhov/Projects/octo.loc/themes/octo/partials/footer.htm */
class __TwigTemplate_e91223b5f57b253a6f1c42c673777ed009a121a3a5885df39adecdd17fca564b extends \Twig\Template
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
        $filters = array("theme" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<footer id=\"footer-main\">
    <div class=\"footer footer-dark bg-gradient-primary footer-rotate\">
        <div class=\"container\">
            <div class=\"row pt-md\">
                <div class=\"col-lg-4 mb-5 mb-lg-0\">
                    <a href=\"https://preview.webpixels.io/purpose-website-ui-kit/index.html\">
                        <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/white.png");
        echo "\" alt=\"Footer logo\" style=\"height: 70px;\">
                    </a>
                    <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                </div>
                <div class=\"col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0\">
                    <h6 class=\"heading mb-3\">Account</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/pages/account-profile.html\">Profile</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/pages/account-settings.html\">Settings</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/pages/account-billing.html\">Billing</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/pages/account-notifications.html\">Notifications</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0\">
                    <h6 class=\"heading mb-3\">About</h6>
                    <ul class=\"list-unstyled text-small\">
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Services</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Contact</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Careers</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-sm-4 mb-5 mb-lg-0\">
                    <h6 class=\"heading mb-3\">Company</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Terms</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Privacy</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Support</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"row align-items-center justify-content-md-between py-4 mt-4 delimiter-top\">
                <div class=\"col-md-6\">
                    <div class=\"copyright text-sm font-weight-bold text-center text-md-left\">
                        © 2018-2019 <a href=\"https://webpixels.io/\" class=\"font-weight-bold\" target=\"_blank\">Webpixels</a>. All rights reserved.
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"nav justify-content-center justify-content-md-end mt-3 mt-md-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://dribbble.com/webpixels\" target=\"_blank\">
                                <i class=\"fab fa-dribbble\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://www.instagram.com/webpixelsofficial\" target=\"_blank\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://github.com/webpixels\" target=\"_blank\">
                                <i class=\"fab fa-github\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://www.facebook.com/webpixels\" target=\"_blank\">
                                <i class=\"fab fa-facebook\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/home/pekhov/Projects/octo.loc/themes/octo/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer-main\">
    <div class=\"footer footer-dark bg-gradient-primary footer-rotate\">
        <div class=\"container\">
            <div class=\"row pt-md\">
                <div class=\"col-lg-4 mb-5 mb-lg-0\">
                    <a href=\"https://preview.webpixels.io/purpose-website-ui-kit/index.html\">
                        <img src=\"{{ 'assets/images/white.png'|theme }}\" alt=\"Footer logo\" style=\"height: 70px;\">
                    </a>
                    <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                </div>
                <div class=\"col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0\">
                    <h6 class=\"heading mb-3\">Account</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/pages/account-profile.html\">Profile</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/pages/account-settings.html\">Settings</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/pages/account-billing.html\">Billing</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/pages/account-notifications.html\">Notifications</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0\">
                    <h6 class=\"heading mb-3\">About</h6>
                    <ul class=\"list-unstyled text-small\">
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Services</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Contact</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Careers</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-sm-4 mb-5 mb-lg-0\">
                    <h6 class=\"heading mb-3\">Company</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Terms</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Privacy</a></li>
                        <li><a href=\"https://preview.webpixels.io/purpose-website-ui-kit/#\">Support</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"row align-items-center justify-content-md-between py-4 mt-4 delimiter-top\">
                <div class=\"col-md-6\">
                    <div class=\"copyright text-sm font-weight-bold text-center text-md-left\">
                        © 2018-2019 <a href=\"https://webpixels.io/\" class=\"font-weight-bold\" target=\"_blank\">Webpixels</a>. All rights reserved.
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"nav justify-content-center justify-content-md-end mt-3 mt-md-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://dribbble.com/webpixels\" target=\"_blank\">
                                <i class=\"fab fa-dribbble\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://www.instagram.com/webpixelsofficial\" target=\"_blank\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://github.com/webpixels\" target=\"_blank\">
                                <i class=\"fab fa-github\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"https://www.facebook.com/webpixels\" target=\"_blank\">
                                <i class=\"fab fa-facebook\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>", "/home/pekhov/Projects/octo.loc/themes/octo/partials/footer.htm", "");
    }
}
