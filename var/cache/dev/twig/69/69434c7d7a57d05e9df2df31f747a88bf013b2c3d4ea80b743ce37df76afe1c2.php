<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d201c790d52ada3a4338bb55dd90cb794cd38e538a126caad7ef765ebdbdb203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_536af7e2911fc49d227291ba337390ef423c1716741af97320ffe2f6b0e15cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536af7e2911fc49d227291ba337390ef423c1716741af97320ffe2f6b0e15cbb->enter($__internal_536af7e2911fc49d227291ba337390ef423c1716741af97320ffe2f6b0e15cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_536af7e2911fc49d227291ba337390ef423c1716741af97320ffe2f6b0e15cbb->leave($__internal_536af7e2911fc49d227291ba337390ef423c1716741af97320ffe2f6b0e15cbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00ab265a1b44a0b6bf14356e1fc28ca92793b49521cf26dfc2f2319886d624df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ab265a1b44a0b6bf14356e1fc28ca92793b49521cf26dfc2f2319886d624df->enter($__internal_00ab265a1b44a0b6bf14356e1fc28ca92793b49521cf26dfc2f2319886d624df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_00ab265a1b44a0b6bf14356e1fc28ca92793b49521cf26dfc2f2319886d624df->leave($__internal_00ab265a1b44a0b6bf14356e1fc28ca92793b49521cf26dfc2f2319886d624df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69972d715bd398faa3016745e77419fe2166d71f610a67b2b834249e4aaab968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69972d715bd398faa3016745e77419fe2166d71f610a67b2b834249e4aaab968->enter($__internal_69972d715bd398faa3016745e77419fe2166d71f610a67b2b834249e4aaab968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69972d715bd398faa3016745e77419fe2166d71f610a67b2b834249e4aaab968->leave($__internal_69972d715bd398faa3016745e77419fe2166d71f610a67b2b834249e4aaab968_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b6db0c48d10c014397b1b4113bd20cb7b2f4a8a989b22e1a2f42f5e5357c568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6db0c48d10c014397b1b4113bd20cb7b2f4a8a989b22e1a2f42f5e5357c568->enter($__internal_7b6db0c48d10c014397b1b4113bd20cb7b2f4a8a989b22e1a2f42f5e5357c568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b6db0c48d10c014397b1b4113bd20cb7b2f4a8a989b22e1a2f42f5e5357c568->leave($__internal_7b6db0c48d10c014397b1b4113bd20cb7b2f4a8a989b22e1a2f42f5e5357c568_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
