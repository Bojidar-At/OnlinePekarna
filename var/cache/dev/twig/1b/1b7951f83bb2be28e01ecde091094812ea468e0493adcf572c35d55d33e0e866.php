<?php

/* base.html.twig */
class __TwigTemplate_0ed5b7b64839bf1df0acb6494a16c01f246ad8ea8f0fe895dd3dab8896146cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac09a998da4a3a4763a2d2d4b7c12e08ad1c74c181f72a0f5a7eafdde3273055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac09a998da4a3a4763a2d2d4b7c12e08ad1c74c181f72a0f5a7eafdde3273055->enter($__internal_ac09a998da4a3a4763a2d2d4b7c12e08ad1c74c181f72a0f5a7eafdde3273055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
<div class=\"container body-container\">
    ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "</div>

";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
</body>
</html>
";
        
        $__internal_ac09a998da4a3a4763a2d2d4b7c12e08ad1c74c181f72a0f5a7eafdde3273055->leave($__internal_ac09a998da4a3a4763a2d2d4b7c12e08ad1c74c181f72a0f5a7eafdde3273055_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_29ce1e0144fe0b143fa8e9f24a0971059a14c45be9234525253d78772fcaf5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ce1e0144fe0b143fa8e9f24a0971059a14c45be9234525253d78772fcaf5ea->enter($__internal_29ce1e0144fe0b143fa8e9f24a0971059a14c45be9234525253d78772fcaf5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_29ce1e0144fe0b143fa8e9f24a0971059a14c45be9234525253d78772fcaf5ea->leave($__internal_29ce1e0144fe0b143fa8e9f24a0971059a14c45be9234525253d78772fcaf5ea_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3046b330cb1fb80b62a57b86769c9ab4689bcf9a8c726689c93b0aafbd615ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3046b330cb1fb80b62a57b86769c9ab4689bcf9a8c726689c93b0aafbd615ad6->enter($__internal_3046b330cb1fb80b62a57b86769c9ab4689bcf9a8c726689c93b0aafbd615ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_3046b330cb1fb80b62a57b86769c9ab4689bcf9a8c726689c93b0aafbd615ad6->leave($__internal_3046b330cb1fb80b62a57b86769c9ab4689bcf9a8c726689c93b0aafbd615ad6_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_83cacafeab950d1e29239eb71a0cb439da4d69a3b249c53bab637bdce44d599d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cacafeab950d1e29239eb71a0cb439da4d69a3b249c53bab637bdce44d599d->enter($__internal_83cacafeab950d1e29239eb71a0cb439da4d69a3b249c53bab637bdce44d599d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_83cacafeab950d1e29239eb71a0cb439da4d69a3b249c53bab637bdce44d599d->leave($__internal_83cacafeab950d1e29239eb71a0cb439da4d69a3b249c53bab637bdce44d599d_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_6084da8380bdf80caec5534a610a7b508d777b4114cfef222faedef8ad4b9a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6084da8380bdf80caec5534a610a7b508d777b4114cfef222faedef8ad4b9a55->enter($__internal_6084da8380bdf80caec5534a610a7b508d777b4114cfef222faedef8ad4b9a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "                            <li>
                                <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 53
            echo "                            <li>
                                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 64
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_6084da8380bdf80caec5534a610a7b508d777b4114cfef222faedef8ad4b9a55->leave($__internal_6084da8380bdf80caec5534a610a7b508d777b4114cfef222faedef8ad4b9a55_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_06bd844034b272ff6ee03a9f3c9c7b757a1a0bc86a8b868a423aa7e5b3ebb4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bd844034b272ff6ee03a9f3c9c7b757a1a0bc86a8b868a423aa7e5b3ebb4ae->enter($__internal_06bd844034b272ff6ee03a9f3c9c7b757a1a0bc86a8b868a423aa7e5b3ebb4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 75
        $this->displayBlock('main', $context, $blocks);
        // line 76
        echo "            </div>
        </div>
    ";
        
        $__internal_06bd844034b272ff6ee03a9f3c9c7b757a1a0bc86a8b868a423aa7e5b3ebb4ae->leave($__internal_06bd844034b272ff6ee03a9f3c9c7b757a1a0bc86a8b868a423aa7e5b3ebb4ae_prof);

    }

    // line 75
    public function block_main($context, array $blocks = array())
    {
        $__internal_d4dd292944b4bedb6b0afe0d3626bf4f742912d4f1337d4c1f5d48402aac1049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4dd292944b4bedb6b0afe0d3626bf4f742912d4f1337d4c1f5d48402aac1049->enter($__internal_d4dd292944b4bedb6b0afe0d3626bf4f742912d4f1337d4c1f5d48402aac1049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d4dd292944b4bedb6b0afe0d3626bf4f742912d4f1337d4c1f5d48402aac1049->leave($__internal_d4dd292944b4bedb6b0afe0d3626bf4f742912d4f1337d4c1f5d48402aac1049_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        $__internal_aa7183ab03ea3055d764a7ca3570e5e685a21d87880ee0452c355c2c83d7b47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7183ab03ea3055d764a7ca3570e5e685a21d87880ee0452c355c2c83d7b47b->enter($__internal_aa7183ab03ea3055d764a7ca3570e5e685a21d87880ee0452c355c2c83d7b47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_aa7183ab03ea3055d764a7ca3570e5e685a21d87880ee0452c355c2c83d7b47b->leave($__internal_aa7183ab03ea3055d764a7ca3570e5e685a21d87880ee0452c355c2c83d7b47b_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0581a383cdc8adcfff4088288931b88f0d3fbdd984af15ba6addf370b03e18c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0581a383cdc8adcfff4088288931b88f0d3fbdd984af15ba6addf370b03e18c8->enter($__internal_0581a383cdc8adcfff4088288931b88f0d3fbdd984af15ba6addf370b03e18c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0581a383cdc8adcfff4088288931b88f0d3fbdd984af15ba6addf370b03e18c8->leave($__internal_0581a383cdc8adcfff4088288931b88f0d3fbdd984af15ba6addf370b03e18c8_prof);

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
        return array (  281 => 93,  277 => 92,  273 => 91,  268 => 90,  262 => 89,  250 => 82,  244 => 81,  233 => 75,  224 => 76,  222 => 75,  218 => 73,  212 => 72,  200 => 64,  192 => 59,  184 => 54,  181 => 53,  173 => 48,  165 => 43,  157 => 38,  154 => 37,  152 => 36,  139 => 26,  133 => 22,  127 => 21,  116 => 19,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 95,  72 => 89,  69 => 88,  67 => 81,  63 => 79,  61 => 72,  57 => 70,  55 => 21,  50 => 19,  43 => 16,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}SoftUni Blog{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            <li>
                                <a href=\"{{ path('article_create') }}\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
