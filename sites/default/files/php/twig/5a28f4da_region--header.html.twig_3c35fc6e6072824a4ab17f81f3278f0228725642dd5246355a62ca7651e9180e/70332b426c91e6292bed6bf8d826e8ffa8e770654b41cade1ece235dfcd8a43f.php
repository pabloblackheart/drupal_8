<?php

/* themes/custom/choapa/templates/region--header.html.twig */
class __TwigTemplate_b8f0412f49adec0987b6a8e388d9589783068c9b87231a9e62a796176258a609 extends Twig_Template
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
        echo "    <header>
        <div class=\"container\">
            <a href=\"#home\" class=\"logo easy\">Tas Choapa</a>
            <!---->
            <div class=\"menu_bar\">
                <a href=\"javascript:void(0)\" class=\"toggle\">Menu</a>
            </div>
            <nav>
                <ul>
                    <li><a href=\"#horarios\" class=\"easy\">Horarios y destinos</a></li>
                    <li><a href=\"#buses\" class=\"easy\">Tipo de buses y asientos</a></li>
                    <li><a href=\"#venta\" class=\"easy\">Puntos de venta</a></li>
                    <li><a href=\"#informacion\" class=\"easy\">Información del viaje</a></li>
                    <li><a href=\"#contacto\" class=\"easy\">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "themes/custom/choapa/templates/region--header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/*     <header>*/
/*         <div class="container">*/
/*             <a href="#home" class="logo easy">Tas Choapa</a>*/
/*             <!---->*/
/*             <div class="menu_bar">*/
/*                 <a href="javascript:void(0)" class="toggle">Menu</a>*/
/*             </div>*/
/*             <nav>*/
/*                 <ul>*/
/*                     <li><a href="#horarios" class="easy">Horarios y destinos</a></li>*/
/*                     <li><a href="#buses" class="easy">Tipo de buses y asientos</a></li>*/
/*                     <li><a href="#venta" class="easy">Puntos de venta</a></li>*/
/*                     <li><a href="#informacion" class="easy">Información del viaje</a></li>*/
/*                     <li><a href="#contacto" class="easy">Contacto</a></li>*/
/*                 </ul>*/
/*             </nav>*/
/*         </div>*/
/*     </header>*/
