<?php

include "base.php";
include "corpo.php";

?>

<title>Bem Vindo ao meu portifólio!</title>

<section class="sectionCentral">

    <div class="topo">
        
        <div class="forma" id="forma01"></div>
        <div class="forma" id="forma02"></div>
        <div class="forma" id="forma03"></div>

        <h3 class="topoTitulo">Jaum_OS 2.5</h3>
        <h3 class="copyright">João Vitor Lima©</h3>
    
    </div>

    <?php
    corpo();
    ?>

    <form class="container cores"><br>
            
            <label for="pag01" class="circulo">
              <input type="radio" class="circulo pag01" id="pag01" name="pagina" value="1" onclick="chamaCorpo()" checked />
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" />
              </svg>
            </label>
            
            <label for="pag02" class="circulo">
              <input type="radio" class="circulo pag02" id="pag02" name="pagina" value="2" onclick="chamaCorpo()" />
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" />
              </svg>
            </label>

            <label for="pag03" class="circulo">
              <input type="radio" class="circulo pag03" id="pag03" name="pagina" value="3" onclick="chamaCorpo()" />
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" />
              </svg>
            </label>
            
            <label for="pag04" class="circulo">
              <input type="radio" class="circulo pag04" id="pag04" name="pagina" value="4" onclick="chamaCorpo()" />
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" />
              </svg>
            </label>
            
            <label for="pag05" class="circulo">
              <input type="radio" class="circulo pag05" id="pag05" name="pagina" value="5" onclick="chamaCorpo()" />
              <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" />
              </svg>
          </label>
            
    </form>

</section>