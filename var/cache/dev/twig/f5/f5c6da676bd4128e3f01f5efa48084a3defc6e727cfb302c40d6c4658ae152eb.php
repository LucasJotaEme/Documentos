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

/* documento_tipo/documentosTipo.html.twig */
class __TwigTemplate_9401e39da2dae1f73f2f88411ad305551db376cf3cea167e6e7598ed11435b36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documento_tipo/documentosTipo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documento_tipo/documentosTipo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documento_tipo/documentosTipo.html.twig", 1);
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

        echo "Tipo de documentos";
        
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
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div>
    <div style=\"text-align:center;\" class=\"container-fluid\">
        <h3 style=\"color:#0F9FA8;\">Tipo de documento</h3>
    </div>
    <div style=\"padding:20px;\" class=\"bordeSombreado\">
        <h2 style=\"color:#0F9FA8;text-align:center;\">Busqueda</h2>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formularioBusqueda"]) || array_key_exists("formularioBusqueda", $context) ? $context["formularioBusqueda"] : (function () { throw new RuntimeError('Variable "formularioBusqueda" does not exist.', 13, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
        <div class=\"center\" style=\"margin:2px\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formularioBusqueda"]) || array_key_exists("formularioBusqueda", $context) ? $context["formularioBusqueda"] : (function () { throw new RuntimeError('Variable "formularioBusqueda" does not exist.', 15, $this->source); })()), "buscar", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "inputBorder form-control ancho", "placeholder" => "Buscar.."]]);
        echo "  
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formularioBusqueda"]) || array_key_exists("formularioBusqueda", $context) ? $context["formularioBusqueda"] : (function () { throw new RuntimeError('Variable "formularioBusqueda" does not exist.', 16, $this->source); })()), "Buscar", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control btn botonRosa ancho"]]);
        echo "  
        </div>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formularioBusqueda"]) || array_key_exists("formularioBusqueda", $context) ? $context["formularioBusqueda"] : (function () { throw new RuntimeError('Variable "formularioBusqueda" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
        
        <button style=\"color:#fc447c;\" class=\"btn bordeSombreado\" id=\"botonTipoDocumento\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg_pack/chevron-bottom.svg"), "html", null, true);
        echo "\" class=\"\" width=\"18\" alt=\"TD\"> Nuevo</button>
        <div id=\"divFormTipoDocumento\">
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 22, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
            <div>
                <h2 style=\"color:#0F9FA8;\">Nuevo tipo documento</h2>
                <div style=\"margin-top: 20px;\" class=\"form-group row\">
                        <div class=\"col-sm-3 col-form-label\">
                            <h5>Nombre:</h5>
                        </div>
                        <div class=\"col-sm-9\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 30, $this->source); })()), "nombre", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control ancho", "placeholder" => "Nombre.."]]);
        echo "  
                        </div>
                </div>
                <div style=\"margin-top: 20px;\" class=\"form-group row\">
                        <div class=\"col-sm-3 col-form-label\">
                            <h5>Abreviación:</h5>
                        </div>
                        <div class=\"col-sm-9\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 38, $this->source); })()), "abreviacion", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control ancho", "placeholder" => "Abreviado.."]]);
        echo "  
                        </div>
                </div>
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 41, $this->source); })()), "Aceptar", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control ancho", "placeholder" => "Abreviado.."]]);
        echo "
            </div>
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
        </div>
        <h3 style=\"color:#fc447c;margin-top:10px;\">Resultados</h3>
        <div style=\"padding:20px;\">
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentos"]) || array_key_exists("documentos", $context) ? $context["documentos"] : (function () { throw new RuntimeError('Variable "documentos" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["documento"]) {
            // line 48
            echo "            ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["documento"], "nombre", [], "any", false, false, false, 48), "Seleccionar")) {
                // line 49
                echo "            <div style=\"border-left:3px solid #fc447c;\">
                <h3>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "nombre", [], "any", false, false, false, 50), "html", null, true);
                echo " #";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["documento"], "abreviacion", [], "any", false, false, false, 50), "html", null, true);
                echo "</h3>
                <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarDocumentoTipo", ["id" => twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">Modificar</a>
                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarDocumentoTipo", ["id" => twig_get_attribute($this->env, $this->source, $context["documento"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">Eliminar</a>
                <hr>
            </div>
            ";
            }
            // line 56
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['documento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>
    </div>
    
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "documento_tipo/documentosTipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 57,  190 => 56,  183 => 52,  179 => 51,  173 => 50,  170 => 49,  167 => 48,  163 => 47,  156 => 43,  151 => 41,  145 => 38,  134 => 30,  123 => 22,  118 => 20,  113 => 18,  108 => 16,  104 => 15,  99 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tipo de documentos{% endblock %}

{% block body %}
    {{ parent() }}
<div>
    <div style=\"text-align:center;\" class=\"container-fluid\">
        <h3 style=\"color:#0F9FA8;\">Tipo de documento</h3>
    </div>
    <div style=\"padding:20px;\" class=\"bordeSombreado\">
        <h2 style=\"color:#0F9FA8;text-align:center;\">Busqueda</h2>
        {{ form_start(formularioBusqueda, {'enctype':'multipart/form-data'})}}
        <div class=\"center\" style=\"margin:2px\">
                {{ form_widget(formularioBusqueda.buscar, {attr: {class: 'inputBorder form-control ancho', placeholder: 'Buscar..'} }) }}  
                {{ form_widget(formularioBusqueda.Buscar, {attr: {class: 'form-control btn botonRosa ancho'} }) }}  
        </div>
        {{ form_end(formularioBusqueda) }}
        
        <button style=\"color:#fc447c;\" class=\"btn bordeSombreado\" id=\"botonTipoDocumento\"><img src=\"{{ asset(\"svg_pack/chevron-bottom.svg\") }}\" class=\"\" width=\"18\" alt=\"TD\"> Nuevo</button>
        <div id=\"divFormTipoDocumento\">
        {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
            <div>
                <h2 style=\"color:#0F9FA8;\">Nuevo tipo documento</h2>
                <div style=\"margin-top: 20px;\" class=\"form-group row\">
                        <div class=\"col-sm-3 col-form-label\">
                            <h5>Nombre:</h5>
                        </div>
                        <div class=\"col-sm-9\">
                            {{ form_widget(formulario.nombre, {attr: {class: 'form-control ancho', placeholder: 'Nombre..'} }) }}  
                        </div>
                </div>
                <div style=\"margin-top: 20px;\" class=\"form-group row\">
                        <div class=\"col-sm-3 col-form-label\">
                            <h5>Abreviación:</h5>
                        </div>
                        <div class=\"col-sm-9\">
                            {{ form_widget(formulario.abreviacion, {attr: {class: 'form-control ancho', placeholder: 'Abreviado..'} }) }}  
                        </div>
                </div>
                {{ form_widget(formulario.Aceptar, {attr: {class: 'form-control ancho', placeholder: 'Abreviado..'} }) }}
            </div>
        {{ form_end(formulario) }}
        </div>
        <h3 style=\"color:#fc447c;margin-top:10px;\">Resultados</h3>
        <div style=\"padding:20px;\">
            {% for documento in documentos %}
            {% if documento.nombre != 'Seleccionar' %}
            <div style=\"border-left:3px solid #fc447c;\">
                <h3>{{documento.nombre}} #{{documento.abreviacion}}</h3>
                <a href=\"{{ path('modificarDocumentoTipo', {'id': documento.id}) }}\">Modificar</a>
                <a href=\"{{ path('eliminarDocumentoTipo', {'id': documento.id}) }}\">Eliminar</a>
                <hr>
            </div>
            {% endif %}
            {% endfor %}
        </div>
    </div>
    
    
</div>
{% endblock %}
", "documento_tipo/documentosTipo.html.twig", "/var/www/html/Documentos/templates/documento_tipo/documentosTipo.html.twig");
    }
}
