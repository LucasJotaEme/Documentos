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

/* documento/nuevoDocumento.html.twig */
class __TwigTemplate_3e2a6b209915643cbdaa5ad9d650fdd1e42a6c4bb19b8388b87f36ac7288b340 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documento/nuevoDocumento.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "documento/nuevoDocumento.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "documento/nuevoDocumento.html.twig", 1);
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
        // line 9
        echo "<div class=\"modal fade\" id=\"ventanaModal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content scroll\">

            <div class=\"modal-header\">
                <h6 class=\"modal-title\">Seguro que desea cancelar?</h6>
                <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            </div>

            <div class=\"modal-footer\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documentos");
        echo "\" class=\"btn botonAzul container\" style=\"text-align:center\">Aceptar</a>
            </div>

        </div>
    </div>
</div>
<div>
    <a class=\"btn btn-light bordeSombreado\" style=\"color:#306086;\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documentos");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/reply.svg"), "html", null, true);
        echo "\" alt=\"Imagen documento\">Volver al menú</a>
    <div style=\"text-align:center;\" class=\"container-fluid\">
        <h3 style=\"color:#0F9FA8;\">Documentos>>Crear</h3>
    </div>
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 30, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "

    ";
        // line 33
        echo "    <div class=\"divFormulario bordeSombreado container\">
    <h4 style=\"margin-top:10px;color:grey;\">DATOS</h4>
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Tipo:</h5>
                </div>
                <div class=\"col-sm-9\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "documentoTipo", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Escriba el número del documento.."]]);
        echo "  
                </div>
        </div>
        <div style=\"container-fluid\">
            <div style=\"margin-top: 20px;\" class=\"form-group row\">
                    <div class=\"col-sm-3 col-form-label\">
                        <h5>Número:</h5>
                    </div>
                    <div class=\"col-sm-9\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 49, $this->source); })()), "numero", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Escriba el número del documento.."]]);
        echo "  
                    </div>
            </div>
                    
            <div style=\"margin-top: 20px;\" class=\"form-group row\">
                    <div class=\"col-sm-3 col-form-label\">
                        <h5>Año:</h5>
                    </div>
                    <div class=\"col-sm-9\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 58, $this->source); })()), "anio", [], "any", false, false, false, 58), 'widget', ["attr" => ["onblur" => "verificarAnio(this)", "class" => "form-control", "placeholder" => "Escriba el año.."]]);
        echo "  
                    </div>
            </div>
                    
            <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Fecha de publicación:</h5>
                </div>
                <div class=\"col-sm-9\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 69, $this->source); })()), "fechaPublicacion", [], "any", false, false, false, 69), "day", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "  
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 72, $this->source); })()), "fechaPublicacion", [], "any", false, false, false, 72), "month", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "  
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 75, $this->source); })()), "fechaPublicacion", [], "any", false, false, false, 75), "year", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                        </div>
                        
                    </div>
                </div>
            </div>

            <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Fecha de caducidad:</h5>
                </div>
                <div class=\"col-sm-9\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 89, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 89), "day", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "  
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 92, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 92), "month", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "  
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 95, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 95), "year", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
            <div class=\"col-sm-3 col-form-label\">
                <h5>Versión:</h5>
            </div>
            <div class=\"col-sm-9\">
                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 107, $this->source); })()), "numeroVersion", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Escriba el número de version.."]]);
        echo "  
            </div>
        </div>
        
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Título:</h5>
                </div>
                <div class=\"col-sm-9\">
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 116, $this->source); })()), "titulo", [], "any", false, false, false, 116), 'widget', ["attr" => ["onkeydown" => "contadorTitulo(this)", "class" => "form-control", "placeholder" => "Escriba el título.."]]);
        echo "  
                    <p id=\"mensajeTitulo\" style=\"color:grey;\">Mínimo 20 caracteres</p>
                </div>
        </div>
        
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Descripción:</h5>
                </div>
                <div class=\"col-sm-9\">
                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 126, $this->source); })()), "descripcion", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Escriba la descripción.."]]);
        echo "  
                </div>
        </div>

        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Palabras claves:</h5>
                </div>
                <div class=\"col-sm-9\">
                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 135, $this->source); })()), "palabraClave", [], "any", false, false, false, 135), 'widget', ["attr" => ["value" => "", "onclick" => "vaciarPalabrasClaves(this)", "class" => "form-control", "placeholder" => "Seleccione o escriba las palabras"]]);
        echo "  
                    <p style=\"color:grey;\">Separar por ; cada palabra</p>
                </div>
        </div>
        <hr>
        <h4 style=\"margin-top:10px;color:grey;\">ARCHIVO</h4>    
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Documento PDF:</h5>
                </div>
                <div class=\"col-sm-9\">
                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 146, $this->source); })()), "path", [], "any", false, false, false, 146), 'widget', ["attr" => ["accept" => "application/pdf", "class" => "form-control"]]);
        echo "
                </div>
        </div>
        <hr>
        <h4 style=\"margin-top:10px;color:grey;\">PERFILES</h4>
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Permiso de acceso:</h5>
                </div>
                <div class=\"col-sm-9\">
                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 156, $this->source); })()), "perfil", [], "any", false, false, false, 156), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                </div>
        </div>

        <div class=\"row\" style=\"text-align:center;\">
            <div style=\"margin-bottom:5px;\" class=\"col-sm-6\">
                <a href=\"#ventanaModal\" data-toggle=\"modal\" style=\"\" class=\"btn btn-secondary ancho\" >Cancelar</a>
            </div>
            <div class=\"col-sm-6\">
            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 165, $this->source); })()), "Grabar", [], "any", false, false, false, 165), 'widget', ["attr" => ["class" => "ancho btn botonCeleste"]]);
        echo "  
            </div>
        </div>        
    </div>
    ";
        // line 169
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 169, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "documento/nuevoDocumento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 169,  310 => 165,  298 => 156,  285 => 146,  271 => 135,  259 => 126,  246 => 116,  234 => 107,  219 => 95,  213 => 92,  207 => 89,  190 => 75,  184 => 72,  178 => 69,  164 => 58,  152 => 49,  140 => 40,  131 => 33,  126 => 30,  117 => 26,  107 => 19,  95 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Documentos UNRaf{% endblock %}

