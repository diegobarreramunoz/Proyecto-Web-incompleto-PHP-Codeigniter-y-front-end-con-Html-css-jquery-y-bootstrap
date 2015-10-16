

    <?php
      foreach ($noticias as $value) {
      echo
      '<div class="container">
            <section class="row">
            <div class="container">
            <div class="row row-border">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="text-center">'.$value->TITULO.'
                        </h2>
                        <hr>
                        <table width="100%" border="0" class="table-responsive">
                          <tbody>
                            <tr>
                              <td class="text-left table-news"><h4 class="text-info">'.$value->FECHA_PUBLICACION.'</h4></td>
                              <td class="text-right">
                                tags -> ';
                                    $tagis = explode(',', $value->KEYWORDS);
                                    foreach ($tagis as $value2) {
                                      echo '<a href="#" class="label label-info" role="button">'.$value2.'</a> ';
                                    }
                                echo '
                               </td>
                            </tr>
                          </tbody>
                        </table>

                        <img class="img-responsive img-border img-left" src="'.base_url().'assets/img/10606145_10204620800977747_6262174579600025446_n.jpg" alt="">
                        <hr class="visible-xs">
                        <p>'.$value->NOTICIA.'</p>
                      <p class="text-center down"><a href="#" class="btn btn-primary" role="button">...Ver mas</a></p>
                    </div>
                </div>
            </div>
            </div>
            </section>
        </div>';
      }
    ?>
