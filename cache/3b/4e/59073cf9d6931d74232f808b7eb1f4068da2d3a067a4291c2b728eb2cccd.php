<?php

/* basePrivada.html.twig */
class __TwigTemplate_3b4e59073cf9d6931d74232f808b7eb1f4068da2d3a067a4291c2b728eb2cccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'conteiner' => array($this, 'block_conteiner'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        
        <!-- Empieza la barra -->
        <nav class=\"navbar navbar-default navPrivada\">
            <div class=\"container-fluid\">
    
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle collapsed botonCel\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                  </button>
                  <a class=\"navbar-brand color-letra\" href=\"#\">Naveyra</a>
                </div>

    
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                  <ul class=\"nav navbar-nav\">
                    <li class=\"color-letra\"><a href=\"#\">Actualizar Contacto</a></li>
                    <li class=\"color-letra\"><a href=\"#\">Mis Datos</a></li>
                    <li class=\"color-letra\"><a href=\"#\">Cargar Noticia</a></li>
                    <li class=\"color-letra\"><a href=\"#\">Ir al Correo</a></li>
                    
                  </ul>
                  <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"color-letra\"><a href=\"../controlador/logout.php\">Cerrar Sesion</a></li>
                   
                  </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->
        <div id=\"conteiner\">";
        // line 49
        $this->displayBlock('conteiner', $context, $blocks);
        echo "</div>
        <div id=\"footer\">
            ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    \t\t<link rel=\"shortcut icon\" href=\"favicon.ico\" />
    \t\t<link href=\"../css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\">
    \t\t<link href=\"../css/admin.css\" rel=\"stylesheet\" media=\"screen\">
            <script src=\"http://code.jquery.com/jquery.js\"></script>
            <script src=\"../js/bootstrap.min.js\"></script>
            <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo " - Financiera Naveyra</title>
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 49
    public function block_conteiner($context, array $blocks = array())
    {
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "  \t\t\t\t<hr style=\"width:100%;position: absolute; bottom: 25px;\">
            ";
    }

    public function getTemplateName()
    {
        return "basePrivada.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  108 => 51,  103 => 49,  93 => 13,  84 => 6,  81 => 5,  74 => 54,  72 => 51,  67 => 49,  31 => 15,  29 => 5,  23 => 1,);
    }
}
