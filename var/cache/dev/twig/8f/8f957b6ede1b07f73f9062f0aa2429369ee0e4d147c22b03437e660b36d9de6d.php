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

/* css/google.css */
class __TwigTemplate_6acbaa65adbe3be0f1fbc81df26b57580075aeb88150486283030c23ad9cf5e0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/google.css"));

        // line 1
        echo "* {
    margin: 0;
  }
  
  html, body {
    height: 100%;
  }
  
  body {
    font-family: 'Roboto', sans-serif;
    display: flex;
    flex-direction: column;
  }
  
  .top-bar {
    display: flex;
    align-items: center;
    padding: 20px 30px;
  }
  
  .content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  
  .bar-left {
    display: flex;
    align-items: center;
  }
  
  .bar-right {
    margin-left: auto;
    display: flex;
    align-items: center;
  }
  
  .menu {
    display: flex;
  }
  
  .menu a {
    color: #2d2d2d;
    text-decoration: none;
    margin-right: 15px;
  }
  
  .menu a:hover {
    text-decoration: underline;
  }
  
  .app-toggle {
    margin-right: 15px;
    text-decoration: none;
    color: #2d2d2d;
    font-size: 25px;
  }
  
  .profile-trigger img {
    width: 40px;
    border-radius: 100%;
  }
  
  .search-wrapper {
    width: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .search-logo img {
    width: 400px;
  }
  
  .search-bar {
    margin: 30px 0;
    position: relative;
    width: 100%;
  }
  
  .search-bar input {
    height: 50px;
    width: 100%;
    border: 1px solid #d0d0d0;
    border-radius: 100px;
    padding: 0 50px;
    outline: 0;
    box-shadow: 0 0 0 0 rgba(136, 136, 136, 0);
    font-size: 18px;
    transition: box-shadow .3s;
  }
  
  .search-bar input:focus {
    box-shadow: 0 0 10px -4px #888888;
  }
  
  .search-bar .search-icon {
    position: absolute;
    width: 50px;
    height: 50px;
    align-items: center;
    justify-content: center;
    top: 0;
    display: flex;
    font-size: 20px;
    color: #888888;
  }
  
  .search-bar .search-icon.right {
    right: 0;
  }
  
  .search-info {
    font-size: 15px;
  }
  
  .search-info a {
    color: #3f50b5;
    text-decoration: none;
  }
  
  .search-info a:hover {
    text-decoration: underline;
  }
  
  .search-buttons {
    display: flex;
    margin-bottom: 30px;
  }
  
  .search-buttons a {
    text-decoration: none;
    margin-right: 15px;
    background-color: #ececec;
    color: black;
    padding: 10px 15px;
    border-radius: 3px;
    border: 1px solid rgba(0, 0, 0, 0);
  }
  
  .search-buttons a:last-child {
    margin-right: 0;
  }
  
  .search-buttons a:hover {
    border: 1px solid #8c8c8c;
  }
  
  .bottom-bar {
    display: flex;
    align-items: center;
    padding: 20px 30px;
    background-color: #ececec;
    border-top: 1px solid #d4d4d4;
  }";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/google.css";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("* {
    margin: 0;
  }
  
  html, body {
    height: 100%;
  }
  
  body {
    font-family: 'Roboto', sans-serif;
    display: flex;
    flex-direction: column;
  }
  
  .top-bar {
    display: flex;
    align-items: center;
    padding: 20px 30px;
  }
  
  .content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  
  .bar-left {
    display: flex;
    align-items: center;
  }
  
  .bar-right {
    margin-left: auto;
    display: flex;
    align-items: center;
  }
  
  .menu {
    display: flex;
  }
  
  .menu a {
    color: #2d2d2d;
    text-decoration: none;
    margin-right: 15px;
  }
  
  .menu a:hover {
    text-decoration: underline;
  }
  
  .app-toggle {
    margin-right: 15px;
    text-decoration: none;
    color: #2d2d2d;
    font-size: 25px;
  }
  
  .profile-trigger img {
    width: 40px;
    border-radius: 100%;
  }
  
  .search-wrapper {
    width: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .search-logo img {
    width: 400px;
  }
  
  .search-bar {
    margin: 30px 0;
    position: relative;
    width: 100%;
  }
  
  .search-bar input {
    height: 50px;
    width: 100%;
    border: 1px solid #d0d0d0;
    border-radius: 100px;
    padding: 0 50px;
    outline: 0;
    box-shadow: 0 0 0 0 rgba(136, 136, 136, 0);
    font-size: 18px;
    transition: box-shadow .3s;
  }
  
  .search-bar input:focus {
    box-shadow: 0 0 10px -4px #888888;
  }
  
  .search-bar .search-icon {
    position: absolute;
    width: 50px;
    height: 50px;
    align-items: center;
    justify-content: center;
    top: 0;
    display: flex;
    font-size: 20px;
    color: #888888;
  }
  
  .search-bar .search-icon.right {
    right: 0;
  }
  
  .search-info {
    font-size: 15px;
  }
  
  .search-info a {
    color: #3f50b5;
    text-decoration: none;
  }
  
  .search-info a:hover {
    text-decoration: underline;
  }
  
  .search-buttons {
    display: flex;
    margin-bottom: 30px;
  }
  
  .search-buttons a {
    text-decoration: none;
    margin-right: 15px;
    background-color: #ececec;
    color: black;
    padding: 10px 15px;
    border-radius: 3px;
    border: 1px solid rgba(0, 0, 0, 0);
  }
  
  .search-buttons a:last-child {
    margin-right: 0;
  }
  
  .search-buttons a:hover {
    border: 1px solid #8c8c8c;
  }
  
  .bottom-bar {
    display: flex;
    align-items: center;
    padding: 20px 30px;
    background-color: #ececec;
    border-top: 1px solid #d4d4d4;
  }", "css/google.css", "C:\\xampp\\htdocs\\mooc-symfony4\\templates\\css\\google.css");
    }
}
