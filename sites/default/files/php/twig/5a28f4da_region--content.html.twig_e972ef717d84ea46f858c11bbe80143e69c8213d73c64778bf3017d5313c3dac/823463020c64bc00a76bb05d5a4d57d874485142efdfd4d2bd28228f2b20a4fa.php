<?php

/* themes/custom/choapa/templates/region--content.html.twig */
class __TwigTemplate_16acd1b3cdf22bb371f0f4f1380b6c4d4f750d1b1bff84d03efa72e29e372876 extends Twig_Template
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
        echo "    <div class=\"login\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "</div>
    <!---->
    <section class=\"slider\" id=\"home\">
        <div class=\"alerta\">
            <p class=\"container\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
        </div>
        <div class=\"magazine\">
            <ul class=\"slides\">
                <li>
                    <img src=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/slide.jpg\">
                </li>
                <li>
                    <img src=\"";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/slide.jpg\">
                </li>
            </ul>
        </div>
    </section>
    <!---->
    <section id=\"horarios\">
        <div class=\"step1\">
            <h2>Conoce la disponibilidad y valores de nuestros destinos</h2>
            <form class=\"container\">
                <fieldset>
                    <label>¿De dónde partes?</label>
                    <fieldset>
                        <select id=\"de_donde\" name=\"de_donde\">
                            <option>Eliga una opción</option>
                            <option>Lima</option>
                            <option>Mensoza</option>
                            <option>Santiago</option>
                            <option>Valparaiso</option>
                        </select>
                    </fieldset>
                </fieldset>
                <fieldset>
                    <label>¿A dónde quieres ir?</label>
                    <fieldset>
                        <select>
                            <option>opcion</option>
                            <option>opcion</option>
                            <option>opcion</option>
                        </select>
                    </fieldset>
                </fieldset>
                <fieldset>
                    <label>Ida</label>
                    <fieldset>
                        <input type=\"date\">
                    </fieldset>
                </fieldset>
                <fieldset>
                    <label>Vuelta (Opcional)</label>
                    <fieldset>
                        <input type=\"date\">
                    </fieldset>
                </fieldset>
                <fieldset>
                    <button>Buscar</button>
                </fieldset>
            </form>
        </div>
        <div class=\"step2\">
            <div class=\"info1 container\">
                <ul class=\"red\">
                    <li>Santiago/Lima</li>
                    <li>06/02/2016</li>
                    <li class=\"term\">Terminal de Santiago/Terminal de Lima</li>
                </ul>
                <ul class=\"grey\">
                    <li>Lima/Santiago</li>
                    <li>10/02/2016</li>
                    <li class=\"term\">Terminal de Lima/Terminal de Santiago</li>
                </ul>
            </div>
            <div class=\"info2 container\">
                <div class=\"horario\">
                    <ul>
                        <li class=\"red\">Horario de ida</li>
                        <li>11:30 AM</li>
                        <li class=\"grey\">Horario de vuelta</li>
                        <li>11:30 AM</li>
                    </ul>
                    <ul>
                        <li class=\"red\">Duración del viaje</li>
                        <li>54:00 hrs</li>
                        <li class=\"grey\">Duración del viaje</li>
                        <li>54:00 hrs</li>
                    </ul>
                    <ul>
                        <li class=\"red\">Intermedios</li>
                        <li>La Serena - Arica</li>
                        <li class=\"grey\">Intermedios</li>
                        <li>Arica - La Serena</li>
                    </ul>
                    <ul>
                        <li class=\"red\">Servicio a bordo</li>
                        <li>Desayuno
                            <br/>Almuerzo
                            <br/>Cena</li>
                        <li class=\"grey\">Servicio a bordo</li>
                        <li>Desayuno
                            <br/>Almuerzo
                            <br/>Cena</li>
                    </ul>
                </div>
                <div class=\"moneda\">
                    <ul>
                        <li class=\"red\">Moneda</li>
                        <li><a href=\"\">USD</a></li>
                        <li><a href=\"\">CLP</a></li>
                        <li><a href=\"\">ARS</a></li>
                        <li><a href=\"\">PEN</a></li>
                    </ul>
                </div>
                <div class=\"valor\">
                    <ul>
                        <li class=\"red\">Valor</li>
                        <li>Valor ida: <span>\$99.999</span></li>
                        <li>Valor ida: <span>\$99.999</span></li>
                        <li>Valor ida y vuelta: <span>\$99.999</span></li>
                    </ul>
                </div>
                <a href=\"#venta\" class=\"easy\">¿Dónde comprar?</a>
            </div>
        </div>
    </section>
    <!---->
    <section id=\"buses\">
        <div class=\"container\">
            <div class=\"b-mod one\">
                <h3>Carcterísticas del Bus</h3>
                <img src=\"";
        // line 132
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/bus-right.png\">
            </div>
            <ul class=\"b-list\">
                <li>
                    <img src=\"";
        // line 136
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/m-conductores.png\">
                    <h3>Nuestros conductores</h3>
                    <p>Nuestras tripulaciones están altamente calificado para brindar un servicio Seguro, Cómodo y de Excelencia, garantizados por controles periodicos y capacitaciones constantes.</p>
                </li>
                <li>
                    <img src=\"";
        // line 141
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/m-servicio.png\">
                    <h3>Servicios y Alimentación</h3>
                    <p>Entretención a bordo.</p>
                    <p> Buses Climatizados: Nuestros buses cuentan con salones climatizados para hacer de sus viajes una grata experiencia.</p>
                    <p>Snacks.</p>
                </li>
                <li>
                    <img src=\"";
        // line 148
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/m-equipaje.png\">
                    <h3>Equipaje</h3>
                    <p>Nuestra flota esta equipada con amplios maleteros para el traslado de grandes volumenes de equipaje, consulte los costos asociados a traslado de Sobre Equipaje.</p>
                </li>
            </ul>
            <div class=\"b-mod two\">
                <h3>La flota más moderna de sudamérica</h3>
                <img src=\"";
        // line 155
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/bus-left.png\">
            </div>
            <ul class=\"b-list\">
                <li>
                    <img src=\"";
        // line 159
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/m-inclinacion.png\">
                    <h3>Grado de inclinación</h3>
                    <p>Semica cama : hasta 140° inclinación.</p>
                    <p>Cama: hasta 155° Inclinación.</p>
                </li>
                <li>
                    <img src=\"";
        // line 165
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/m-separacion.png\">
                    <h3>Separación</h3>
                    <p>Semica cama : 75 cm.</p>
                    <p>Cama: 90 cm.</p>
                </li>
                <li>
                    <img src=\"";
        // line 171
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/m-asientos.png\">
                    <h3>Cantidad de asientos</h3>
                    <p>Ruta Lima: 46 asientos.</p>
                    <p>Ruta Mendoza: 39 asientos.</p>
                </li>
            </ul>
            <div class=\"buses\">
                <ul class=\"slides\">
                    <li>
                        <img src=\"";
        // line 180
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/carrusel1.jpg\">
                    </li>
                    <li>
                        <img src=\"";
        // line 183
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/carrusel2.jpg\">
                    </li>
                    <li>
                        <img src=\"";
        // line 186
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/carrusel3.jpg\">
                    </li>
                    <li>
                        <img src=\"";
        // line 189
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/carrusel1.jpg\">
                    </li>
                    <li>
                        <img src=\"";
        // line 192
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/carrusel2.jpg\">
                    </li>
                    <li>
                        <img src=\"";
        // line 195
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/carrusel3.jpg\">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!---->
    <section id=\"venta\">
        <div class=\"container\">
            <h2>¿Dónde comprar tu pasaje?</h2>
            <form>
                <fieldset>
                    <label>Seleccionar País</label>
                    <fieldset>
                        <select id=\"pto_venta_pais\" name=\"pto_venta_pais\">
                            <option>Seleccionar País</option>
                            <option value=\"argentina\">Argentina</option>
                            <option value=\"chile\">Chile</option>
                            <option value=\"peru\">Perú</option>
                        </select>
                    </fieldset>
                </fieldset>
                <fieldset>
                    <label>Seleccionar Región</label>
                    <fieldset>
                        <select id=\"pto_venta_region\" name=\"pto_venta_region\">
                            <option value=''>Selecticione una región</option>
                        </select>
                    </fieldset>
                </fieldset>
                <fieldset>
                    <label>Seleccionar Ciudad</label>
                    <fieldset>
                        <select id=\"pto_venta_ciudad\" name=\"pto_venta_ciudad\">
                            <option value=''>Selecticione una ciudad</option>
                        </select>
                    </fieldset>
                </fieldset>
                <fieldset>
                    <button>Buscar</button>
                </fieldset>
                <fieldset class=\"map\">
                    <button>¿Quieres saber cuál es tu sucursal más cercana?</button>
                    <fieldset>
                        <div id=\"map\" style=\"width: 100%; height: 450px;\"></div>
                        <!--iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.5947824715645!2d-58.39500178499486!3d-34.58911846423235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaa2ec152135%3A0x9b3e5dc6f58c526!2sNewport+Pub!5e0!3m2!1ses!2scl!4v1459715539840\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe-->
                    </fieldset>
                </fieldset>
            </form>
        </div>
    </section>
    <!---->
    <section id=\"informacion\">
        <h2>Información importante a considerar</h2>
        <!---->
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab1\">Chile</a></li>
                <li><a href=\"#tab2\">Argentina</a></li>
                <li><a href=\"#tab3\">Perú</a></li>
            </ul>
            <div class=\"contenido\">
                <div id=\"tab1\">
                    <div class=\"subtab\">
                        <ul>
                            <li>
                                <a href=\"#subtab1\"><img src=\"";
        // line 261
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/documentos.jpg\">Documentos</a>
                            </li>
                            <li>
                                <a href=\"#subtab2\"><img src=\"";
        // line 264
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/ninos.jpg\">Niños</a>
                            </li>
                            <li>
                                <a href=\"#subtab3\"><img src=\"";
        // line 267
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/kilos.jpg\">Kilos</a>
                            </li>
                        </ul>
                        <div id=\"subtab1\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 273
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info2.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                        </div>
                        <div id=\"subtab2\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 289
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info3.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                        </div>
                        <div id=\"subtab3\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 305
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info1.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!---->
                <div id=\"tab2\">
                    <div class=\"subtab\">
                        <ul>
                            <li>
                                <a href=\"#subtab1\"><img src=\"";
        // line 325
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/documentos.jpg\">Documentos</a>
                            </li>
                            <li>
                                <a href=\"#subtab2\"><img src=\"";
        // line 328
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/ninos.jpg\">Niños</a>
                            </li>
                            <li>
                                <a href=\"#subtab3\"><img src=\"";
        // line 331
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/kilos.jpg\">Kilos</a>
                            </li>
                        </ul>
                        <div id=\"subtab1\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 337
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info1.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                        </div>
                        <div id=\"subtab2\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 353
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info2.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                        </div>
                        <div id=\"subtab3\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 369
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info3.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!---->
                <div id=\"tab3\">
                    <div class=\"subtab\">
                        <ul>
                            <li>
                                <a href=\"#subtab1\"><img src=\"";
        // line 389
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/documentos.jpg\">Documentos</a>
                            </li>
                            <li>
                                <a href=\"#subtab2\"><img src=\"";
        // line 392
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/ninos.jpg\">Niños</a>
                            </li>
                            <li>
                                <a href=\"#subtab3\"><img src=\"";
        // line 395
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/kilos.jpg\">Kilos</a>
                            </li>
                        </ul>
                        <div id=\"subtab1\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 401
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info3.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                        </div>
                        <div id=\"subtab2\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 417
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info2.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                            </article>
                        </div>
                        <div id=\"subtab3\">
                            <article>
                                <div class=\"img\">
                                    <img src=\"";
        // line 434
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/img/info1.jpg\">
                                </div>
                                <div class=\"info\">
                                    <h3>¿Qué documentos requiero para viajes con niños?</h3>
                                    <p>Pasaporte o Cedula Identidad.</p>
                                    <p>Certificado de nacimiento. </p>
                                    <p>Permiso Notarial en triplicado.</p>
                                    <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>
                                    <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>
                                    <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
    </section>
    <!---->
    <section id=\"contacto\">
        <div class=\"container\">
            <h2>¿Tienes alguna duda?</h2>
            <form id=\"form\" name=\"form\" action=\"\" method=\"post\">
                <fieldset>
                    <label>* Nombre</label>
                    <input type=\"text\" name=\"nombre\" id=\"nombre\" >
                </fieldset>
                <fieldset>
                    <label>* Email</label>
                    <input type=\"text\" name=\"email\" id=\"email\" >
                </fieldset>
                <fieldset>
                    <label>* Mensaje</label>
                    <textarea name=\"mensaje\" id=\"mensaje\" ></textarea>
                </fieldset>
                <fieldset>
                    captcha
                </fieldset>
                <fieldset>
                    <button type=\"submit\">Enviar mensaje</button>
                </fieldset>
            </form>
        </div>
    </section>
    <!---->";
    }

    public function getTemplateName()
    {
        return "themes/custom/choapa/templates/region--content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 434,  559 => 417,  540 => 401,  531 => 395,  525 => 392,  519 => 389,  496 => 369,  477 => 353,  458 => 337,  449 => 331,  443 => 328,  437 => 325,  414 => 305,  395 => 289,  376 => 273,  367 => 267,  361 => 264,  355 => 261,  286 => 195,  280 => 192,  274 => 189,  268 => 186,  262 => 183,  256 => 180,  244 => 171,  235 => 165,  226 => 159,  219 => 155,  209 => 148,  199 => 141,  191 => 136,  184 => 132,  62 => 13,  56 => 10,  43 => 1,);
    }
}
/*     <div class="login">{{ page.secondary_menu }}</div>*/
/*     <!---->*/
/*     <section class="slider" id="home">*/
/*         <div class="alerta">*/
/*             <p class="container">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>*/
/*         </div>*/
/*         <div class="magazine">*/
/*             <ul class="slides">*/
/*                 <li>*/
/*                     <img src="{{ base_path ~ directory }}/img/slide.jpg">*/
/*                 </li>*/
/*                 <li>*/
/*                     <img src="{{ base_path ~ directory }}/img/slide.jpg">*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </section>*/
/*     <!---->*/
/*     <section id="horarios">*/
/*         <div class="step1">*/
/*             <h2>Conoce la disponibilidad y valores de nuestros destinos</h2>*/
/*             <form class="container">*/
/*                 <fieldset>*/
/*                     <label>¿De dónde partes?</label>*/
/*                     <fieldset>*/
/*                         <select id="de_donde" name="de_donde">*/
/*                             <option>Eliga una opción</option>*/
/*                             <option>Lima</option>*/
/*                             <option>Mensoza</option>*/
/*                             <option>Santiago</option>*/
/*                             <option>Valparaiso</option>*/
/*                         </select>*/
/*                     </fieldset>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <label>¿A dónde quieres ir?</label>*/
/*                     <fieldset>*/
/*                         <select>*/
/*                             <option>opcion</option>*/
/*                             <option>opcion</option>*/
/*                             <option>opcion</option>*/
/*                         </select>*/
/*                     </fieldset>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <label>Ida</label>*/
/*                     <fieldset>*/
/*                         <input type="date">*/
/*                     </fieldset>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <label>Vuelta (Opcional)</label>*/
/*                     <fieldset>*/
/*                         <input type="date">*/
/*                     </fieldset>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <button>Buscar</button>*/
/*                 </fieldset>*/
/*             </form>*/
/*         </div>*/
/*         <div class="step2">*/
/*             <div class="info1 container">*/
/*                 <ul class="red">*/
/*                     <li>Santiago/Lima</li>*/
/*                     <li>06/02/2016</li>*/
/*                     <li class="term">Terminal de Santiago/Terminal de Lima</li>*/
/*                 </ul>*/
/*                 <ul class="grey">*/
/*                     <li>Lima/Santiago</li>*/
/*                     <li>10/02/2016</li>*/
/*                     <li class="term">Terminal de Lima/Terminal de Santiago</li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="info2 container">*/
/*                 <div class="horario">*/
/*                     <ul>*/
/*                         <li class="red">Horario de ida</li>*/
/*                         <li>11:30 AM</li>*/
/*                         <li class="grey">Horario de vuelta</li>*/
/*                         <li>11:30 AM</li>*/
/*                     </ul>*/
/*                     <ul>*/
/*                         <li class="red">Duración del viaje</li>*/
/*                         <li>54:00 hrs</li>*/
/*                         <li class="grey">Duración del viaje</li>*/
/*                         <li>54:00 hrs</li>*/
/*                     </ul>*/
/*                     <ul>*/
/*                         <li class="red">Intermedios</li>*/
/*                         <li>La Serena - Arica</li>*/
/*                         <li class="grey">Intermedios</li>*/
/*                         <li>Arica - La Serena</li>*/
/*                     </ul>*/
/*                     <ul>*/
/*                         <li class="red">Servicio a bordo</li>*/
/*                         <li>Desayuno*/
/*                             <br/>Almuerzo*/
/*                             <br/>Cena</li>*/
/*                         <li class="grey">Servicio a bordo</li>*/
/*                         <li>Desayuno*/
/*                             <br/>Almuerzo*/
/*                             <br/>Cena</li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="moneda">*/
/*                     <ul>*/
/*                         <li class="red">Moneda</li>*/
/*                         <li><a href="">USD</a></li>*/
/*                         <li><a href="">CLP</a></li>*/
/*                         <li><a href="">ARS</a></li>*/
/*                         <li><a href="">PEN</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="valor">*/
/*                     <ul>*/
/*                         <li class="red">Valor</li>*/
/*                         <li>Valor ida: <span>$99.999</span></li>*/
/*                         <li>Valor ida: <span>$99.999</span></li>*/
/*                         <li>Valor ida y vuelta: <span>$99.999</span></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <a href="#venta" class="easy">¿Dónde comprar?</a>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!---->*/
/*     <section id="buses">*/
/*         <div class="container">*/
/*             <div class="b-mod one">*/
/*                 <h3>Carcterísticas del Bus</h3>*/
/*                 <img src="{{ base_path ~ directory }}/img/bus-right.png">*/
/*             </div>*/
/*             <ul class="b-list">*/
/*                 <li>*/
/*                     <img src="{{ base_path ~ directory }}/img/m-conductores.png">*/
/*                     <h3>Nuestros conductores</h3>*/
/*                     <p>Nuestras tripulaciones están altamente calificado para brindar un servicio Seguro, Cómodo y de Excelencia, garantizados por controles periodicos y capacitaciones constantes.</p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <img src="{{ base_path ~ directory }}/img/m-servicio.png">*/
/*                     <h3>Servicios y Alimentación</h3>*/
/*                     <p>Entretención a bordo.</p>*/
/*                     <p> Buses Climatizados: Nuestros buses cuentan con salones climatizados para hacer de sus viajes una grata experiencia.</p>*/
/*                     <p>Snacks.</p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <img src="{{ base_path ~ directory }}/img/m-equipaje.png">*/
/*                     <h3>Equipaje</h3>*/
/*                     <p>Nuestra flota esta equipada con amplios maleteros para el traslado de grandes volumenes de equipaje, consulte los costos asociados a traslado de Sobre Equipaje.</p>*/
/*                 </li>*/
/*             </ul>*/
/*             <div class="b-mod two">*/
/*                 <h3>La flota más moderna de sudamérica</h3>*/
/*                 <img src="{{ base_path ~ directory }}/img/bus-left.png">*/
/*             </div>*/
/*             <ul class="b-list">*/
/*                 <li>*/
/*                     <img src="{{ base_path ~ directory }}/img/m-inclinacion.png">*/
/*                     <h3>Grado de inclinación</h3>*/
/*                     <p>Semica cama : hasta 140° inclinación.</p>*/
/*                     <p>Cama: hasta 155° Inclinación.</p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <img src="{{ base_path ~ directory }}/img/m-separacion.png">*/
/*                     <h3>Separación</h3>*/
/*                     <p>Semica cama : 75 cm.</p>*/
/*                     <p>Cama: 90 cm.</p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <img src="{{ base_path ~ directory }}/img/m-asientos.png">*/
/*                     <h3>Cantidad de asientos</h3>*/
/*                     <p>Ruta Lima: 46 asientos.</p>*/
/*                     <p>Ruta Mendoza: 39 asientos.</p>*/
/*                 </li>*/
/*             </ul>*/
/*             <div class="buses">*/
/*                 <ul class="slides">*/
/*                     <li>*/
/*                         <img src="{{ base_path ~ directory }}/img/carrusel1.jpg">*/
/*                     </li>*/
/*                     <li>*/
/*                         <img src="{{ base_path ~ directory }}/img/carrusel2.jpg">*/
/*                     </li>*/
/*                     <li>*/
/*                         <img src="{{ base_path ~ directory }}/img/carrusel3.jpg">*/
/*                     </li>*/
/*                     <li>*/
/*                         <img src="{{ base_path ~ directory }}/img/carrusel1.jpg">*/
/*                     </li>*/
/*                     <li>*/
/*                         <img src="{{ base_path ~ directory }}/img/carrusel2.jpg">*/
/*                     </li>*/
/*                     <li>*/
/*                         <img src="{{ base_path ~ directory }}/img/carrusel3.jpg">*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!---->*/
/*     <section id="venta">*/
/*         <div class="container">*/
/*             <h2>¿Dónde comprar tu pasaje?</h2>*/
/*             <form>*/
/*                 <fieldset>*/
/*                     <label>Seleccionar País</label>*/
/*                     <fieldset>*/
/*                         <select id="pto_venta_pais" name="pto_venta_pais">*/
/*                             <option>Seleccionar País</option>*/
/*                             <option value="argentina">Argentina</option>*/
/*                             <option value="chile">Chile</option>*/
/*                             <option value="peru">Perú</option>*/
/*                         </select>*/
/*                     </fieldset>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <label>Seleccionar Región</label>*/
/*                     <fieldset>*/
/*                         <select id="pto_venta_region" name="pto_venta_region">*/
/*                             <option value=''>Selecticione una región</option>*/
/*                         </select>*/
/*                     </fieldset>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <label>Seleccionar Ciudad</label>*/
/*                     <fieldset>*/
/*                         <select id="pto_venta_ciudad" name="pto_venta_ciudad">*/
/*                             <option value=''>Selecticione una ciudad</option>*/
/*                         </select>*/
/*                     </fieldset>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <button>Buscar</button>*/
/*                 </fieldset>*/
/*                 <fieldset class="map">*/
/*                     <button>¿Quieres saber cuál es tu sucursal más cercana?</button>*/
/*                     <fieldset>*/
/*                         <div id="map" style="width: 100%; height: 450px;"></div>*/
/*                         <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.5947824715645!2d-58.39500178499486!3d-34.58911846423235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaa2ec152135%3A0x9b3e5dc6f58c526!2sNewport+Pub!5e0!3m2!1ses!2scl!4v1459715539840" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe-->*/
/*                     </fieldset>*/
/*                 </fieldset>*/
/*             </form>*/
/*         </div>*/
/*     </section>*/
/*     <!---->*/
/*     <section id="informacion">*/
/*         <h2>Información importante a considerar</h2>*/
/*         <!---->*/
/*         <div class="tabs">*/
/*             <ul>*/
/*                 <li><a href="#tab1">Chile</a></li>*/
/*                 <li><a href="#tab2">Argentina</a></li>*/
/*                 <li><a href="#tab3">Perú</a></li>*/
/*             </ul>*/
/*             <div class="contenido">*/
/*                 <div id="tab1">*/
/*                     <div class="subtab">*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="#subtab1"><img src="{{ base_path ~ directory }}/img/documentos.jpg">Documentos</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#subtab2"><img src="{{ base_path ~ directory }}/img/ninos.jpg">Niños</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#subtab3"><img src="{{ base_path ~ directory }}/img/kilos.jpg">Kilos</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div id="subtab1">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info2.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </div>*/
/*                         <div id="subtab2">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info3.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </div>*/
/*                         <div id="subtab3">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info1.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!---->*/
/*                 <div id="tab2">*/
/*                     <div class="subtab">*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="#subtab1"><img src="{{ base_path ~ directory }}/img/documentos.jpg">Documentos</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#subtab2"><img src="{{ base_path ~ directory }}/img/ninos.jpg">Niños</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#subtab3"><img src="{{ base_path ~ directory }}/img/kilos.jpg">Kilos</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div id="subtab1">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info1.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </div>*/
/*                         <div id="subtab2">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info2.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </div>*/
/*                         <div id="subtab3">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info3.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!---->*/
/*                 <div id="tab3">*/
/*                     <div class="subtab">*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="#subtab1"><img src="{{ base_path ~ directory }}/img/documentos.jpg">Documentos</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#subtab2"><img src="{{ base_path ~ directory }}/img/ninos.jpg">Niños</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#subtab3"><img src="{{ base_path ~ directory }}/img/kilos.jpg">Kilos</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div id="subtab1">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info3.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </div>*/
/*                         <div id="subtab2">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info2.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                             </article>*/
/*                         </div>*/
/*                         <div id="subtab3">*/
/*                             <article>*/
/*                                 <div class="img">*/
/*                                     <img src="{{ base_path ~ directory }}/img/info1.jpg">*/
/*                                 </div>*/
/*                                 <div class="info">*/
/*                                     <h3>¿Qué documentos requiero para viajes con niños?</h3>*/
/*                                     <p>Pasaporte o Cedula Identidad.</p>*/
/*                                     <p>Certificado de nacimiento. </p>*/
/*                                     <p>Permiso Notarial en triplicado.</p>*/
/*                                     <p>Si viaja sin sus Padres debe presentar autorización de ambos.</p>*/
/*                                     <p>Padre o Madre fallecido, con certificado de defunción según corresponda.</p>*/
/*                                     <p>Si viaja solo debe portar DNI, certificado de nacimiento legalizado y autorización de viaje de ambos padres.</p>*/
/*                                 </div>*/
/*                             </article>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!---->*/
/*     </section>*/
/*     <!---->*/
/*     <section id="contacto">*/
/*         <div class="container">*/
/*             <h2>¿Tienes alguna duda?</h2>*/
/*             <form id="form" name="form" action="" method="post">*/
/*                 <fieldset>*/
/*                     <label>* Nombre</label>*/
/*                     <input type="text" name="nombre" id="nombre" >*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <label>* Email</label>*/
/*                     <input type="text" name="email" id="email" >*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <label>* Mensaje</label>*/
/*                     <textarea name="mensaje" id="mensaje" ></textarea>*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     captcha*/
/*                 </fieldset>*/
/*                 <fieldset>*/
/*                     <button type="submit">Enviar mensaje</button>*/
/*                 </fieldset>*/
/*             </form>*/
/*         </div>*/
/*     </section>*/
/*     <!---->*/
