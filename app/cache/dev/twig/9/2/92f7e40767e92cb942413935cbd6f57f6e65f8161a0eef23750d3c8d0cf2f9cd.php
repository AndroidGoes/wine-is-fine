<?php

/* navbar.html.twig */
class __TwigTemplate_92f7e40767e92cb942413935cbd6f57f6e65f8161a0eef23750d3c8d0cf2f9cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "navbar.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1045ea47e1e1d6356ae3090156affc71bb421e87f2d97d42a73175e9de35f8a1 = $this->env->getExtension("native_profiler");
        $__internal_1045ea47e1e1d6356ae3090156affc71bb421e87f2d97d42a73175e9de35f8a1->enter($__internal_1045ea47e1e1d6356ae3090156affc71bb421e87f2d97d42a73175e9de35f8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1045ea47e1e1d6356ae3090156affc71bb421e87f2d97d42a73175e9de35f8a1->leave($__internal_1045ea47e1e1d6356ae3090156affc71bb421e87f2d97d42a73175e9de35f8a1_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_582ff300a0b16590730ce06b673b2173df8a77929328ef66b9b368d5092db371 = $this->env->getExtension("native_profiler");
        $__internal_582ff300a0b16590730ce06b673b2173df8a77929328ef66b9b368d5092db371->enter($__internal_582ff300a0b16590730ce06b673b2173df8a77929328ef66b9b368d5092db371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 3
        echo "<!-- Fixed navbar -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li class=\"dropdown-header\">Nav header</li>
                <li><a href=\"#\">Separated link</a></li>
                <li><a href=\"#\">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"../navbar/\">Default</a></li>
            <li><a href=\"../navbar-static-top/\">Static top</a></li>
            <li class=\"active\"><a href=\"./\">Fixed top <span class=\"sr-only\">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
";
        
        $__internal_582ff300a0b16590730ce06b673b2173df8a77929328ef66b9b368d5092db371->leave($__internal_582ff300a0b16590730ce06b673b2173df8a77929328ef66b9b368d5092db371_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
