<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_88a9441c4bb7349f2794695e8b2100fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $context["menus"] = twig_get_attribute($this->env, $this->source, (isset($context["menu_service"]) || array_key_exists("menu_service", $context) ? $context["menu_service"] : (function () { throw new RuntimeError('Variable "menu_service" does not exist.', 1, $this->source); })()), "findAll", [], "any", false, false, false, 1);
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Blog v3 !- ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>


    <body style='background: url(\"/uploads/beautiful-emerald-lake-yoho-national-park-british-columbia-canada-131985-177-0674f52a-5b4e-44f5-b4fc-b0790251c162.jpg\"); '  class=\"\" url(\"/uploads/ricinus-communis-plante-medicinale-2-2-720x380-b7c7dcc3-61a3-4c85-bd49-ea8f67c30c3a.jpg\")>
        ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUTHOR")) {
            // line 22
            echo "
        <nav class=\"py-2 bg-dark border-bottom\">
            <div class=\"container d-flex flex-wrap\">
                <div class=\"dropdown\">
                    <a class=\"nav-link link-light px-2 dropdown-toggle text-white rc_white\" href=\"#\" role=\"button\" id=\"dropdownAdminLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Mon blog
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownAdminLink\">
                        <li><a class=\"dropdown-item\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Tableau de bord</a>
                        ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 32
                echo "  
                        <li><a class=\"dropdown-item\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getAdminUrl("MenuCrudController"), "html", null, true);
                echo "\">Menus</a></li>
                        ";
            }
            // line 35
            echo "                    
                    
                    </ul>
                </div>
                <div class=\"dropdown\">
                    <a class=\"nav-link link-light px-2 dropdown-toggle text-white\" href=\"#\" role=\"button\" id=\"dropdownAdminLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Ajouter
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownAdminLink\">
                        <li><a class=\"dropdown-item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getAdminUrl("ArticleCrudController", "new"), "html", null, true);
            echo "\">Article</a>
                        <li><a class=\"dropdown-item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getAdminUrl("PageCrudController", "new"), "html", null, true);
            echo "\">Page</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        ";
        }
        // line 52
        echo "

        <div class=\"container\">
            <header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
               
                <a class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" >
                    <span class=\"fs-4 rc_white\"> Mon blog</span>
                </a>

                <ul class=\"nav nav-pills align-items-center\">



                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 66
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["menu"], "subMenus", [], "any", false, false, false, 66), "count", [], "any", false, false, false, 66) > 0)) {
                // line 67
                echo "                            <div class=\"dropdown\">
                                <a class=\"nav-link link-light px-2 dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <span class=\"menu-label text-primary\" >";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "subMenus", [], "any", false, false, false, 72));
                foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                    // line 73
                    echo "                                        <li><a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->menuLink($context["subMenu"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 73), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                                </ul>
                            </div>
                        ";
            } else {
                // line 78
                echo "                            <li class=\"nav-item\">
                                <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->menuLink($context["menu"]), "html", null, true);
                echo "\" class=\"nav-link\">
                                    <span class=\"menu-label\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 80), "html", null, true);
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            // line 84
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    ";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 86
            echo "
                    <li class=\"nav-item\"><a class=\"nav-link text-dark\" href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscire</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
                    
                    ";
        } else {
            // line 91
            echo "
                        <div class=\"dropdown\">
                            <a class=\"nav-link  px-2 dropdown-toggle text-dark\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                ";
            // line 94
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "username", [], "any", false, false, false, 94)), "html", null, true);
            echo "
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "username", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">Mon profil</a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                                </li>
                            </ul>
                        </div>
                    ";
        }
        // line 106
        echo "                </ul>

            </header>
        </div>


        <div class=\"main_body\">
            ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "        </div>
        ";
        // line 115
        $this->loadTemplate("footer.html.twig", "base.html.twig", 115)->display($context);
        // line 116
        echo "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  334 => 113,  321 => 15,  311 => 14,  298 => 11,  288 => 10,  270 => 7,  259 => 116,  257 => 115,  254 => 114,  252 => 113,  243 => 106,  235 => 101,  229 => 98,  222 => 94,  217 => 91,  211 => 88,  207 => 87,  204 => 86,  201 => 85,  195 => 84,  188 => 80,  184 => 79,  181 => 78,  176 => 75,  165 => 73,  161 => 72,  155 => 69,  151 => 67,  148 => 66,  144 => 65,  133 => 57,  126 => 52,  116 => 45,  112 => 44,  101 => 35,  96 => 33,  93 => 32,  91 => 31,  87 => 30,  77 => 22,  75 => 21,  69 => 17,  67 => 14,  64 => 13,  61 => 10,  56 => 7,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set menus = menu_service.findAll %}

