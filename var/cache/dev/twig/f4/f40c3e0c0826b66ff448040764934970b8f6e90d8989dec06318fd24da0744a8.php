<?php

/* user/profile.html.twig */
class __TwigTemplate_f625520a7d95cae5c0fc0b8a21cbbca8f4d7bc7aa9c69607b1e0066158ac83b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_214561418659992685c6417ebac8fa98e0aecf4f39cf622e9e65fe9731956068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214561418659992685c6417ebac8fa98e0aecf4f39cf622e9e65fe9731956068->enter($__internal_214561418659992685c6417ebac8fa98e0aecf4f39cf622e9e65fe9731956068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214561418659992685c6417ebac8fa98e0aecf4f39cf622e9e65fe9731956068->leave($__internal_214561418659992685c6417ebac8fa98e0aecf4f39cf622e9e65fe9731956068_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9af8e286cf901225e4263d388374643300b1c49f155ddf20928fcf056cb2d18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af8e286cf901225e4263d388374643300b1c49f155ddf20928fcf056cb2d18f->enter($__internal_9af8e286cf901225e4263d388374643300b1c49f155ddf20928fcf056cb2d18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_9af8e286cf901225e4263d388374643300b1c49f155ddf20928fcf056cb2d18f->leave($__internal_9af8e286cf901225e4263d388374643300b1c49f155ddf20928fcf056cb2d18f_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_941f96aa451fe64504aa190c5d469f0a8eecc8badf3376ed4dd59289dcf163d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941f96aa451fe64504aa190c5d469f0a8eecc8badf3376ed4dd59289dcf163d5->enter($__internal_941f96aa451fe64504aa190c5d469f0a8eecc8badf3376ed4dd59289dcf163d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_941f96aa451fe64504aa190c5d469f0a8eecc8badf3376ed4dd59289dcf163d5->leave($__internal_941f96aa451fe64504aa190c5d469f0a8eecc8badf3376ed4dd59289dcf163d5_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
