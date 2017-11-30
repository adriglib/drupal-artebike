<?php

/* themes/artebike/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_55e508ecb1ca01ec8a440afbdd7a438baab4b4f55011e8679566bb374f219e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 53);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
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

        // line 36
        echo "  ";
        // line 37
        echo "  ";
        // line 38
        echo "    ";
        // line 39
        echo "  ";
        // line 40
        echo "  ";
        // line 41
        echo "  ";
        // line 42
        echo "  ";
        // line 43
        echo "
  ";
        // line 45
        echo "  ";
        // line 46
        echo "    ";
        // line 47
        echo "  ";
        // line 49
        echo "
<div id=\"myNav\" class=\"overlay\">
  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  <div class=\"overlay-content\">
      ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "  </div>
</div>
";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/artebike/templates/block/block--system-menu-block--main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 54,  81 => 53,  75 => 56,  73 => 53,  67 => 49,  65 => 47,  63 => 46,  61 => 45,  58 => 43,  56 => 42,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,);
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
 * Theme override for a menu block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 */
#}
{#{% set heading_id = attributes.id ~ '-menu'|clean_id %}#}
{#<nav role=\"navigation\" aria-labelledby=\"{{ heading_id }}\"{{ attributes|without('role', 'aria-labelledby') }}>#}
  {# Label. If not displayed, we still provide it for screen readers. #}
  {#{% if not configuration.label_display %}#}
    {#{% set title_attributes = title_attributes.addClass('visually-hidden') %}#}
  {#{% endif %}#}
  {#{{ title_prefix }}#}
  {#<h2{{ title_attributes.setAttribute('id', heading_id) }}>{{ configuration.label }}</h2>#}
  {#{{ title_suffix }}#}

  {# Menu. #}
  {#{% block content %}#}
    {#{{ content }}#}
  {#{% endblock %}#}
{#</nav>#}

<div id=\"myNav\" class=\"overlay\">
  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  <div class=\"overlay-content\">
      {% block content %}
          {{ content }}
      {% endblock %}
  </div>
</div>
", "themes/artebike/templates/block/block--system-menu-block--main.html.twig", "D:\\CMS\\Promowebsite\\drupal\\themes\\artebike\\templates\\block\\block--system-menu-block--main.html.twig");
    }
}
