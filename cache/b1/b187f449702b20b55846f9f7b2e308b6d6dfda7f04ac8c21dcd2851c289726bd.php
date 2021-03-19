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

/* content/good.html */
class __TwigTemplate_9595d88a225b9e7abd0a68b94f24b1bd7a0b35f18cbcd65971ca88665e15399b extends Template
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
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 6
            echo "          <div class=\"col-4\">
            <h2>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "name", [], "any", false, false, false, 7));
            echo "</h2>
            <img src=\"img/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "image", [], "any", false, false, false, 8));
            echo "\" width=\"150\" height=\"150\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "name", [], "any", false, false, false, 8));
            echo "\">
            <p>Стоимость ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "price", [], "any", false, false, false, 9));
            echo " рублей</p>
            <div class=\"btn btn-primary\" onclick=\"AddToBusket(";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 10));
            echo ");\" class='ItemBuy'>\t\t\t\t\t
              <p>Добавить в корзину</p>
            </div>\t\t
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "content/good.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  64 => 10,  60 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/good.html", "C:\\OpenServer\\domains\\seshop.local\\templates\\content\\good.html");
    }
}
