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

/* filter/_filters.js */
class __TwigTemplate_e9ca46c01510182564025f894c027f7f82c926d3e88ee4b0e8454691117bd931 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filter/_filters.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filter/_filters.js"));

        // line 1
        echo "let myTable = document.getElementById(\"lstindex\");
let listtr = myTable.querySelectorAll(\"tbody>tr\");

//order
/************/
//https://www.pierre-giraud.com/trier-tableau-javascript/

const tbody = document.querySelector('tbody');
const thx = document.querySelectorAll('th');
const trxb = tbody.querySelectorAll('tr');
const compare = function (ids, asc) {
    return function (row1, row2) {
        const tdValue = function (row, ids) {
            return row.children[ids].textContent;
        }
        const tri = function (v1, v2) {
            if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)) {
                return v1 - v2;
            } else {
                return v1.toString().localeCompare(v2);
            }
            return v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
        };
        return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
    }
}


thx.forEach(function (th) {
    th.addEventListener('click', function () {
        let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
        classe.forEach(function (tr) {
            tbody.appendChild(tr)
        });
    })
});



/*VERSION FACTORISEE*/
/*
        const compare = (ids, asc) => (row1, row2) => {
            const tdValue = (row, ids) => row.children[ids].textContent;
            const tri = (v1, v2) => v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
            return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
        };

        const tbody = document.querySelector('tbody');
        const thx = document.querySelectorAll('th');
        const trxb = tbody.querySelectorAll('tr');
        thx.forEach(th => th.addEventListener('click', () => {
            let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
            classe.forEach(tr => tbody.appendChild(tr));
        }));

*/

//filters
//1. filter: user 
let selectUser = document.getElementById(\"lstusers\");
selectUser.addEventListener(\"change\", function () {
    listtr.forEach(tr => {
        tr.style.display = \"table-row\";
        if (tr.className.includes(selectUser.value))
            tr.style.display = \"table-row\";


    });
});

//2. filter : status 
//v0
let listInput = document.getElementById('lststatus');
let listOption = listInput.querySelectorAll('option');
listInput.addEventListener(\"change\", filterByKeyword);

function filterByKeyword(e) {
    listtr.forEach(tr => tr.style.display = \"none\");

    listOption.forEach(elt => {
        if (elt.selected) {
            listtr.forEach(tr => {
                if (tr.className.includes(elt.value))
                    tr.style.display = \"table-row\";
            });
        }
    });
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "filter/_filters.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("let myTable = document.getElementById(\"lstindex\");
let listtr = myTable.querySelectorAll(\"tbody>tr\");

//order
/************/
//https://www.pierre-giraud.com/trier-tableau-javascript/

const tbody = document.querySelector('tbody');
const thx = document.querySelectorAll('th');
const trxb = tbody.querySelectorAll('tr');
const compare = function (ids, asc) {
    return function (row1, row2) {
        const tdValue = function (row, ids) {
            return row.children[ids].textContent;
        }
        const tri = function (v1, v2) {
            if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)) {
                return v1 - v2;
            } else {
                return v1.toString().localeCompare(v2);
            }
            return v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
        };
        return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
    }
}


thx.forEach(function (th) {
    th.addEventListener('click', function () {
        let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
        classe.forEach(function (tr) {
            tbody.appendChild(tr)
        });
    })
});



/*VERSION FACTORISEE*/
/*
        const compare = (ids, asc) => (row1, row2) => {
            const tdValue = (row, ids) => row.children[ids].textContent;
            const tri = (v1, v2) => v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
            return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
        };

        const tbody = document.querySelector('tbody');
        const thx = document.querySelectorAll('th');
        const trxb = tbody.querySelectorAll('tr');
        thx.forEach(th => th.addEventListener('click', () => {
            let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
            classe.forEach(tr => tbody.appendChild(tr));
        }));

*/

//filters
//1. filter: user 
let selectUser = document.getElementById(\"lstusers\");
selectUser.addEventListener(\"change\", function () {
    listtr.forEach(tr => {
        tr.style.display = \"table-row\";
        if (tr.className.includes(selectUser.value))
            tr.style.display = \"table-row\";


    });
});

//2. filter : status 
//v0
let listInput = document.getElementById('lststatus');
let listOption = listInput.querySelectorAll('option');
listInput.addEventListener(\"change\", filterByKeyword);

function filterByKeyword(e) {
    listtr.forEach(tr => tr.style.display = \"none\");

    listOption.forEach(elt => {
        if (elt.selected) {
            listtr.forEach(tr => {
                if (tr.className.includes(elt.value))
                    tr.style.display = \"table-row\";
            });
        }
    });
}", "filter/_filters.js", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/filter/_filters.js");
    }
}
