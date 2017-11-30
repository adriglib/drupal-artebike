<?php

/* themes/artebike/templates/form/container.html.twig */
class __TwigTemplate_eba2f91a6f4ba2d4148a3941c387ac8c8a8e8e29ab819b1683e20aa562d45b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 22
        echo "
<div>";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/artebike/templates/form/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override of a container used to wrap child elements.
 *
 * Used for grouped form items. Can also be used as a theme wrapper for any
 * renderable element, to surround it with a <div> and HTML attributes.
 * See \\Drupal\\Core\\Render\\Element\\RenderElement for more
 * information on the #theme_wrappers render array property, and
 * \\Drupal\\Core\\Render\\Element\\container for usage of the container render
 * element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - children: The rendered child elements of the container.
 * - has_parent: A flag to indicate that the container has one or more parent
     containers.
 *
 * @see template_preprocess_container()
 */
#}

<div>{{ children }}</div>
", "themes/artebike/templates/form/container.html.twig", "D:\\CMS\\Promowebsite\\drupal\\themes\\artebike\\templates\\form\\container.html.twig");
    }
}
