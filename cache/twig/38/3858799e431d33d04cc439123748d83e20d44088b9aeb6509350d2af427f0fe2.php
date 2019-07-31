<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/logo.html.twig */
class __TwigTemplate_302294a58af1d1861e45c3a1a9f5006dedce62f2a0f3e581d6621843f7c38a9a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc(((($context["mobile"] ?? null)) ? ("custom_logo_mobile") : ("custom_logo")));
        // line 2
        echo "<a style=\"margin:auto\" href=\"";
        echo ($context["home_url"] ?? null);
        echo "\" class=\"navbar-brand mr-10\">
  <img src=\"";
        // line 3
        echo ($context["theme_url"] ?? null);
        echo "/images/FSOW_THECAMP.svg\" />
</a>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set logo = theme_var(mobile ? 'custom_logo_mobile' : 'custom_logo') %}
<a style=\"margin:auto\" href=\"{{ home_url }}\" class=\"navbar-brand mr-10\">
  <img src=\"{{ theme_url }}/images/FSOW_THECAMP.svg\" />
</a>
", "partials/logo.html.twig", "/Applications/MAMP/htdocs/FoWcuriosities/user/themes/quark/templates/partials/logo.html.twig");
    }
}
