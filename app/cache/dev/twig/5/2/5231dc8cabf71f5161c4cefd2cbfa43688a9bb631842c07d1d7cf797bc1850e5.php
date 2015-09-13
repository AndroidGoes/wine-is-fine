<?php

/* base.html.twig */
class __TwigTemplate_5231dc8cabf71f5161c4cefd2cbfa43688a9bb631842c07d1d7cf797bc1850e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bf81e8e8bc4973381c984c23efec370fd46d2568f339d49c2373fc6129d6c9f = $this->env->getExtension("native_profiler");
        $__internal_6bf81e8e8bc4973381c984c23efec370fd46d2568f339d49c2373fc6129d6c9f->enter($__internal_6bf81e8e8bc4973381c984c23efec370fd46d2568f339d49c2373fc6129d6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_6bf81e8e8bc4973381c984c23efec370fd46d2568f339d49c2373fc6129d6c9f->leave($__internal_6bf81e8e8bc4973381c984c23efec370fd46d2568f339d49c2373fc6129d6c9f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b079750f47facfb8abecabb17f768b6acee651144719d6609502e913fa17440 = $this->env->getExtension("native_profiler");
        $__internal_2b079750f47facfb8abecabb17f768b6acee651144719d6609502e913fa17440->enter($__internal_2b079750f47facfb8abecabb17f768b6acee651144719d6609502e913fa17440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Wine is fine";
        
        $__internal_2b079750f47facfb8abecabb17f768b6acee651144719d6609502e913fa17440->leave($__internal_2b079750f47facfb8abecabb17f768b6acee651144719d6609502e913fa17440_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f975cc46edb9221fccbb4812d14bf9fada89df28785960462291884277e860d3 = $this->env->getExtension("native_profiler");
        $__internal_f975cc46edb9221fccbb4812d14bf9fada89df28785960462291884277e860d3->enter($__internal_f975cc46edb9221fccbb4812d14bf9fada89df28785960462291884277e860d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"http://getbootstrap.com/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        ";
        
        $__internal_f975cc46edb9221fccbb4812d14bf9fada89df28785960462291884277e860d3->leave($__internal_f975cc46edb9221fccbb4812d14bf9fada89df28785960462291884277e860d3_prof);

    }

    // line 12
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_203f4f7512069e43f17b9474b932a1630036544afed181515e972ece19bdc470 = $this->env->getExtension("native_profiler");
        $__internal_203f4f7512069e43f17b9474b932a1630036544afed181515e972ece19bdc470->enter($__internal_203f4f7512069e43f17b9474b932a1630036544afed181515e972ece19bdc470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_include($this->env, $context, "navbar.html.twig");
        
        $__internal_203f4f7512069e43f17b9474b932a1630036544afed181515e972ece19bdc470->leave($__internal_203f4f7512069e43f17b9474b932a1630036544afed181515e972ece19bdc470_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f85b1b69afee5f92868c5e48bbde3970307e6bde73c022a4f7d9648dcc4837ae = $this->env->getExtension("native_profiler");
        $__internal_f85b1b69afee5f92868c5e48bbde3970307e6bde73c022a4f7d9648dcc4837ae->enter($__internal_f85b1b69afee5f92868c5e48bbde3970307e6bde73c022a4f7d9648dcc4837ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f85b1b69afee5f92868c5e48bbde3970307e6bde73c022a4f7d9648dcc4837ae->leave($__internal_f85b1b69afee5f92868c5e48bbde3970307e6bde73c022a4f7d9648dcc4837ae_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43572696b9ac543381919a63a21da23f7cfe4a81b29482cd78d49eaa3a529e4f = $this->env->getExtension("native_profiler");
        $__internal_43572696b9ac543381919a63a21da23f7cfe4a81b29482cd78d49eaa3a529e4f->enter($__internal_43572696b9ac543381919a63a21da23f7cfe4a81b29482cd78d49eaa3a529e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
            <script src=\"http://getbootstrap.com/dist/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_43572696b9ac543381919a63a21da23f7cfe4a81b29482cd78d49eaa3a529e4f->leave($__internal_43572696b9ac543381919a63a21da23f7cfe4a81b29482cd78d49eaa3a529e4f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 15,  112 => 14,  101 => 13,  89 => 12,  81 => 7,  75 => 6,  63 => 5,  54 => 18,  51 => 14,  48 => 13,  46 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
    }
}
