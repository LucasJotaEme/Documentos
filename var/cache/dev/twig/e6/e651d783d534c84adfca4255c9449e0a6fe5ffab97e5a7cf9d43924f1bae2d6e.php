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

/* documento/verMas.html.twig */
class __TwigTemplate_de3745514f899912652f4c2af391b9865eb26c0e4646730314d3ebc1901828f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documento/verMas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documento/verMas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documento/verMas.html.twig", 1);
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
<a class=\"btn btn-light bordeSombreado\" style=\"color:#306086\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documentos");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/reply.svg"), "html", null, true);
        echo "\" alt=\"Imagen documento\">Volver al menú</a>
<div style=\"padding:30px;\">
    <div style=\"text-align:center;margin-top:10px;\" class=\"container-fluid bordeSombreado divEspaciado\">
        <h3 style=\"color:#0F9FA8;\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/documento.svg"), "html", null, true);
        echo "\" width=\"30\" class=\"svgMenu\" alt=\"Documento\"></img>Documento N° <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 11, $this->source); })()), "numero", [], "any", false, false, false, 11), "html", null, true);
        echo "</b></h3>
        <hr>
        <h5 style=\"text-align:left;color:#0F9FA8;\">Datos</h5>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h5>Fecha de creación:</h5><h6>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 16, $this->source); })()), "fechaCreacion", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
        echo "</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Fecha de publicación:</h5><h6>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 19, $this->source); })()), "fechaPublicacion", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
        echo "</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Fecha de caducidad:</h5><h6>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 22, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
        echo "</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h5>Título:</h5><h6>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 28, $this->source); })()), "titulo", [], "any", false, false, false, 28), "html", null, true);
        echo "</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Palabras claves:</h5><h6>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 31, $this->source); })()), "palabraClave", [], "any", false, false, false, 31), "html", null, true);
        echo "</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Perfil:</h5><h6>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 34, $this->source); })()), "perfil", [], "any", false, false, false, 34), "html", null, true);
        echo "</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">

        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h5>Versión:</h5><h6>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 41, $this->source); })()), "numeroVersion", [], "any", false, false, false, 41), "html", null, true);
        echo "</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Estado:</h5><h6>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 44, $this->source); })()), "estado", [], "any", false, false, false, 44), "html", null, true);
        echo "</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Visitas:</h5><h6>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 47, $this->source); })()), "vistos", [], "any", false, false, false, 47), "html", null, true);
        echo "</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">
        <h5 style=\"text-align:left;color:#0F9FA8;;\">Modificaciones</h5>
        ";
        // line 52
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 52, $this->source); })()), "fechaModificacion", [], "any", false, false, false, 52), null)) {
            // line 53
            echo "
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h5>Última fecha de modificación:</h5><h6>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 56, $this->source); })()), "fechaModificacion", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
            echo "</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Versión anterior:</h5><h6>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 59, $this->source); })()), "versionAnterior", [], "any", false, false, false, 59), "html", null, true);
            echo "</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Visitas:</h5><h6>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 62, $this->source); })()), "vistos", [], "any", false, false, false, 62), "html", null, true);
            echo "</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">
        ";
        } else {
            // line 66
            echo " 
        <h5 style=\"text-align:left;color:grey;\">Este documento aún no ha sido modificado.</h5>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 70, $this->source); })()), "estado", [], "any", false, false, false, 70), "Baja")) {
            // line 71
            echo "        <h5 style=\"text-align:left;color:#0F9FA8;;\">Baja</h5>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h5>Motivo:</h5><h6>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documento"]) || array_key_exists("documento", $context) ? $context["documento"] : (function () { throw new RuntimeError('Variable "documento" does not exist.', 74, $this->source); })()), "motivoObsoleto", [], "any", false, false, false, 74), "html", null, true);
            echo "</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">
        ";
        }
        // line 79
        echo "        
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "documento/verMas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 79,  218 => 74,  213 => 71,  211 => 70,  208 => 69,  203 => 66,  195 => 62,  189 => 59,  183 => 56,  178 => 53,  176 => 52,  168 => 47,  162 => 44,  156 => 41,  146 => 34,  140 => 31,  134 => 28,  125 => 22,  119 => 19,  113 => 16,  103 => 11,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Documentos UNRaf{% endblock %}

{% block body %}

{{ parent() }}
<a class=\"btn btn-light bordeSombreado\" style=\"color:#306086\" href=\"{{path('documentos')}}\"><img src=\"{{ asset(\"svg/reply.svg\") }}\" alt=\"Imagen documento\">Volver al menú</a>
<div style=\"padding:30px;\">
    <div style=\"text-align:center;margin-top:10px;\" class=\"container-fluid bordeSombreado divEspaciado\">
        <h3 style=\"color:#0F9FA8;\"><img src=\"{{ asset(\"svg/documento.svg\") }}\" width=\"30\" class=\"svgMenu\" alt=\"Documento\"></img>Documento N° <b>{{documento.numero}}</b></h3>
        <hr>
        <h5 style=\"text-align:left;color:#0F9FA8;\">Datos</h5>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h5>Fecha de creación:</h5><h6>{{documento.fechaCreacion|date('d/m/Y')}}</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Fecha de publicación:</h5><h6>{{documento.fechaPublicacion|date('d/m/Y')}}</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Fecha de caducidad:</h5><h6>{{documento.fechaCaducidad|date('d/m/Y')}}</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h5>Título:</h5><h6>{{documento.titulo}}</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Palabras claves:</h5><h6>{{documento.palabraClave}}</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Perfil:</h5><h6>{{documento.perfil}}</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">

        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h5>Versión:</h5><h6>{{documento.numeroVersion}}</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Estado:</h5><h6>{{documento.estado}}</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Visitas:</h5><h6>{{documento.vistos}}</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">
        <h5 style=\"text-align:left;color:#0F9FA8;;\">Modificaciones</h5>
        {% if documento.fechaModificacion != null %}

        <div class=\"row\">
            <div class=\"col-sm-4\">
                <h5>Última fecha de modificación:</h5><h6>{{documento.fechaModificacion|date('d/m/Y')}}</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Versión anterior:</h5><h6>{{documento.versionAnterior}}</h6>
            </div>
            <div class=\"col-sm-4\">
                <h5>Visitas:</h5><h6>{{documento.vistos}}</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">
        {% else %} 
        <h5 style=\"text-align:left;color:grey;\">Este documento aún no ha sido modificado.</h5>
        {% endif %}

        {% if documento.estado == \"Baja\" %}
        <h5 style=\"text-align:left;color:#0F9FA8;;\">Baja</h5>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h5>Motivo:</h5><h6>{{documento.motivoObsoleto}}</h6>
            </div>
        </div>
        <hr style=\"background-color:#0F9FA8;\">
        {% endif %}
        
    </div>
</div>
{% endblock %}

", "documento/verMas.html.twig", "/var/www/html/Documentos/templates/documento/verMas.html.twig");
    }
}
