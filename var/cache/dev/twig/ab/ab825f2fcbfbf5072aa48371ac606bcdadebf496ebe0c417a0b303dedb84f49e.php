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
class __TwigTemplate_226e2cd1952f5e0fefa976da98640bf9eda322021e78f5b03da84c6368c71c11 extends Template
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
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"./css/google.css\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
         <div class=\"top-bar\">
      <div class=\"bar-left\">
        <div class=\"menu\">
          <a href=\"\">About</a>
          <a href=\"\">Store</a>
        </div>
      </div>
      <div class=\"bar-right\">
        <div class=\"menu\">
          <a href=\"\">Gmail</a>
          <a href=\"\">Images</a>
        </div>
        <a href=\"\" class=\"app-toggle\">
          <i class=\"fa fa-ellipsis-h\"></i>
        </a>
        <a href=\"\" class=\"profile-trigger\">
          <img src=\"images/profile.jpg\">
        </a>
      </div>
    </div>
    <div class=\"content\">
      <div class=\"search-wrapper\">
        <a href=\"\" class=\"search-logo\">
          <img src=\"images/bendy-logo-dark-blue.png\">
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
          <a href=\"\">Bendy Search</a>
          <a href=\"\">I'm Feeling Lucky</a>
        </div>
        <p class=\"search-info\">
          This is a search bar. <a href=\"\">Random Link</a>
        </p>
      </div>
    </div>
    <div class=\"bottom-bar\">
      <div class=\"bar-left\">
        <div class=\"menu\">
          <a href=\"\">Advertising</a>
          <a href=\"\">Business</a>
          <a href=\"\">How Search Works</a>
        </div>
      </div>
      <div class=\"bar-right\">
        <div class=\"menu\">
          <a href=\"\">Privacy</a>
          <a href=\"\">Terms</a>
          <a href=\"\">Settings</a>
        </div>
      </div>
    </div>
        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
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

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
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

    public function getDebugInfo()
    {
        return array (  173 => 72,  161 => 71,  149 => 9,  136 => 5,  127 => 73,  124 => 72,  122 => 71,  59 => 10,  57 => 9,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Google HomePage{% endblock %}</title>
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"./css/google.css\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
         <div class=\"top-bar\">
      <div class=\"bar-left\">
        <div class=\"menu\">
          <a href=\"\">About</a>
          <a href=\"\">Store</a>
        </div>
      </div>
      <div class=\"bar-right\">
        <div class=\"menu\">
          <a href=\"\">Gmail</a>
          <a href=\"\">Images</a>
        </div>
        <a href=\"\" class=\"app-toggle\">
          <i class=\"fa fa-ellipsis-h\"></i>
        </a>
        <a href=\"\" class=\"profile-trigger\">
          <img src=\"images/profile.jpg\">
        </a>
      </div>
    </div>
    <div class=\"content\">
      <div class=\"search-wrapper\">
        <a href=\"\" class=\"search-logo\">
          <img src=\"images/bendy-logo-dark-blue.png\">
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
          <a href=\"\">Bendy Search</a>
          <a href=\"\">I'm Feeling Lucky</a>
        </div>
        <p class=\"search-info\">
          This is a search bar. <a href=\"\">Random Link</a>
        </p>
      </div>
    </div>
    <div class=\"bottom-bar\">
      <div class=\"bar-left\">
        <div class=\"menu\">
          <a href=\"\">Advertising</a>
          <a href=\"\">Business</a>
          <a href=\"\">How Search Works</a>
        </div>
      </div>
      <div class=\"bar-right\">
        <div class=\"menu\">
          <a href=\"\">Privacy</a>
          <a href=\"\">Terms</a>
          <a href=\"\">Settings</a>
        </div>
      </div>
    </div>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\mooc-symfony4\\templates\\base.html.twig");
    }
}
