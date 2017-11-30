<?php

/* @artebike/partials/footer.html.twig */
class __TwigTemplate_a80a945c58f81c235c2d2fea07251fbb7853de73e22a1a9ce2aa97d757934a03 extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        echo "<footer class=\"container-fluid black-bg\">
    <div class=\"row\">
        <div class=\"row text-sm-center mt-5 mb-5 footer\" style=\"margin: 0 auto;\">
            ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 5
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
            ";
        }
        // line 7
        echo "        </div>
    </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "@artebike/partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"container-fluid black-bg\">
    <div class=\"row\">
        <div class=\"row text-sm-center mt-5 mb-5 footer\" style=\"margin: 0 auto;\">
            {% if page.footer %}
                {{ page.footer }}
            {% endif %}
        </div>
    </div>
    </div>
</footer>", "@artebike/partials/footer.html.twig", "D:\\CMS\\Promowebsite\\drupal\\themes\\artebike\\templates\\partials\\footer.html.twig");
    }
}
