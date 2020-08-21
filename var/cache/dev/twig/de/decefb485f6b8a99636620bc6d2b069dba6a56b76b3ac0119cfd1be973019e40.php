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

/* documento/index.html.twig */
class __TwigTemplate_2960697b3d5fa19ef77c71a38327abeb0e734bf89e26f94377d94b3dc5bb6e1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documento/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documento/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documento/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Documentos UNRaf";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 8, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "


<div class=\"bordeSombreado degrade divBuscar\">
    <div style=\"text-align:center;\" class=\"container-fluid\">
        <h3 style=\"color:#306086\">Busqueda</h3>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6 col-md-6 col-sm-12\">
            Buscar
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 18, $this->source); })()), "buscar", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Número,año,título, o tipo acceso"]]);
        echo "  
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12\">
            Filtrar por<br>
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 22, $this->source); })()), "filtrarPor", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
        </div>
    </div>
    <div class=\"center\">
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "Buscar", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "btn botonCeleste ancho"]]);
        echo "  
    </div>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
    
</div>
<br>
<div class=\"container\">
    <div style=\"text-align:center;\" class=\"container-fluid\">
        <h3 style=\"color:#306086\">Resultados</h3>
    </div>
    ";
        // line 37
        echo "    <div  style=\"max-width: 1200px;
    overflow-x: scroll;\">
    <table class=\"table  table-hover bordeSombreado\"
        <thead>
          <tr style=\"background-color:#0F9FA8;color:white;text-align:center;\">
            <th scope=\"col\">Tipo</th>
            <th scope=\"col\">N°</th>
            <th scope=\"col\">Año</th>
            <th scope=\"col\">Fecha public</th>
            <th scope=\"col\">Título</th>
            <th scope=\"col\">Acceso</th>
            <th scope=\"col\">PDF</th>
            <th scope=\"col\">-</th>
            <th scope=\"col\">Más</th>
          </tr>
        </thead>
        <tbody>
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentos"]) || array_key_exists("documentos", $context) ? $context["documentos"] : (function () { throw new RuntimeError('Variable "documentos" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["documento"]) {
            // line 55
            echo "            ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "accesoDocumentos", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, $context["documento"], "perfil", [], "any", false, false, false, 55)) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "accesoDocumentos", [], "any", false, false, false, 55), "Confidencial")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "accesoDocumentos", [], "any", false, false, false, 55), "Restringido") && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["documento"], "perfil", [], "any", false, false, false, 55), "Público")))) {
                // line 56
                echo "            <tr>
                <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["documento"], "documentoTipo", [], "any", false, false, false, 57), "nombre", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                <th scope=\"row\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "numero", [], "any", false, false, false, 58), "html", null, true);
                echo "</th>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "anio", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "fechaPublicacion", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "titulo", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "perfil", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                <td><a class=\"btn btn-light\" href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verPDF", ["id" => twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/verPdf.svg"), "html", null, true);
                echo "\" class=\"svgMenu\" alt=\"PDF\">Ver</a></td>
                <td>
                    ";
                // line 65
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["documento"], "estado", [], "any", false, false, false, 65), "Alta")) {
                    // line 66
                    echo "                        ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "rolString", [], "any", false, false, false, 66), "Editor")) {
                        // line 67
                        echo "                        <a class=\"btn btn-success\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDocumento", ["id" => twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/pencil.svg"), "html", null, true);
                        echo "\" class=\"svgMenu\" alt=\"Modificar\"></a>
                        <a class=\"btn btn-danger\" onclick=\"idObsoletear(";
                        // line 68
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 68), "html", null, true);
                        echo ")\" data-toggle=\"modal\" href=\"#ventanaModal\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/trash.svg"), "html", null, true);
                        echo "\" class=\"svgMenu\" alt=\"Basura\"></a>
                        ";
                    }
                    // line 70
                    echo "                        ";
                    // line 71
                    echo "                        <div class=\"modal fade\" id=\"ventanaModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content scroll\">

                                    <div class=\"modal-header\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <h6 style=\"margin:3px;\" class=\"modal-title\">Desea realmente enviar este documento a obsoleto?</h6>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <input id=\"inputObsoleto\" type=\"text\" class=\"form-control\" placeholder=\"Ingrese el motivo..\"></input>
                                                <h6 style=\"color:grey;\">Mínimo 10 caracteres</h6>
                                                <h6 id=\"mensajeMotivo\" style=\"color:red;\"></h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"modal-footer\">
                                        <a onclick=\"direccionarParaObsoletear()\" class=\"btn botonAzul container\" style=\"text-align:center\">Confirmar</a>
                                        <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        ";
                    // line 97
                    echo "                    ";
                }
                // line 98
                echo "                </td>
                <td><a class=\"btn botonCeleste\" href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verMas", ["id" => twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/plus.svg"), "html", null, true);
                echo "\" title=\"Ver más\" class=\"svgMenu\" alt=\"Modificar\"></a></td>
            </tr>
            ";
            }
            // line 102
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "                <h3 style=\"color:grey;text-align:center;padding:10px;\">No se encontraron documentos.</h3>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </tbody>
    </table>
    </div>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "documento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 105,  266 => 103,  261 => 102,  253 => 99,  250 => 98,  247 => 97,  220 => 71,  218 => 70,  211 => 68,  204 => 67,  201 => 66,  199 => 65,  192 => 63,  188 => 62,  184 => 61,  180 => 60,  176 => 59,  172 => 58,  168 => 57,  165 => 56,  162 => 55,  157 => 54,  138 => 37,  127 => 28,  122 => 26,  115 => 22,  108 => 18,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Documentos UNRaf{% endblock %}

