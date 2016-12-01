<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_03827a68b68fe954ae297f2e73bb28166d7ddf7be247869c0c4f0b7d753c981a extends Twig_Template
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
        $__internal_fbcbdaacc3cad603443d343346b006bfdc607012405b7764c5a572c9d34ce9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcbdaacc3cad603443d343346b006bfdc607012405b7764c5a572c9d34ce9d0->enter($__internal_fbcbdaacc3cad603443d343346b006bfdc607012405b7764c5a572c9d34ce9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbcbdaacc3cad603443d343346b006bfdc607012405b7764c5a572c9d34ce9d0->leave($__internal_fbcbdaacc3cad603443d343346b006bfdc607012405b7764c5a572c9d34ce9d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57392c279c51c2dda9a374c667af021b3f08ece020750105989c9fbaa3f2e6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57392c279c51c2dda9a374c667af021b3f08ece020750105989c9fbaa3f2e6b2->enter($__internal_57392c279c51c2dda9a374c667af021b3f08ece020750105989c9fbaa3f2e6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57392c279c51c2dda9a374c667af021b3f08ece020750105989c9fbaa3f2e6b2->leave($__internal_57392c279c51c2dda9a374c667af021b3f08ece020750105989c9fbaa3f2e6b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6fe6f2b03edc6a33f9bd55509eddd9685ab7444b34b804b2ced1c5c1e4bd362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fe6f2b03edc6a33f9bd55509eddd9685ab7444b34b804b2ced1c5c1e4bd362->enter($__internal_b6fe6f2b03edc6a33f9bd55509eddd9685ab7444b34b804b2ced1c5c1e4bd362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6fe6f2b03edc6a33f9bd55509eddd9685ab7444b34b804b2ced1c5c1e4bd362->leave($__internal_b6fe6f2b03edc6a33f9bd55509eddd9685ab7444b34b804b2ced1c5c1e4bd362_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f95bc7f7ff9cd2f4dcc5e4f3376183bcdbbed7ddaf28dca70dbac369287d1fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95bc7f7ff9cd2f4dcc5e4f3376183bcdbbed7ddaf28dca70dbac369287d1fe9->enter($__internal_f95bc7f7ff9cd2f4dcc5e4f3376183bcdbbed7ddaf28dca70dbac369287d1fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f95bc7f7ff9cd2f4dcc5e4f3376183bcdbbed7ddaf28dca70dbac369287d1fe9->leave($__internal_f95bc7f7ff9cd2f4dcc5e4f3376183bcdbbed7ddaf28dca70dbac369287d1fe9_prof);

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