{% block body %}

{{ parent() }}
{# Modal de novedades #}
<div class=\"modal fade\" id=\"ventanaModal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content scroll\">

            <div class=\"modal-header\">
                <h6 class=\"modal-title\">Seguro que desea cancelar?</h6>
                <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            </div>

            <div class=\"modal-footer\">
                <a href=\"{{path('documentos')}}\" class=\"btn botonAzul container\" style=\"text-align:center\">Aceptar</a>
            </div>

        </div>
    </div>
</div>
<div>
    <a class=\"btn btn-light bordeSombreado\" style=\"color:#306086;\" href=\"{{path('documentos')}}\"><img src=\"{{ asset(\"svg/reply.svg\") }}\" alt=\"Imagen documento\">Volver al menú</a>
    <div style=\"text-align:center;\" class=\"container-fluid\">
        <h3 style=\"color:#0F9FA8;\">Documentos>>Crear</h3>
    </div>
    {{ form_start(formulario, {'enctype':'multipart/form-data'})}}

    {# Empieza formulario  #}
    <div class=\"divFormulario bordeSombreado container\">
    <h4 style=\"margin-top:10px;color:grey;\">DATOS</h4>
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Tipo:</h5>
                </div>
                <div class=\"col-sm-9\">
                    {{ form_widget(formulario.documentoTipo, {attr: {class: 'form-control' , placeholder: 'Escriba el número del documento..'} }) }}  
                </div>
        </div>
        <div style=\"container-fluid\">
            <div style=\"margin-top: 20px;\" class=\"form-group row\">
                    <div class=\"col-sm-3 col-form-label\">
                        <h5>Número:</h5>
                    </div>
                    <div class=\"col-sm-9\">
                        {{ form_widget(formulario.numero, {attr: {class: 'form-control' , placeholder: 'Escriba el número del documento..'} }) }}  
                    </div>
            </div>
                    
            <div style=\"margin-top: 20px;\" class=\"form-group row\">
                    <div class=\"col-sm-3 col-form-label\">
                        <h5>Año:</h5>
                    </div>
                    <div class=\"col-sm-9\">
                        {{ form_widget(formulario.anio, {attr: {onblur: 'verificarAnio(this)' , class: 'form-control' , placeholder: 'Escriba el año..'} }) }}  
                    </div>
            </div>
                    
            <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Fecha de publicación:</h5>
                </div>
                <div class=\"col-sm-9\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaPublicacion.day, {attr: {class: 'form-control '} }) }}  
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaPublicacion.month, {attr: {class: 'form-control '} }) }}  
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaPublicacion.year, {attr: {class: 'form-control'} }) }}  
                        </div>
                        
                    </div>
                </div>
            </div>

            <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Fecha de caducidad:</h5>
                </div>
                <div class=\"col-sm-9\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaCaducidad.day, {attr: {class: 'form-control '} }) }}  
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaCaducidad.month, {attr: {class: 'form-control '} }) }}  
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaCaducidad.year, {attr: {class: 'form-control'} }) }}  
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
            <div class=\"col-sm-3 col-form-label\">
                <h5>Versión:</h5>
            </div>
            <div class=\"col-sm-9\">
                {{ form_widget(formulario.numeroVersion, {attr: {class: 'form-control' , placeholder: 'Escriba el número de version..'} }) }}  
            </div>
        </div>
        
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Título:</h5>
                </div>
                <div class=\"col-sm-9\">
                    {{ form_widget(formulario.titulo, {attr: {onkeydown: 'contadorTitulo(this)' , class: 'form-control' , placeholder: 'Escriba el título..'} }) }}  
                    <p id=\"mensajeTitulo\" style=\"color:grey;\">Mínimo 20 caracteres</p>
                </div>
        </div>
        
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Descripción:</h5>
                </div>
                <div class=\"col-sm-9\">
                    {{ form_widget(formulario.descripcion, {attr: {class: 'form-control' , placeholder: 'Escriba la descripción..'} }) }}  
                </div>
        </div>

        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Palabras claves:</h5>
                </div>
                <div class=\"col-sm-9\">
                    {{ form_widget(formulario.palabraClave, {attr: {value: '',onclick: 'vaciarPalabrasClaves(this)',class: 'form-control' , placeholder: 'Seleccione o escriba las palabras'} }) }}  
                    <p style=\"color:grey;\">Separar por ; cada palabra</p>
                </div>
        </div>
        <hr>
        <h4 style=\"margin-top:10px;color:grey;\">ARCHIVO</h4>    
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Documento PDF:</h5>
                </div>
                <div class=\"col-sm-9\">
                    {{ form_widget(formulario.path, {attr: {accept:'application/pdf',class: 'form-control'} })}}
                </div>
        </div>
        <hr>
        <h4 style=\"margin-top:10px;color:grey;\">PERFILES</h4>
        <div style=\"margin-top: 20px;\" class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label\">
                    <h5>Permiso de acceso:</h5>
                </div>
                <div class=\"col-sm-9\">
                    {{ form_widget(formulario.perfil, {attr: {class: 'form-control'} }) }}  
                </div>
        </div>

        <div class=\"row\" style=\"text-align:center;\">
            <div style=\"margin-bottom:5px;\" class=\"col-sm-6\">
                <a href=\"#ventanaModal\" data-toggle=\"modal\" style=\"\" class=\"btn btn-secondary ancho\" >Cancelar</a>
            </div>
            <div class=\"col-sm-6\">
            {{ form_widget(formulario.Grabar, {attr: {class: 'ancho btn botonCeleste'} }) }}  
            </div>
        </div>        
    </div>
    {{ form_end(formulario) }}
</div>
{% endblock %}

", "documento/nuevoDocumento.html.twig", "/var/www/html/Documentos/templates/documento/nuevoDocumento.html.twig");
    }
}
