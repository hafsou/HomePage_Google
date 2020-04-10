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
class __TwigTemplate_f7b1bccbbe15252b33915401b9154a09023ec60098f719c6da4451bef2fe13ba extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap"), "html", null, true);
        echo " rel=\"stylesheet\">

        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/google.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    
    <body>
         <div class=\"top-bar\">
      <div class=\"bar-right\">
        <div class=\"menu\">
          <a href=\"\">Gmail</a>
          <a href=\"\">Images</a>
        </div>
      </div>
    </div>
    <div class=\"content\">
      <div class=\"search-wrapper\">
        <a href=\"\" class=\"search-logo\">
          <img src=\"images/gge.gif\">
        </a>
        <div class=\"search-bar\">
          <div class=\"search-icon\">
            <i class=\"fa fa-search\"></i>
          </div>
          <input type=\"text\">
          <div class=\"search-icon right\">
            <i class=\"fa fa-microphone\"></i>
          </div>
        </div>
        <div class=\"search-buttons\">
          <a href=\"\">Recherche Google</a>
          <a href=\"\">J'ai de la chance</a>
        </div>
        <p class=\"search-info\">
          Google disponible en : <a href=\"\">English</a>
        </p>
      </div>
    </div>
    <div class=\"bottom-bar\">
      <div class=\"bar-left\">
        <div class=\"menu\">
          <a href=\"\">Publicité</a>
          <a href=\"\">Entreprise</a>
          <a href=\"\">à propos</a>
        </div>
      </div>
      </div>
   
    <button class=\"open-button\" onclick=\"openForm()\">Consultez vos notes</button>
    <div class=\"chat-popup\" id=\"myForm\">
    <form action=\"\" method=\"post\" class=\"form-container\">
         <h1>Cahier de notes</h1>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 63
            echo "
        <tr>
            <textarea>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "contenu", [], "any", false, false, false, 65), "html", null, true);
            echo "</textarea> 
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        <tr>
            <textarea name=\"contenu\" placeholder=\"Ecrire note..\" name=\"msg\" required></textarea> 
        </tr>
    
        <tr>
            <td><button type=\"submit\" class=\"btn\">Ajouter</button></td>
            <td><button type=\"button\" class=\"btn cancel\" onclick=\"closeForm()\">Fermer</button></td>
        </tr>
    </form>

    </div>
    
    <script>
        function openForm() {

            document.getElementById(\"myForm\").style.display = \"block\";
        }

        function closeForm() {

            document.getElementById(\"myForm\").style.display = \"none\";
        }

        </script>

        ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Google HomePage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  218 => 95,  206 => 94,  194 => 13,  181 => 5,  172 => 96,  169 => 95,  167 => 94,  140 => 69,  130 => 65,  126 => 63,  122 => 62,  72 => 14,  70 => 13,  65 => 11,  60 => 9,  55 => 7,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Google HomePage{% endblock %}</title>

        <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap') }} rel=\"stylesheet\">

        <link href=\"{{ asset('https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css') }}\" rel=\"stylesheet\">

        <link href=\"{{ asset('css/google.css') }}\" rel=\"stylesheet\"/>

        {% block stylesheets %}{% endblock %}
    </head>
    
    <body>
         <div class=\"top-bar\">
      <div class=\"bar-right\">
        <div class=\"menu\">
          <a href=\"\">Gmail</a>
          <a href=\"\">Images</a>
        </div>
      </div>
    </div>
    <div class=\"content\">
      <div class=\"search-wrapper\">
        <a href=\"\" class=\"search-logo\">
          <img src=\"images/gge.gif\">
        </a>
        <div class=\"search-bar\">
          <div class=\"search-icon\">
            <i class=\"fa fa-search\"></i>
          </div>
          <input type=\"text\">
          <div class=\"search-icon right\">
            <i class=\"fa fa-microphone\"></i>
          </div>
        </div>
        <div class=\"search-buttons\">
          <a href=\"\">Recherche Google</a>
          <a href=\"\">J'ai de la chance</a>
        </div>
        <p class=\"search-info\">
          Google disponible en : <a href=\"\">English</a>
        </p>
      </div>
    </div>
    <div class=\"bottom-bar\">
      <div class=\"bar-left\">
        <div class=\"menu\">
          <a href=\"\">Publicité</a>
          <a href=\"\">Entreprise</a>
          <a href=\"\">à propos</a>
        </div>
      </div>
      </div>
   
    <button class=\"open-button\" onclick=\"openForm()\">Consultez vos notes</button>
    <div class=\"chat-popup\" id=\"myForm\">
    <form action=\"\" method=\"post\" class=\"form-container\">
         <h1>Cahier de notes</h1>
        {% for note in notes %}

        <tr>
            <textarea>{{ note.contenu }}</textarea> 
        </tr>

        {% endfor %}
        <tr>
            <textarea name=\"contenu\" placeholder=\"Ecrire note..\" name=\"msg\" required></textarea> 
        </tr>
    
        <tr>
            <td><button type=\"submit\" class=\"btn\">Ajouter</button></td>
            <td><button type=\"button\" class=\"btn cancel\" onclick=\"closeForm()\">Fermer</button></td>
        </tr>
    </form>

    </div>
    
    <script>
        function openForm() {

            document.getElementById(\"myForm\").style.display = \"block\";
        }

        function closeForm() {

            document.getElementById(\"myForm\").style.display = \"none\";
        }

        </script>

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\mooc-symfony4\\templates\\base.html.twig");
    }
}
