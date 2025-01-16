
<?php headerAdmin($data); ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> <?= $data['page_title']?></h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Principal</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Se mostrará  la interfaz para configurar elementos de la pagina web de los productores </div>
          </div>
        </div>
      </div>
    </main>
  
<?php footerAdmin($data); ?>