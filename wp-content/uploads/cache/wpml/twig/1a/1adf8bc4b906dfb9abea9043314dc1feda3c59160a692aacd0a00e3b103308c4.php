<?php

/* multi_currencies.twig */
class __TwigTemplate_048cfe74419c10152694e1478b7512d748936e168fefd2e522e8080273678546 extends Twig_Template
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
        // line 1
        echo "<div class=\"wcml-section\">
    <div class=\"wcml-section-header\">
        <h3>
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "mc_missing", array()), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"wcml-section-content\">
        <ul class=\"wcml-status-list\">
            <li>
                ";
        // line 10
        if ( !(isset($context["mc_enabled"]) ? $context["mc_enabled"] : null)) {
            // line 11
            echo "                    <i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "not_enabled", array()), "html", null, true);
            echo "</i>
                ";
        } else {
            // line 13
            echo "                    ";
            if (twig_test_empty((isset($context["sec_currencies"]) ? $context["sec_currencies"] : null))) {
                // line 14
                echo "                        <i class=\"otgs-ico-warning\"></i>
                        ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "no_secondary", array()), "html", null, true);
                echo "

                        <p>
                            <a class=\"button-secondary aligncenter\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["add_cur_link"]) ? $context["add_cur_link"] : null), "html", null, true);
                echo "\">
                                ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "add_cur", array()), "html", null, true);
                echo "
                            </a>
                        </p>

                    ";
            } else {
                // line 24
                echo "                        <i class=\"otgs-ico-ok\"></i>
                        ";
                // line 25
                echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "sec_currencies", array()), (isset($context["sec_currencies"]) ? $context["sec_currencies"] : null)), "html", null, true);
                echo "
                    ";
            }
            // line 27
            echo "                ";
        }
        // line 28
        echo "            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "multi_currencies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  73 => 27,  68 => 25,  65 => 24,  57 => 19,  53 => 18,  47 => 15,  44 => 14,  41 => 13,  35 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "multi_currencies.twig", "/var/customers/webs/AprilJune/entwicklung/wallisch/wp-content/plugins/woocommerce-multilingual/templates/status/multi_currencies.twig");
    }
}