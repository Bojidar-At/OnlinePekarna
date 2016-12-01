<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0224125f003befb6625d09da627c8913944b4d258793f74cf3694f00418276c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6d9bf1840cfd3f90ca6e8b53b27fe4c626ff65570a784c660a626c37909be1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9bf1840cfd3f90ca6e8b53b27fe4c626ff65570a784c660a626c37909be1d8->enter($__internal_6d9bf1840cfd3f90ca6e8b53b27fe4c626ff65570a784c660a626c37909be1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9bf1840cfd3f90ca6e8b53b27fe4c626ff65570a784c660a626c37909be1d8->leave($__internal_6d9bf1840cfd3f90ca6e8b53b27fe4c626ff65570a784c660a626c37909be1d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbd2dd66a0a7c1d224b2637f51afed89b00cf44b7481135dc433f87313bca7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd2dd66a0a7c1d224b2637f51afed89b00cf44b7481135dc433f87313bca7ca->enter($__internal_bbd2dd66a0a7c1d224b2637f51afed89b00cf44b7481135dc433f87313bca7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bbd2dd66a0a7c1d224b2637f51afed89b00cf44b7481135dc433f87313bca7ca->leave($__internal_bbd2dd66a0a7c1d224b2637f51afed89b00cf44b7481135dc433f87313bca7ca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1115b79973365647ca6db3084fdcbeddca0c27fdce680a17a8632c363b446bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1115b79973365647ca6db3084fdcbeddca0c27fdce680a17a8632c363b446bbc->enter($__internal_1115b79973365647ca6db3084fdcbeddca0c27fdce680a17a8632c363b446bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1115b79973365647ca6db3084fdcbeddca0c27fdce680a17a8632c363b446bbc->leave($__internal_1115b79973365647ca6db3084fdcbeddca0c27fdce680a17a8632c363b446bbc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57147e42b64e523e6f9036dcef043be9504e081e4c9f7ce41f1411a4bb68f7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57147e42b64e523e6f9036dcef043be9504e081e4c9f7ce41f1411a4bb68f7df->enter($__internal_57147e42b64e523e6f9036dcef043be9504e081e4c9f7ce41f1411a4bb68f7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_57147e42b64e523e6f9036dcef043be9504e081e4c9f7ce41f1411a4bb68f7df->leave($__internal_57147e42b64e523e6f9036dcef043be9504e081e4c9f7ce41f1411a4bb68f7df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
