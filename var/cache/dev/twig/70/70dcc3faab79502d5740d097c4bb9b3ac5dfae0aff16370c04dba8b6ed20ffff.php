<?php

/* base.html.twig */
class __TwigTemplate_caeedaa596ea47b0d157992dc769a30a5354f5b4f94d7d33443dc5efa7f9d7f5 extends Twig_Template
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
        $__internal_53797890e1c3da2dfed67887d86abc33ce076da43ceb06f590e9c86ab647cb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53797890e1c3da2dfed67887d86abc33ce076da43ceb06f590e9c86ab647cb0f->enter($__internal_53797890e1c3da2dfed67887d86abc33ce076da43ceb06f590e9c86ab647cb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_53797890e1c3da2dfed67887d86abc33ce076da43ceb06f590e9c86ab647cb0f->leave($__internal_53797890e1c3da2dfed67887d86abc33ce076da43ceb06f590e9c86ab647cb0f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ee9779f763699547f951b388d1dc7123955b64a1b4ade64d2f4f4abf0ceabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ee9779f763699547f951b388d1dc7123955b64a1b4ade64d2f4f4abf0ceabc->enter($__internal_68ee9779f763699547f951b388d1dc7123955b64a1b4ade64d2f4f4abf0ceabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_68ee9779f763699547f951b388d1dc7123955b64a1b4ade64d2f4f4abf0ceabc->leave($__internal_68ee9779f763699547f951b388d1dc7123955b64a1b4ade64d2f4f4abf0ceabc_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0af8c88f9482352e994e9af52d846c73647bd0ee39bf7a3089846f278aff3065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af8c88f9482352e994e9af52d846c73647bd0ee39bf7a3089846f278aff3065->enter($__internal_0af8c88f9482352e994e9af52d846c73647bd0ee39bf7a3089846f278aff3065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_0af8c88f9482352e994e9af52d846c73647bd0ee39bf7a3089846f278aff3065->leave($__internal_0af8c88f9482352e994e9af52d846c73647bd0ee39bf7a3089846f278aff3065_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0fa505a2a289869e59c574c8481c8516bb59fed4e1278c66bd230606f511a2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa505a2a289869e59c574c8481c8516bb59fed4e1278c66bd230606f511a2c8->enter($__internal_0fa505a2a289869e59c574c8481c8516bb59fed4e1278c66bd230606f511a2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_0fa505a2a289869e59c574c8481c8516bb59fed4e1278c66bd230606f511a2c8->leave($__internal_0fa505a2a289869e59c574c8481c8516bb59fed4e1278c66bd230606f511a2c8_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_1051633afb794a875a36ac6c76f7780bb78bd44dbf03611a79f8ada87584eebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1051633afb794a875a36ac6c76f7780bb78bd44dbf03611a79f8ada87584eebf->enter($__internal_1051633afb794a875a36ac6c76f7780bb78bd44dbf03611a79f8ada87584eebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1051633afb794a875a36ac6c76f7780bb78bd44dbf03611a79f8ada87584eebf->leave($__internal_1051633afb794a875a36ac6c76f7780bb78bd44dbf03611a79f8ada87584eebf_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee8889480eba0835662b1a095f4d1bef39060f07af2d61dd913b221e6c1b652f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8889480eba0835662b1a095f4d1bef39060f07af2d61dd913b221e6c1b652f->enter($__internal_ee8889480eba0835662b1a095f4d1bef39060f07af2d61dd913b221e6c1b652f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee8889480eba0835662b1a095f4d1bef39060f07af2d61dd913b221e6c1b652f->leave($__internal_ee8889480eba0835662b1a095f4d1bef39060f07af2d61dd913b221e6c1b652f_prof);

    }

    // line 75
    public function block_main($context, array $blocks = array())
    {
        $__internal_f345acf35c0de76e613370701d00fc7e350497ba2e20e0d152d2574780c2fa91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f345acf35c0de76e613370701d00fc7e350497ba2e20e0d152d2574780c2fa91->enter($__internal_f345acf35c0de76e613370701d00fc7e350497ba2e20e0d152d2574780c2fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_f345acf35c0de76e613370701d00fc7e350497ba2e20e0d152d2574780c2fa91->leave($__internal_f345acf35c0de76e613370701d00fc7e350497ba2e20e0d152d2574780c2fa91_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3154e313e3221c2c8d32d062a5c05808c3b746849b85e0c09be691b49fb7a203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3154e313e3221c2c8d32d062a5c05808c3b746849b85e0c09be691b49fb7a203->enter($__internal_3154e313e3221c2c8d32d062a5c05808c3b746849b85e0c09be691b49fb7a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_3154e313e3221c2c8d32d062a5c05808c3b746849b85e0c09be691b49fb7a203->leave($__internal_3154e313e3221c2c8d32d062a5c05808c3b746849b85e0c09be691b49fb7a203_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_233ca83d9158570b18d995c8825accfbefde2bda9f92a5b3c2e566f585546ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233ca83d9158570b18d995c8825accfbefde2bda9f92a5b3c2e566f585546ec7->enter($__internal_233ca83d9158570b18d995c8825accfbefde2bda9f92a5b3c2e566f585546ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_233ca83d9158570b18d995c8825accfbefde2bda9f92a5b3c2e566f585546ec7->leave($__internal_233ca83d9158570b18d995c8825accfbefde2bda9f92a5b3c2e566f585546ec7_prof);

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
