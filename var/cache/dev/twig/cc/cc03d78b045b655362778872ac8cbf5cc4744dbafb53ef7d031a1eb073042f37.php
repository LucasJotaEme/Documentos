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

/* base.html.twig */
class __TwigTemplate_b8c55721a463f0f635caa5d9d5c3c0f8228e32d7bda5daa5b0a5bf570a798c85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>
    <body> 
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Novedades - UNRaf";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estiloBase.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            ";
        // line 9
        echo "            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/iconoUnraf.png"), "html", null, true);
        echo "\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div id=\"wrapper\" class=\"animate\">
        <nav class=\"navbar header-top fixed-top navbar-expand-lg  navbar-light bg-light\">

            <span class=\"navbar-toggler-icon leftmenutrigger\"></span>
            <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documentos");
        echo "\" style=\"color:#4a8a91\">Novedades</a>

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                
                <ul class=\"navbar-nav animate side-nav\">
\t\t    ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
            // line 33
            echo "                    <li id=\"menuDocumento\" class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/documento.svg"), "html", null, true);
            echo "\" class=\"svgMenu\" alt=\"Imagen documento\"> Documentos
                        </a>
                    </li>
\t\t    <li id=\"documentoToggle\" class=\"nav-item\">
                        <a class=\"nav-link\" style=\"background-color:#f1f1f0;\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoDocumento");
            echo "\">Crear</a>
                    </li>
                    ";
        }
        // line 42
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "                    
                    <li id=\"tipoDocumentoToggle\" class=\"nav-item\">
                        <a class=\"nav-link\" style=\"background-color:#f1f1f0;\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documentosTipo");
            echo "\">Crear y/o buscar</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
            echo "\">
                            <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg_pack/people.svg"), "html", null, true);
            echo "\" class=\"svgMenu\" width=\"18\" alt=\"Users\"> 
                            Usuarios
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("documentosTipo");
            echo "\">Tipo documento</a>
                    </li>
                    ";
        }
        // line 57
        echo "                </ul>   
                
                <ul class=\"navbar-nav ml-md-auto d-md-flex\">
                    <li class=\"nav-item dropdown\">
                        ";
        // line 61
        $context["rolPrincipal"] = "";
        // line 62
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "roles", [], "any", false, false, false, 62));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 63
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 63)) {
                // line 64
                echo "                                ";
                $context["rolPrincipal"] = $context["rol"];
                // line 65
                echo "                            ";
            }
            // line 66
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg_pack/person.svg"), "html", null, true);
        echo "\" class=\"svg\" width=\"18\" alt=\"P\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "email", [], "any", false, false, false, 68), "html", null, true);
        echo "
                        </a>                            
                        
                        <div class=\"dropdown-menu itemMenu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            ";
        // line 73
        echo "                            <a class=\"nav-link\" style=\"background-color:#0F9FA8;color:white;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("backIntranet");
        echo "\">
                            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/sign-out.svg"), "html", null, true);
        echo "\" class=\"svgMenu\" width=\"18\" alt=\"Sign-out\"> 
                            Ir a intranet</a>
                        </div>
                        
                        
                    </li>
                    ";
        // line 87
        echo "                </ul>
            </div>
        </nav>
        <div class=\"\">
            <h6 style=\"color:grey;\">Mi rol: ";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["rolPrincipal"]) || array_key_exists("rolPrincipal", $context) ? $context["rolPrincipal"] : (function () { throw new RuntimeError('Variable "rolPrincipal" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "</h6>
        </div>
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "flashes", [0 => "correcto"], "method", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 94
            echo "                <div id=\"notificacion\" class=\"container alert alert-success\">
                    ";
            // line 95
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 99
            echo "                <div id=\"notificacion\" class=\"container alert alert-danger\">
                ";
            // line 100
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 104
            echo "                <div id=\"notificacion\" class=\"container alert alert-warning\">
                ";
            // line 105
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                
        
        
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
            <script src=\"https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js\">
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
            ";
        // line 117
        echo "            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script type=\"text/javascript\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/validacionDocumento.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/comportamientos.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accionesDinamicas.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
            <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" rel=\"stylesheet\"></script>
            <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datetimepicker.es.js"), "html", null, true);
        echo "\" rel=\"stylesheet\"></script>
            <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\"></script>
            <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\"></script>
            <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\"></script>
            <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" rel=\"stylesheet\"></script>
            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  425 => 129,  421 => 128,  417 => 127,  413 => 126,  409 => 125,  405 => 124,  399 => 121,  395 => 120,  391 => 119,  387 => 117,  382 => 113,  372 => 112,  359 => 108,  350 => 105,  347 => 104,  342 => 103,  333 => 100,  330 => 99,  325 => 98,  316 => 95,  313 => 94,  309 => 93,  304 => 91,  298 => 87,  289 => 74,  284 => 73,  275 => 68,  272 => 67,  258 => 66,  255 => 65,  252 => 64,  249 => 63,  231 => 62,  229 => 61,  223 => 57,  217 => 54,  209 => 49,  205 => 48,  199 => 45,  195 => 43,  192 => 42,  186 => 39,  179 => 35,  175 => 33,  173 => 32,  161 => 23,  155 => 19,  145 => 18,  133 => 14,  129 => 13,  125 => 12,  121 => 11,  117 => 10,  114 => 9,  109 => 7,  99 => 6,  80 => 5,  68 => 132,  65 => 112,  63 => 18,  59 => 16,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Novedades - UNRaf{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset(\"css/estiloBase.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
            {#<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">#}
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <link href=\"{{ asset(\"css/estilo.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"icon\" href=\"{{ asset(\"img/iconoUnraf.png\") }}\">
            <link href=\"{{ asset('css/bootstrap-datetimepicker.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body> 
    {% block body %}
    <div id=\"wrapper\" class=\"animate\">
        <nav class=\"navbar header-top fixed-top navbar-expand-lg  navbar-light bg-light\">

            <span class=\"navbar-toggler-icon leftmenutrigger\"></span>
            <a class=\"navbar-brand\" href=\"{{path('documentos')}}\" style=\"color:#4a8a91\">Novedades</a>

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                
                <ul class=\"navbar-nav animate side-nav\">
\t\t    {% if is_granted('ROLE_EDITOR') %}
                    <li id=\"menuDocumento\" class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">
                            <img src=\"{{ asset(\"svg/documento.svg\") }}\" class=\"svgMenu\" alt=\"Imagen documento\"> Documentos
                        </a>
                    </li>
\t\t    <li id=\"documentoToggle\" class=\"nav-item\">
                        <a class=\"nav-link\" style=\"background-color:#f1f1f0;\" href=\"{{ path('nuevoDocumento') }}\">Crear</a>
                    </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                    
                    <li id=\"tipoDocumentoToggle\" class=\"nav-item\">
                        <a class=\"nav-link\" style=\"background-color:#f1f1f0;\" href=\"{{ path('documentosTipo') }}\">Crear y/o buscar</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('usuarios') }}\">
                            <img src=\"{{ asset(\"svg_pack/people.svg\") }}\" class=\"svgMenu\" width=\"18\" alt=\"Users\"> 
                            Usuarios
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('documentosTipo') }}\">Tipo documento</a>
                    </li>
                    {% endif %}
                </ul>   
                
                <ul class=\"navbar-nav ml-md-auto d-md-flex\">
                    <li class=\"nav-item dropdown\">
                        {% set rolPrincipal = \"\" %}
                        {% for rol in app.user.roles %}
                            {% if loop.last %}
                                {% set rolPrincipal =  rol %}
                            {% endif %}
                        {% endfor %}
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"{{ asset(\"svg_pack/person.svg\") }}\" class=\"svg\" width=\"18\" alt=\"P\"> {{app.user.email}}
                        </a>                            
                        
                        <div class=\"dropdown-menu itemMenu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            {#<h6 class=\"nav-link\" style=\"color:#fc447c;\">ROL: {{rolPrincipal}}</h6>#}
                            <a class=\"nav-link\" style=\"background-color:#0F9FA8;color:white;\" href=\"{{ path('backIntranet') }}\">
                            <img src=\"{{ asset(\"svg/sign-out.svg\") }}\" class=\"svgMenu\" width=\"18\" alt=\"Sign-out\"> 
                            Ir a intranet</a>
                        </div>
                        
                        
                    </li>
                    {#
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Top Menu Items</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Pricing</a>
                    </li>#}
                </ul>
            </div>
        </nav>
        <div class=\"\">
            <h6 style=\"color:grey;\">Mi rol: {{rolPrincipal}}</h6>
        </div>
        {% for message in app.flashes('correcto') %}
                <div id=\"notificacion\" class=\"container alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('error') %}
                <div id=\"notificacion\" class=\"container alert alert-danger\">
                {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('warning') %}
                <div id=\"notificacion\" class=\"container alert alert-warning\">
                {{ message }}
                </div>
        {% endfor %}
                
        
        
    {% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
            <script src=\"https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js\">
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
            {#<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>#}
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
            <script type=\"text/javascript\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
            <script src=\"{{ asset(\"js/validacionDocumento.js\") }}\"></script>
            <script src=\"{{ asset(\"js/comportamientos.js\") }}\"></script>
            <script src=\"{{ asset(\"js/accionesDinamicas.js\") }}\"></script>
            <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
            <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
            <script src=\"{{ asset('js/bootstrap-datetimepicker.js')}}\" rel=\"stylesheet\"></script>
            <script src=\"{{ asset('js/bootstrap-datetimepicker.es.js')}}\" rel=\"stylesheet\"></script>
            <script src=\"{{ asset('bower_components/jquery/jquery.min.js')}}\" rel=\"stylesheet\"></script>
            <script src=\"{{ asset('bower_components/moment/min/moment.min.js')}}\" rel=\"stylesheet\"></script>
            <script src=\"{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}\" rel=\"stylesheet\"></script>
            <script src=\"{{ asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}\" rel=\"stylesheet\"></script>
            
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Documentos/templates/base.html.twig");
    }
}
