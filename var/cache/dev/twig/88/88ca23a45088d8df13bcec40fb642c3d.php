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

/* article/item.html.twig */
class __TwigTemplate_cdde7a7886a61c120c6aa41160e99fff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/item.html.twig"));

        // line 1
        $context["article_show"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 1, $this->source); })()), "slug", [], "any", false, false, false, 1)]);
        // line 2
        echo "
<article class=\"mb-5 \">
    <div class=\"row element_article\">
        <div class=\"col-md-7\">
            ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "featuredImage", [], "any", false, false, false, 6)) {
            // line 7
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["article_show"]) || array_key_exists("article_show", $context) ? $context["article_show"] : (function () { throw new RuntimeError('Variable "article_show" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "featuredImage", [], "any", false, false, false, 8), "filename", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "featuredImage", [], "any", false, false, false, 8), "altText", [], "any", false, false, false, 8), "html", null, true);
            echo "\" loading=\"lazy\" width=\"550\" height=\"405\" >
                </a>
            ";
        }
        // line 11
        echo "        </div>
        <div class=\"col-md-7\">
            <h2 class=\"article-title\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["article_show"]) || array_key_exists("article_show", $context) ? $context["article_show"] : (function () { throw new RuntimeError('Variable "article_show" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\"  class=\"text-decoration-none\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>
            </h2>
            <p>
                ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "createdAt", [], "any", false, false, false, 17), "d M Y"), "html", null, true);
        echo " 

            </p>
            ";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "featuredText", [], "any", false, false, false, 20)) ? (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "featuredText", [], "any", false, false, false, 20)) : ((twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20)), 0, 130) . "..."))), "html", null, true);
        echo "
        </div>
    </div>
</article>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  79 => 17,  71 => 14,  66 => 11,  58 => 8,  53 => 7,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set article_show = path('article_show', {'slug': article.slug }) %}

<article class=\"mb-5 \">
    <div class=\"row element_article\">
        <div class=\"col-md-7\">
            {% if article.featuredImage %}
                <a href=\"{{ article_show }}\">
                    <img src=\"/uploads/{{ article.featuredImage.filename }}\" alt=\"{{ article.featuredImage.altText }}\" loading=\"lazy\" width=\"550\" height=\"405\" >
                </a>
            {% endif %}
        </div>
        <div class=\"col-md-7\">
            <h2 class=\"article-title\">
                <a href=\"{{ article_show }}\"  class=\"text-decoration-none\">{{ article.title }}</a>
            </h2>
            <p>
                {{ article.createdAt|date('d M Y') }} 

            </p>
            {{ article.featuredText ?: article.content|striptags|slice(0, 130) ~ '...' }}
        </div>
    </div>
</article>", "article/item.html.twig", "/home/turing/Bureau/plateforme/tuto/v3/templates/article/item.html.twig");
    }
}