<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Blog v3 !- {% block title %}{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>


    <body style='background: url(\"/uploads/beautiful-emerald-lake-yoho-national-park-british-columbia-canada-131985-177-0674f52a-5b4e-44f5-b4fc-b0790251c162.jpg\"); '  class=\"\" url(\"/uploads/ricinus-communis-plante-medicinale-2-2-720x380-b7c7dcc3-61a3-4c85-bd49-ea8f67c30c3a.jpg\")>
        {% if is_granted('ROLE_AUTHOR') %}

        <nav class=\"py-2 bg-dark border-bottom\">
            <div class=\"container d-flex flex-wrap\">
                <div class=\"dropdown\">
                    <a class=\"nav-link link-light px-2 dropdown-toggle text-white rc_white\" href=\"#\" role=\"button\" id=\"dropdownAdminLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Mon blog
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownAdminLink\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('admin')}}\">Tableau de bord</a>
                        {% if is_granted('ROLE_ADMIN') %}
  
                        <li><a class=\"dropdown-item\" href=\"{{ ea_admin_url('MenuCrudController')}}\">Menus</a></li>
                        {% endif %}
                    
                    
                    </ul>
                </div>
                <div class=\"dropdown\">
                    <a class=\"nav-link link-light px-2 dropdown-toggle text-white\" href=\"#\" role=\"button\" id=\"dropdownAdminLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        Ajouter
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownAdminLink\">
                        <li><a class=\"dropdown-item\" href=\"{{ea_admin_url('ArticleCrudController', 'new')}}\">Article</a>
                        <li><a class=\"dropdown-item\" href=\"{{ea_admin_url('PageCrudController', 'new')}}\">Page</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        {% endif %}


        <div class=\"container\">
            <header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
               
                <a class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none\" href=\"{{ path('app_home')}}\" >
                    <span class=\"fs-4 rc_white\"> Mon blog</span>
                </a>

                <ul class=\"nav nav-pills align-items-center\">



                    {% for menu in menus %}
                        {% if menu.subMenus.count > 0 %}
                            <div class=\"dropdown\">
                                <a class=\"nav-link link-light px-2 dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <span class=\"menu-label text-primary\" >{{ menu.name }}</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    {% for subMenu in menu.subMenus %}
                                        <li><a class=\"dropdown-item\" href=\"{{ subMenu|menuLink }}\">{{ subMenu.name }}</a></li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ menu|menuLink }}\" class=\"nav-link\">
                                    <span class=\"menu-label\">{{ menu.name }}</span>
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                    {% if not is_granted('IS_AUTHENTICATED_FULLY') %}

                    <li class=\"nav-item\"><a class=\"nav-link text-dark\" href=\"{{path('app_register')}}\">S'inscire</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_login')}}\">Se connecter</a></li>
                    
                    {% else %}

                        <div class=\"dropdown\">
                            <a class=\"nav-link  px-2 dropdown-toggle text-dark\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                {{ app.user.username|capitalize }}
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{path('app_profile', { username: app.user.username }) }}\">Mon profil</a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                                </li>
                            </ul>
                        </div>
                    {% endif %}
                </ul>

            </header>
        </div>


        <div class=\"main_body\">
            {% block body %}{% endblock %}
        </div>
        {% include 'footer.html.twig'  %}
    </body>
</html>", "base.html.twig", "/home/turing/Bureau/plateforme/tuto/v3/templates/base.html.twig");
    }
}
