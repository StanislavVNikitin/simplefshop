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

/* footer.tmpl */
class __TwigTemplate_4312c8c3e2613346cf75632409aa0d5de3449b495400fbd76c6de8e8c490112a extends Template
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
        echo "\t
\t<div id=\"footer\">
\t\tМой Сайт
\t</div>
\t<script src=\"js/jquery-3.5.1.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap/bootstrap.min.js\"></script>
\t<script src=\"js/AjaxBusket.js\"></script>
\t<script type=\"text/javascript\">
\t\tsetTimeout(function(){\$('.box').fadeOut('fast')},3000);  //30000 = 30 секунд
\t</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "footer.tmpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.tmpl", "C:\\OpenServer\\domains\\seshop.local\\templates\\footer.tmpl");
    }
}
