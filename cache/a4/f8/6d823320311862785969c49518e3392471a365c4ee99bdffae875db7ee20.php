<?php

/* noticia.html.twig */
class __TwigTemplate_a4f86d823320311862785969c49518e3392471a365c4ee99bdffae875db7ee20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basePrivada.html.twig", "noticia.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'conteiner' => array($this, 'block_conteiner'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basePrivada.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Cargar Noticia";
    }

    // line 5
    public function block_conteiner($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"container-fluid\">
      <div class=\"text-center\">
        <h1>Bootstrap forms</h1>
        <p class=\"lead\">Crea o edita noticias desde esta pagina. </p>
      </div>
      <form class=\"form-horizontal\" role=\"form\">
        <div class=\"row\">
          <div class=\"col-sm-6 col-lg-8\">
            <div class=\"form-group\">
              <label for=\"titulo\" class=\"col-md-4 control-label\">Titulo:</label>
              <div class=\"col-md-8\">
                <input type=\"text\" class=\"form-control\" id=\"titulo\" placeholder=\"Titulo\">
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 col-lg-8\">
            <div class=\"form-group\">
              <label for=\"pienota\" class=\"col-md-4 control-label\">Nota:</label>
              <div class=\"col-md-8\">
                <input type=\"text\" class=\"form-control\" id=\"pienota\" placeholder=\"Nota\">
              </div>
            </div>
          </div>
        </div>
        
      </form>
      
</div>
";
    }

    public function getTemplateName()
    {
        return "noticia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
