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

/* main.tmpl */
class __TwigTemplate_a112e5e532b53632a3a868cbbb23db60e177987aad9e232441eb01777274fd66 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Интернет магазин";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
\t<meta content=\"text/html; charset=Windows-1251\" http-equiv=\"content-type\">\t
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/style.css\" /> 
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/bootstrap/bootstrap.min.css\">\t
</head>
<body>
\t<div id=\"header\">
\t\t<h1>Интернет магазин";
        // line 11
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t</div>

  <nav class=\"navbar nav-pills navbar-expand navbar-light bg-light\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"index.php\">Главная <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"index.php?c=good&act=view\">Каталог Товаров</a>
        </li>
        <li class=\"nav-item\">
          <a id='busket' class=\"nav-link\" href=\"index.php?c=basket&act=view\"> Корзина ";
        // line 24
        echo twig_escape_filter($this->env, ($context["colvo"] ?? null), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 26
        if (((0 !== twig_compare(($context["userid"] ?? null), 0)) || (0 !== twig_compare(($context["userid"] ?? null), null)))) {
            // line 27
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.php?c=user&act=info\"\">Личный кабинет</a>
          </li>
        ";
        }
        // line 31
        echo "        ";
        if ((0 !== twig_compare(($context["useradmin"] ?? null), 0))) {
            // line 32
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.php?c=admin&act=admin\"\">Админка</a>
          </li>
        ";
        }
        // line 36
        echo "      </ul>
      ";
        // line 37
        if (((0 === twig_compare(($context["userid"] ?? null), 0)) || (0 === twig_compare(($context["userid"] ?? null), null)))) {
            // line 38
            echo "        <form class=\"form-inline\" method=\"post\" action=\"index.php?c=user&act=login\">
          <input class=\"form-control\" type=\"text\" placeholder=\"Логин\" name=\"login\">
          <input class=\"form-control\" type=\"password\" placeholder=\"Пароль\" name=\"password\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Войти</button>
        </form>
        <a href=\"index.php?c=user&act=reg\" class=\"btn btn-outline-success\" role=\"button\" aria-pressed=\"true\">Зарегистироваться</a>
 
      ";
        } else {
            // line 46
            echo "          <form class=\"form-inline\" method='post' action='index.php?c=user&act=logout'>
          <label  for=\"exampleInputEmail1\" class=\"form-control\">Здравствуйте ";
            // line 47
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo " </label>
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Выйти</button>
      ";
        }
        // line 50
        echo "        </form>
    </div>
  </nav>

";
        // line 54
        echo ($context["content"] ?? null);
        echo "

";
        // line 56
        $this->loadTemplate("footer.tmpl", "main.tmpl", 56)->display($context);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "main.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  120 => 54,  114 => 50,  108 => 47,  105 => 46,  95 => 38,  93 => 37,  90 => 36,  84 => 32,  81 => 31,  75 => 27,  73 => 26,  68 => 24,  52 => 11,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.tmpl", "C:\\OpenServer\\domains\\seshop.local\\templates\\main.tmpl");
    }
}
