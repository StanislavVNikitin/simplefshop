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

/* content/index.html */
class __TwigTemplate_50c430fe24b452ce52c89570bb6a3b47dd0254bf9887a609d6b9ed6d1dbb7624 extends Template
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
        echo "
\t<div id=\"content\">
    <div class=\"row\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 5
            echo "      <div class=\"col-4\">
        <h2>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "name", [], "any", false, false, false, 6));
            echo "</h2>
        <img src=\"img/";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "image", [], "any", false, false, false, 7));
            echo "\" idth=\"150\" height=\"150\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "name", [], "any", false, false, false, 7));
            echo "\">
        <p>Стоимость ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "price", [], "any", false, false, false, 8));
            echo " рублей</p>
        <form method=\"post\" action=\"index.php?c=good&act=view\">
          <div class=\"form-group\"> 
            <button class=\"btn btn-primary\" type=\"submit\">Перейти в Каталог</button>
          </div>
        </form>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "content/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  59 => 8,  53 => 7,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/index.html", "C:\\OpenServer\\domains\\seshop.local\\templates\\content\\index.html");
    }
}
