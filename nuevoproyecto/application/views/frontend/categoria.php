    
  <div class="container">
    <section class="row">
  			<?php
          foreach ($canes as $value) {
            if(strlen($value->DESCRIPCION)>100)
            {
              $edited = substr($value->DESCRIPCION, 0,199).'...';
            }
            else
            {
              $edited = $value->DESCRIPCION;
            }
            echo '<div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="'.base_url().'assets/img/11062129_10207473965745083_5477093409299300670_n.jpg" alt="...">
                          <div class="caption">
                            <h3>'.$value->NOMBRE.'</h3>
                              <p>'.$edited.'</p>
                                <p><a href="#" class="btn btn-primary" role="button">...Ver mas</a></p>
                          </div>
                    </div>
                  </div><div class="clearfix visible-sm-block"></div>';
          }
        ?>
    </section>
  </div>