<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h3 class="title">Tour personalizables a Peru</h3>
    </div>
  </div>
    <!-- filtro segun Tipo de Actividad -->
    <?php
    $terminos = get_terms('tipo-actividad', array(
      'hide_empty' => false,
    ));
    ?>
    <div id="filtrarActividades">
      <ul class="nav nav_filter">
        <?php foreach($terminos as $term):
          echo '<li class=""> <a href="#' . $term->slug . '">' . $term->name . '</a></li>';
          endforeach ?>
        </ul>
        <div id="filtrarTours">
          <?php
          foreach ($terminos as $termino) {
            filtrar_Tours_home($termino->slug);
          }
          ?>
        </div>

    </div>

</div>
