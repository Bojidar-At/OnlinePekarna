<?php

/* form/fields.html.twig */
class __TwigTemplate_ba7af51711ab958647af393da96bd03e29750ed82b6a2585262890bd2957178e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65168351d257719cba76fabd617a6b82d9f4f437ba6ef8e5b5f0eec7390fb82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65168351d257719cba76fabd617a6b82d9f4f437ba6ef8e5b5f0eec7390fb82c->enter($__internal_65168351d257719cba76fabd617a6b82d9f4f437ba6ef8e5b5f0eec7390fb82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_65168351d257719cba76fabd617a6b82d9f4f437ba6ef8e5b5f0eec7390fb82c->leave($__internal_65168351d257719cba76fabd617a6b82d9f4f437ba6ef8e5b5f0eec7390fb82c_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_42a94b532514552e415ad43e12223c8c1aed1483dc0b90643cbf49c727dd2e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a94b532514552e415ad43e12223c8c1aed1483dc0b90643cbf49c727dd2e5a->enter($__internal_42a94b532514552e415ad43e12223c8c1aed1483dc0b90643cbf49c727dd2e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_42a94b532514552e415ad43e12223c8c1aed1483dc0b90643cbf49c727dd2e5a->leave($__internal_42a94b532514552e415ad43e12223c8c1aed1483dc0b90643cbf49c727dd2e5a_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
