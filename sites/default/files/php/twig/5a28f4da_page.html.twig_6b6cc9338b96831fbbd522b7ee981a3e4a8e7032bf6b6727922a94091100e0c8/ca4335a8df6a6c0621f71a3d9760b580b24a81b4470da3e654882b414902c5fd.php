<?php

/* themes/custom/choapa/templates/page.html.twig */
class __TwigTemplate_c52323173b59caa98021795c6f04878dc4bac54f775fdd5714e30a778cff1318 extends Twig_Template
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
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        echo "  \t<header role=\"banner\">
    \t";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  \t</header>
  \t";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    <footer>
        <div class=\"debug\">
            <div class=\"container\">
                <p>Para una atención personalizada</p>
            </div>
        </div>
        <div class=\"bottom\">
            <div class=\"container\">
                <div class=\"logo\">Tas-Choapa</div>
                <div>
                    <ul>
                        <li><span>Chile</span></li>
                        <li>Teléfono: : +56 228227509 </li>
                        <li>Horario de atención: Lunes a Domingo 07:30 a 22:15 hrs</li>
                    </ul>
                    <ul>
                        <li><span>Perú</span></li>
                        <li>Teléfono: : +56 228227509 </li>
                        <li>Horario de atención: Lunes a Domingo 07:30 a 22:15 hrs</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><span>Argentina</span></li>
                        <li>Teléfono: : +56 228227509 </li>
                        <li>Horario de atención: Lunes a Domingo 07:30 a 22:15 hrs</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/choapa/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  46 => 2,  43 => 1,);
    }
}
/*   	<header role="banner">*/
/*     	{{ page.header }}*/
/*   	</header>*/
/*   	{{ page.content }}*/
/*     <footer>*/
/*         <div class="debug">*/
/*             <div class="container">*/
/*                 <p>Para una atención personalizada</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="bottom">*/
/*             <div class="container">*/
/*                 <div class="logo">Tas-Choapa</div>*/
/*                 <div>*/
/*                     <ul>*/
/*                         <li><span>Chile</span></li>*/
/*                         <li>Teléfono: : +56 228227509 </li>*/
/*                         <li>Horario de atención: Lunes a Domingo 07:30 a 22:15 hrs</li>*/
/*                     </ul>*/
/*                     <ul>*/
/*                         <li><span>Perú</span></li>*/
/*                         <li>Teléfono: : +56 228227509 </li>*/
/*                         <li>Horario de atención: Lunes a Domingo 07:30 a 22:15 hrs</li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div>*/
/*                     <ul>*/
/*                         <li><span>Argentina</span></li>*/
/*                         <li>Teléfono: : +56 228227509 </li>*/
/*                         <li>Horario de atención: Lunes a Domingo 07:30 a 22:15 hrs</li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
