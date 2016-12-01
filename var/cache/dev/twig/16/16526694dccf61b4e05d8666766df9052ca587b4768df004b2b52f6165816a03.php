<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a667a8af75520a71cd26942cee72f2b48405055bdb1faa9d3b46b4069c511c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f6770da012fcc4bcab0ab3ed128cb19174434089716ae34372975d9c779b392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6770da012fcc4bcab0ab3ed128cb19174434089716ae34372975d9c779b392->enter($__internal_8f6770da012fcc4bcab0ab3ed128cb19174434089716ae34372975d9c779b392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f6770da012fcc4bcab0ab3ed128cb19174434089716ae34372975d9c779b392->leave($__internal_8f6770da012fcc4bcab0ab3ed128cb19174434089716ae34372975d9c779b392_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_897014793d20a105223021da267757c70a79a365c60ad6634b0e33e02000d0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897014793d20a105223021da267757c70a79a365c60ad6634b0e33e02000d0a4->enter($__internal_897014793d20a105223021da267757c70a79a365c60ad6634b0e33e02000d0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_897014793d20a105223021da267757c70a79a365c60ad6634b0e33e02000d0a4->leave($__internal_897014793d20a105223021da267757c70a79a365c60ad6634b0e33e02000d0a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28e24f4bb5859d94f8c47a4338f5b692f1c4131a242c2a588bcb8e7eada1ba5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e24f4bb5859d94f8c47a4338f5b692f1c4131a242c2a588bcb8e7eada1ba5a->enter($__internal_28e24f4bb5859d94f8c47a4338f5b692f1c4131a242c2a588bcb8e7eada1ba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28e24f4bb5859d94f8c47a4338f5b692f1c4131a242c2a588bcb8e7eada1ba5a->leave($__internal_28e24f4bb5859d94f8c47a4338f5b692f1c4131a242c2a588bcb8e7eada1ba5a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fac003de6df4104db22baf4e1ce5629490c4037abaceebb293ef8aeda6f5b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fac003de6df4104db22baf4e1ce5629490c4037abaceebb293ef8aeda6f5b76->enter($__internal_7fac003de6df4104db22baf4e1ce5629490c4037abaceebb293ef8aeda6f5b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7fac003de6df4104db22baf4e1ce5629490c4037abaceebb293ef8aeda6f5b76->leave($__internal_7fac003de6df4104db22baf4e1ce5629490c4037abaceebb293ef8aeda6f5b76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
