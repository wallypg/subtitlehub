<?php 
if (file_exists('json/data.json'))
  $dataArray = json_decode(file_get_contents('json/data.json'), true);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SubEnhancer</title>
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fileinput.min.css">
  <link rel="stylesheet" href="css/jquery-confirm.css">
  <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/fileinput.min.js"></script>
  <script src="js/jquery-confirm.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/dropzone.js"></script> -->
  <script src="js/script.js"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,400i,700|Catamaran:300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i|Rokkitt:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form action="enhance.php" method="POST" enctype="multipart/form-data" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" id="enhance">
    <div class="container-fluid">
        <img src="images/adictito.png" alt="" class="adictito">
        <div class="row centered-form">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title text-center"><span>SubEnhancer</span> <small>by SubAdictos.Net</small></h3>
            </div>
            <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="sub_url">URL del subtítulo&nbsp;&nbsp;<i class="fa fa-info-circle sub-url" aria-hidden="true"></i></label>
                      <input disabled type="text" name="sub_url" id="sub_url" class="form-control input-sm" placeholder="Ej: https://www.tusubtitulo.com/updated/5/20739/0">
                    </div>
                  </div>
                  <label class="loose-text hidden-xs">o</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="sub_url">Archivo del subtítulo</label>
                      <form action="" class="dropzone">
                      <input id="input-sub-file" name="uploaded_file" type="file" class="file" data-show-preview="false" data-show-remove="true" data-show-upload="false">
                      </form>
                    </div>
                  </div>
                </div>

                <hr class="divider">

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label for="info_url">URL de la página del subtítulo (opcional)&nbsp;&nbsp;<i class="fa fa-info-circle info-url" aria-hidden="true"></i></label>
                      <input type="text" name="info_url" id="info_url" class="form-control input-sm" placeholder="Ej: https://www.tusubtitulo.com/serie/community/3/4/367/">
                    </div>
                  </div>
                  <!--  -->                  

                  <div class="col-xs-6 col-sm-8 col-md-8">
                    <div class="form-group">
                      <label for="tv_show">Serie</label>
                      <div class="input-group">
                        <input type="text" name="tv_show" id="tv_show" class="form-control input-sm">
                        <div class="input-group-btn">
                          <button type="button" class="btn dropdown-toggle more-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                          <ul class="dropdown-menu dropdown-menu-right" data-list="tv_show">
                            <?php foreach($dataArray['tv_show'] as $show) { ?>
                              <li class="dropdown-item"><?=$show?></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--  -->
                  <div class="col-xs-3 col-sm-2 col-md-2">
                    <div class="form-group small-size-input">
                      <label class="align-center" for="season">Temporada</label>
                      <input type="number" name="season" id="season" class="form-control input-sm" min="1">
                    </div>
                  </div>
                  <div class="col-xs-3 col-sm-2 col-md-2">
                    <div class="form-group small-size-input">
                      <label for="episode_number">Episodio</label>
                      <input type="number" name="episode_number" id="episode_number" class="form-control input-sm" min="1">
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label for="episode_title">Nombre del episodio</label>
                      <input type="text" name="episode_title" id="episode_title" class="form-control input-sm">
                    </div>
                  </div>
                </div>

                <hr class="divider">

                <div class="row">
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="other">Otro</label>
                        <div class="input-group">  
                          <input type="text" name="other" id="other" class="form-control input-sm">
                          <div class="input-group-btn">
                            <button type="button" class="btn dropdown-toggle more-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right" data-list="other">
                              <?php foreach($dataArray['other'] as $other) { ?>
                                <li class="dropdown-item"><?=$other?></li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="quality">Calidad</label>
                        <div class="input-group">  
                          <input type="text" name="quality" id="quality" class="form-control input-sm">
                          <div class="input-group-btn">
                            <button type="button" class="btn dropdown-toggle more-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right" data-list="quality">
                              <?php foreach($dataArray['quality'] as $quality) { ?>
                                <li class="dropdown-item"><?=$quality?></li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                      <label for="format">Formato</label>
                      <div class="input-group">
                        <input type="text" name="format" id="format" class="form-control input-sm">
                        <div class="input-group-btn">
                          <button type="button" class="btn dropdown-toggle more-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                          <ul class="dropdown-menu dropdown-menu-right" data-list="format">
                            <?php foreach($dataArray['format'] as $format) { ?>
                              <li class="dropdown-item"><?=$format?></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                      <label for="codec">Codec</label>
                        <div class="input-group"> 
                          <input type="text" name="codec" id="codec" class="form-control input-sm">
                          <div class="input-group-btn">
                            <button type="button" class="btn dropdown-toggle more-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right" data-list="codec">
                              <?php foreach($dataArray['codec'] as $codec) { ?>
                                <li class="dropdown-item"><?=$codec?></li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="rip_group">Grupo</label>
                        <div class="input-group">
                          <input type="text" name="rip_group" id="rip_group" class="form-control input-sm">
                          <div class="input-group-btn">
                            <button type="button" class="btn dropdown-toggle more-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right" data-list="rip_group">
                              <?php foreach($dataArray['rip_group'] as $group) { ?>
                                <li class="dropdown-item"><?=$group?></li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                  
                  <!--  -->
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="editor">Correctores</label>
                        <div class="input-group">  
                          <input type="text" name="editor" id="editor" class="form-control input-sm">
                          <div class="input-group-btn">
                            <button type="button" class="btn dropdown-toggle more-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right" data-list="editor">
                              <?php foreach($dataArray['editor'] as $editor) { ?>
                                <li class="dropdown-item"><?=$editor?></li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label for="translation">Traducción original</label>
                      <div class="input-group">
                        <input type="text" name="translation" id="translation" class="form-control input-sm">
                        <div class="input-group-btn">
                          <button type="button" class="btn dropdown-toggle more-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                          <ul class="dropdown-menu dropdown-menu-right" data-list="translation">
                            <?php foreach($dataArray['translation'] as $translation) { ?>
                              <li class="dropdown-item"><?=$translation?></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="divider">

                <div class="row">
                  <div class="col-xs-4 edit-fields">
                    <i class="fa fa-pencil fa-2" aria-hidden="true"></i>&nbsp;&nbsp;<a href="editor.php">Editar&nbsp;datos&nbsp;<span class="hidden-xs">guardados</span></a>
                  </div>
                  <div class="col-xs-4">
                    <div class="form-group align-center">
                      <input type="submit" value="OPTIMIZAR" class="btn btn-info optimize-button">
                    </div>
                  </div>
                  <div class="col-xs-4 version">
                    v161231.1
                  </div>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <div id="loading-info-overlay">
    <div>
      <div class="loading-animation">
        <div class="meter animate">
          <span style="width: 100%"><span></span></span>
        </div>
      </div>
    </div>
  </div>

</body>
</html>