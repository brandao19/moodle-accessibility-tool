<!-- Fixed navbar -->
<nav id="nav-Bar" class="navbar navbar-default navbar-fixed-top">
    <div class="container">

      <?php if ($PAGE->theme->settings->logo) { ?>

          <a href="<?php echo $CFG->wwwroot; ?>">
              <div id="logo"> 
              </div>
          </a>

      <?php } else { ?>

         

      <?php } ?>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">


                <li class="decreaseFont">
                    <a href="#diminuir_fonte" id="diminuir_fonte" title="Diminuir fonte">
                        <i class="fa fa-3x fa-minus-square"></i>
                    </a>
                </li>

                <li class="normalFont">
                    <a href="#tamanho_original" id="tamanho_original" title="Fonte normal">
                        <i class="fa fa-3x fa-refresh"></i>
                    </a>
                </li>

                <li class="increaseFont">
                    <a href="#aumentar_fonte" id="aumentar_fonte" title="Aumentar fonte">
                        <i class="fa fa-3x fa-plus-square"></i>
                    </a>
                </li>

                <li class="AltoContraste">
                    <a href="#contraste" id="contraste" title="Alto contraste">
                        <i class="fa fa-3x fa-adjust"></i>
                    </a>
                </li>

            </ul>


            <div class="pull-right">
              
              <form class="navbar-form navbar-left" role="search">
                <div id="custom-search-input" class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Buscar" />

                </div>
                <button class="btn btn-primary" type="button">
                    <span class="fa fa-2x   fa-search"></span>
                  </button>
              </form>
            
            </div>

            
        </div><!--/.nav-collapse -->

    </div>
</nav>
