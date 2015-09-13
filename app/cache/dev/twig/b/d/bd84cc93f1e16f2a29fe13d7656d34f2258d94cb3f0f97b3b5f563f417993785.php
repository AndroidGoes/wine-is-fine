<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bd84cc93f1e16f2a29fe13d7656d34f2258d94cb3f0f97b3b5f563f417993785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d981b69f26f16e2cf29d2c0cdfbf9a93c965700a8223253f22eaa000e8ed7f4 = $this->env->getExtension("native_profiler");
        $__internal_6d981b69f26f16e2cf29d2c0cdfbf9a93c965700a8223253f22eaa000e8ed7f4->enter($__internal_6d981b69f26f16e2cf29d2c0cdfbf9a93c965700a8223253f22eaa000e8ed7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d981b69f26f16e2cf29d2c0cdfbf9a93c965700a8223253f22eaa000e8ed7f4->leave($__internal_6d981b69f26f16e2cf29d2c0cdfbf9a93c965700a8223253f22eaa000e8ed7f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7ef51b5ec633363f344724803b6d84b33ee663e914c9fb2750db832c0c6e31f = $this->env->getExtension("native_profiler");
        $__internal_a7ef51b5ec633363f344724803b6d84b33ee663e914c9fb2750db832c0c6e31f->enter($__internal_a7ef51b5ec633363f344724803b6d84b33ee663e914c9fb2750db832c0c6e31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7ef51b5ec633363f344724803b6d84b33ee663e914c9fb2750db832c0c6e31f->leave($__internal_a7ef51b5ec633363f344724803b6d84b33ee663e914c9fb2750db832c0c6e31f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d1eda6669af27456714af595cc1e97c7148e69387036e8eea6455c48f9ab535 = $this->env->getExtension("native_profiler");
        $__internal_7d1eda6669af27456714af595cc1e97c7148e69387036e8eea6455c48f9ab535->enter($__internal_7d1eda6669af27456714af595cc1e97c7148e69387036e8eea6455c48f9ab535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d1eda6669af27456714af595cc1e97c7148e69387036e8eea6455c48f9ab535->leave($__internal_7d1eda6669af27456714af595cc1e97c7148e69387036e8eea6455c48f9ab535_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_956ff0f9c47fbea87e98cd61b7e13a6a3f3f68dae3f74c66feff819b495f0ed2 = $this->env->getExtension("native_profiler");
        $__internal_956ff0f9c47fbea87e98cd61b7e13a6a3f3f68dae3f74c66feff819b495f0ed2->enter($__internal_956ff0f9c47fbea87e98cd61b7e13a6a3f3f68dae3f74c66feff819b495f0ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_956ff0f9c47fbea87e98cd61b7e13a6a3f3f68dae3f74c66feff819b495f0ed2->leave($__internal_956ff0f9c47fbea87e98cd61b7e13a6a3f3f68dae3f74c66feff819b495f0ed2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