{% block body %}

{{ parent() }}
{{ form_start(formulario, {'enctype':'multipart/form-data'})}}


<div class=\"bordeSombreado degrade divBuscar\">
    <div style=\"text-align:center;\" class=\"container-fluid\">
        <h3 style=\"color:#306086\">Busqueda</h3>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6 col-md-6 col-sm-12\">
            Buscar
            {{ form_widget(formulario.buscar, {attr: {class: 'form-control',placeholder: 'Número,año,título, o tipo acceso'} }) }}  
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12\">
            Filtrar por<br>
            {{ form_widget(formulario.filtrarPor, {attr: {class: 'form-control'} }) }}  
        </div>
    </div>
    <div class=\"center\">
    {{ form_widget(formulario.Buscar, {attr: {class: 'btn botonCeleste ancho'} }) }}  
    </div>
    {{ form_end(formulario) }}
    
</div>
<br>
<div class=\"container\">
    <div style=\"text-align:center;\" class=\"container-fluid\">
        <h3 style=\"color:#306086\">Resultados</h3>
    </div>
    {# Comienza tabla #}
    <div  style=\"max-width: 1200px;
    overflow-x: scroll;\">
    <table class=\"table  table-hover bordeSombreado\"
        <thead>
          <tr style=\"background-color:#0F9FA8;color:white;text-align:center;\">
            <th scope=\"col\">Tipo</th>
            <th scope=\"col\">N°</th>
            <th scope=\"col\">Año</th>
            <th scope=\"col\">Fecha public</th>
            <th scope=\"col\">Título</th>
            <th scope=\"col\">Acceso</th>
            <th scope=\"col\">PDF</th>
            <th scope=\"col\">-</th>
            <th scope=\"col\">Más</th>
          </tr>
        </thead>
        <tbody>
            {% for documento in documentos %}
            {% if app.user.accesoDocumentos == documento.perfil or app.user.accesoDocumentos == \"Confidencial\" or (app.user.accesoDocumentos==\"Restringido\" and documento.perfil==\"Público\") %}
            <tr>
                <td>{{ documento.documentoTipo.nombre }}</td>
                <th scope=\"row\">{{ documento.numero }}</th>
                <td>{{ documento.anio }}</td>
                <td>{{ documento.fechaPublicacion|date('d/m/Y') }}</td>
                <td>{{ documento.titulo }}</td>
                <td>{{ documento.perfil }}</td>
                <td><a class=\"btn btn-light\" href=\"{{ path('verPDF', {'id': documento.id}) }}\"><img src=\"{{ asset(\"svg/verPdf.svg\") }}\" class=\"svgMenu\" alt=\"PDF\">Ver</a></td>
                <td>
                    {% if documento.estado==\"Alta\" %}
                        {% if app.user.rolString==\"Editor\" %}
                        <a class=\"btn btn-success\" href=\"{{ path('modificarDocumento', {'id': documento.id}) }}\"><img src=\"{{ asset(\"svg/pencil.svg\") }}\" class=\"svgMenu\" alt=\"Modificar\"></a>
                        <a class=\"btn btn-danger\" onclick=\"idObsoletear({{documento.id}})\" data-toggle=\"modal\" href=\"#ventanaModal\"><img src=\"{{ asset(\"svg/trash.svg\") }}\" class=\"svgMenu\" alt=\"Basura\"></a>
                        {% endif %}
                        {# Modal para cuando se basurea el documento. #}
                        <div class=\"modal fade\" id=\"ventanaModal\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content scroll\">

                                    <div class=\"modal-header\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6\">
                                                <h6 style=\"margin:3px;\" class=\"modal-title\">Desea realmente enviar este documento a obsoleto?</h6>
                                            </div>
                                            <div class=\"col-sm-6\">
                                                <input id=\"inputObsoleto\" type=\"text\" class=\"form-control\" placeholder=\"Ingrese el motivo..\"></input>
                                                <h6 style=\"color:grey;\">Mínimo 10 caracteres</h6>
                                                <h6 id=\"mensajeMotivo\" style=\"color:red;\"></h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"modal-footer\">
                                        <a onclick=\"direccionarParaObsoletear()\" class=\"btn botonAzul container\" style=\"text-align:center\">Confirmar</a>
                                        <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {# .... #}
                    {% endif %}
                </td>
                <td><a class=\"btn botonCeleste\" href=\"{{ path('verMas', {'id': documento.id}) }}\"><img src=\"{{ asset(\"svg/plus.svg\") }}\" title=\"Ver más\" class=\"svgMenu\" alt=\"Modificar\"></a></td>
            </tr>
            {% endif %}
            {% else %}
                <h3 style=\"color:grey;text-align:center;padding:10px;\">No se encontraron documentos.</h3>
            {% endfor %}
        </tbody>
    </table>
    </div>
    
</div>
{% endblock %}
", "documento/index.html.twig", "/var/www/html/Documentos/templates/documento/index.html.twig");
    }
}
