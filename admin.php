<?php

session_start();
session_regenerate_id();
if(!isset($_SESSION['token']))      // if there is no valid session
{
    header("Location: login");
}

?>

<!DOCTYPE html>

<html lang="en" class="light-style">

<head>
  <title>Admin - Smart Fit</title>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

  <!-- Icon fonts -->
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css">
  <link rel="stylesheet" href="assets/vendor/fonts/ionicons.css">
  <link rel="stylesheet" href="assets/vendor/fonts/linearicons.css">
  <link rel="stylesheet" href="assets/vendor/fonts/open-iconic.css">
  <link rel="stylesheet" href="assets/vendor/fonts/pe-icon-7-stroke.css">
  <link rel="stylesheet" href="assets/vendor/fonts/gotham.css">

  <!-- Core stylesheets -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/bootstrap.css" class="theme-settings-bootstrap-css">
  <link rel="stylesheet" href="assets/vendor/css/rtl/appwork.css" class="theme-settings-appwork-css">
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-corporate.css" class="theme-settings-theme-css">
  <link rel="stylesheet" href="assets/vendor/css/rtl/colors.css" class="theme-settings-colors-css">
  <link rel="stylesheet" href="assets/vendor/css/rtl/uikit.css">
  <link rel="stylesheet" href="assets/css/demo.css">
  <link rel="stylesheet" href="assets/css/style.min.css">

  <!-- Load polyfills -->
  <script src="assets/vendor/js/polyfills.js"></script>
  <script>document['documentMode']===10&&document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')</script>

  <script src="assets/vendor/js/material-ripple.js"></script>
  <script src="assets/vendor/js/layout-helpers.js"></script>
  

  <!-- Core scripts -->
  <script src="assets/vendor/js/pace.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Libs -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="assets/vendor/libs/quill/typography.css">
  <link rel="stylesheet" href="assets/vendor/libs/quill/editor.css">
  <link rel="stylesheet" href="assets/vendor/libs/sweetalert2/sweetalert2.css">
</head>

<body class="light">
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-2">
    <div class="layout-inner">

      <!-- Layout container -->
      <div class="layout-container">
        <!-- Layout navbar -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

          <!-- Brand demo (see assets/css/demo/demo.css) -->
          <a href="./" class="navbar-brand app-brand demo py-0 mr-4">
            <img class='brand-img' src='./assets/img/logo-just.svg'>
          </a>          

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse" id="layout-navbar-collapse">
            <!-- Divider -->
            <hr class="d-lg-none w-100 my-2">
        

            <div class="navbar-nav align-items-lg-center ml-auto">       

              <!-- Divider -->
              <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>

              <div class="demo-navbar-user nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                  <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">                    
                    <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Opções</span>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">                  
                  <a href="auth.php" class="dropdown-item"><i class="ion ion-ios-log-out text-danger"></i> &nbsp; Log Out</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">

          <!-- Content -->
          <div class="container flex-grow-1 container-p-y">

            <h4 class="font-weight-bold py-3 mb-4">
              Editar <span class="text-muted">FAQ</span>
            </h4>

            <div class="card">              
              <div class="card-body pb-2">
               

                <div class="form-group media" style="min-height:1px">
                  <div class="ui-bg-cover" style="width: 100px;height: 100px;background-image: url('assets/img/excel.png');"></div>
                  <div class="media-body ml-3">
                    <label class="form-label">
                      Arquivo Base:
                    </label>
                    <a href="assets/excel/base_faq.xlsx" target="_blank" class="d-block">base_faq.xlsx</a>
                    <label class="custom-file mt-3">
                      <input id="fileUploader" type="file" class="custom-file-input">
                      <span class="custom-file-label"></span>
                    </label>
                  </div>
                </div>

              </div>
              <hr class="m-0">
              <div class="card-body pb-2">
                <div class="row mt-4 ">
                  <div class="col-lg-4 col-xl-3">
    
                    <div class="sticky-top pt-3">
    
                      <div class="categories-menu">
                        <a href="javascript:void(0)" class="media align-items-center bg-lighter text-body py-3 px-4">
                          <div class="ion ion-md-help-circle-outline ui-w-30 text-center text-xlarge"></div>
                          <div class="media-body ml-3">
                            Common
                            <div class="text-muted small">Donec sagittis urna eu leo</div>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="media align-items-center bg-lighter text-body py-3 px-4">
                          <div class="ion ion-ios-help-buoy ui-w-30 text-center text-xlarge"></div>
                          <div class="media-body ml-3">
                            Knowledge Base
                            <div class="text-muted small">Donec sagittis urna eu leo</div>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="media align-items-center bg-lighter text-body py-3 px-4">
                          <div class="ion ion-md-card ui-w-30 text-center text-xlarge"></div>
                          <div class="media-body ml-3">
                            Purchase
                            <div class="text-muted small">Donec sagittis urna eu leo</div>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="media align-items-center bg-lighter text-body py-3 px-4">
                          <div class="ion ion-ios-business ui-w-30 text-center text-xlarge"></div>
                          <div class="media-body ml-3">
                            Partnership
                            <div class="text-muted small">Donec sagittis urna eu leo</div>
                          </div>
                        </a>
                      </div>
    
    
                    </div>
    
                  </div>
                  <div class="col content-faq wow fadeInRight" data-wow-duration="1s">
    
                    <div class="media align-items-center my-4">
    
                      <div class="media-body ml-1">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis
                          lacus, fringilla eget dolor quis, lobortis ornare felis. Morbi semper ullamcorper efficitur.
                          Cras
                          mollis odio in dui pulvinar, ut bibendum justo ullamcorper.</p>
                      </div>
                    </div>
    
                    <div class="bg-soft ui-bordered mb-2 ">
                      <a href="#company-faq-1" class="d-flex justify-content-between text-body py-3 px-4"
                        data-toggle="collapse">
                        Ne ornatus albucius ius?
                        <span class="collapse-icon"></span>
                      </a>
                      <div id="company-faq-1" class="collapse text-muted">
                        <div class="px-4 pb-3">Lorem ipsum dolor sit amet, mea in pertinax hendrerit gloriatur.</div>
                      </div>
                    </div>
                    <div class="bg-soft ui-bordered mb-2">
                      <a href="zdd" class="d-flex justify-content-between text-body py-3 px-4"
                        data-toggle="collapse">
                        Quo insolens intellegam dissentiet at?
                        <span class="collapse-icon"></span>
                      </a>
                      <div id="company-faq-2" class="collapse text-muted">
                        <div class="px-4 pb-3">Ex fugit legimus fuisset per. Ex quidam option diceret ius.</div>
                      </div>
                    </div>
                    <div class="bg-soft ui-bordered mb-2">
                      <a href="#company-faq-3" class="d-flex justify-content-between text-body py-3 px-4"
                        data-toggle="collapse">
                        Ad his assum delenit blandit?
                        <span class="collapse-icon"></span>
                      </a>
                      <div id="company-faq-3" class="collapse text-muted">
                        <div class="px-4 pb-3">Ne ornatus albucius ius, nostrum dignissim repudiandae an usu.</div>
                      </div>
                    </div>
  
    
                    <hr class="my-5">
    
                    <h4 class="media align-items-center mb-4">
                      <div class="ion ion-ios-help-buoy ui-w-60 text-center text-large"></div>
                      <div class="media-body ml-1">
                        Knowledge Base
                        <div class="text-muted text-tiny font-weight-light">Donec sagittis urna eu leo</div>
                      </div>
                    </h4>
    
                    <div class="bg-soft ui-bordered mb-2">
                      <a href="#company-faq-21" class="d-flex justify-content-between text-body py-3 px-4"
                        data-toggle="collapse">
                        Ne ornatus albucius ius?
                        <span class="collapse-icon"></span>
                      </a>
                      <div id="company-faq-21" class="collapse text-muted">
                        <div class="px-4 pb-3">Lorem ipsum dolor sit amet, mea in pertinax hendrerit gloriatur.</div>
                      </div>
                    </div>
                    <div class="bg-soft ui-bordered mb-2">
                      <a href="#company-faq-22" class="d-flex justify-content-between text-body py-3 px-4"
                        data-toggle="collapse">
                        Quo insolens intellegam dissentiet at?
                        <span class="collapse-icon"></span>
                      </a>
                      <div id="company-faq-22" class="collapse text-muted">
                        <div class="px-4 pb-3">Ex fugit legimus fuisset per. Ex quidam option diceret ius.</div>
                      </div>
                    </div>
                    <div class="bg-soft ui-bordered mb-2">
                      <a href="#company-faq-23" class="d-flex justify-content-between text-body py-3 px-4"
                        data-toggle="collapse">
                        Ad his assum delenit blandit?
                        <span class="collapse-icon"></span>
                      </a>
                      <div id="company-faq-23" class="collapse text-muted">
                        <div class="px-4 pb-3">Ne ornatus albucius ius, nostrum dignissim repudiandae an usu.</div>
                      </div>
                    </div>              
                     
    
                  </div>
                </div>
              </div>

            </div>

            <div class="text-right mt-4">
              <button id="saveChanges" type="button" class="btn btn-cta">Salvar alterações</button>&nbsp;
              <button type="button" class="btn btn-default">Cancelar</button>
            </div>

          </div>
          <!-- / Content -->          

        </div>
        <!-- Layout content -->

      </div>
      <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core scripts -->
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/js/sidenav.js"></script>

  <!-- Libs -->
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
  <script src="assets/js/xlsx.full.min.js"></script>
  <script src="assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

  <script>
  // Quill does not support IE 10 and below so don't load it to prevent console errors
  if (typeof document.documentMode !== 'number' || document.documentMode > 10) {
    document.write('\x3Cscript src="assets/vendor/libs/quill/quill.js">\x3C/script>');
  }
</script>

  <!-- Demo -->
  <script src="assets/js/demo.js"></script>
  <script src="assets/js/pages_articles_edit.js"></script>

  <!-- Uploader -->
  <script>
    $(document).ready(function(){

      var XL_row_object = null;

      $("#fileUploader").change(function(evt){
        var selectedFile = evt.target.files[0];
        var reader = new FileReader();
        reader.onload = function(event) {
          var data = event.target.result;
          var workbook = XLSX.read(data, {
              type: 'binary'
          });
          workbook.SheetNames.forEach(function(sheetName) {
            
              XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
              var json_object = JSON.stringify(XL_row_object);
              ///document.getElementById("jsonObject").innerHTML = json_object;
              console.log(XL_row_object);
              console.log(json_object);

              populateFaq( XL_row_object );

              //saveJson(XL_row_object);
              
            })
        };

        reader.onerror = function(event) {
          console.error("File could not be read! Code " + event.target.error.code);
        };

        reader.readAsBinaryString(selectedFile);
      });

      $( "#saveChanges" ).click(function() {
          if(XL_row_object){
            saveJson(XL_row_object);
          } else {
            Swal.fire({
              title: 'Erro atualizar dados', 
              text: 'Verifique a planilha enviada e tente novmente',
              icon: 'error',
              showCancelButton: false,
              customClass: {
                confirmButton: 'btn btn-danger btn-lg'                    
              }
            });
          }
        });


    });

    function saveJson (dataSend) {
      $.ajax({
        type: "POST",
        url: "./assets/save_faq.php",
        //url: "https://assets.wigoo.com.br/smartfit/assets/save_faq.php",
        dataType: 'json',
        contentType: 'application/json',
        data: JSON.stringify(dataSend),
        cache: !1,
        beforeSend: function() {
          // $("#alert-loading").modal("show");
        },
        success: function(response) {
          // $("#alert-loading").modal("hide");
          console.log("success");
          console.log(response);

          Swal.fire({
            title: 'Dados gravados com sucesso', 
            text: 'Sua FAQ foi atualizada com sucesso',
            icon: 'success',
            showCancelButton: false,
            customClass: {
              confirmButton: 'btn btn-success btn-lg'                    
            }
          });
                              
        },
        error: function(resp){
          console.log("error");
          console.log(resp);  

          if(resp.responseText == "ok"){
            Swal.fire({
              title: 'Dados gravados com sucesso', 
              text: 'Sua FAQ foi atualizada com sucesso',
              icon: 'success',
              showCancelButton: false,
              customClass: {
                confirmButton: 'btn btn-success btn-lg'                    
              }
            });

          } else {

            Swal.fire({
              title: 'Erro atualizar dados', 
              text: 'Verifique a planilha enviada e tente novmente',
              icon: 'error',
              showCancelButton: false,
              customClass: {
                confirmButton: 'btn btn-danger btn-lg'                    
              }
            });
          }

        }
      });
           
    }
      
  </script>


<!-- Faq Populate -->
<script> 

  function getDataFaq(){
    $.ajax({
      type: "GET",		    
      //url: "https://assets.wigoo.com.br/smartfit/assets/json/faq.json",
      url: "./assets/json/faq.json",
      // data: a,
      cache: !1,
      beforeSend: function() {		      
        console.log("loading");
      },
      success: function(data) {          
        console.log("success");
        
        // console.log( JSON.parse(data) );	
        // populateFaq( JSON.parse(data) );	
        
        console.log( data );	
        populateFaq( data );	
        
      },
      error: function(error){
        console.log("error");
        console.log(error);
      }
    })
  }

  function populateFaq(data){
    
    
    var result = data.reduce(function (r, a) {
        r[a.Setor] = r[a.Setor] || [];
        r[a.Setor].push(a);
        return r;
    }, Object.create(null));

    console.log(result);

    $(".categories-menu").html('');
    $(".content-faq").html('');
    Object.keys(result).map(function(item) {        
      if(item != "Setor"){
        $(".categories-menu").append(`
            <a href="#${item}-faq" class="media align-items-center bg-lighter text-body py-3 px-4">
              <div class="ion ion-md-help-circle-outline ui-w-30 text-center text-xlarge"></div>
              <div class="media-body ml-3">
                ${item}                  
              </div>
            </a>
        `);

        $(".content-faq").append(`
          <div id="${item}-faq" class="media align-items-center my-4">
            <div class="media-body ml-1">
              <h4>${item}</h4>
            </div>
          </div>
        `);

        result[item].map(function(subitem) {

          $(".content-faq").append(`
            <div class="bg-soft ui-bordered mb-2 ">
              <a href="#question-${subitem.ID}" class="d-flex justify-content-between text-body py-3 px-4"
                data-toggle="collapse">
                ${subitem.Pergunta}
                <span class="collapse-icon"></span>
              </a>
              <div id="question-${subitem.ID}" class="collapse text-muted">
                <div class="px-4 pb-3">
                  ${subitem.Resposta}
                </div>
              </div>
            </div>
          `);

        });

        $(".content-faq").append(`
          <hr class="my-5">
       `);
      }        
    });    

  }


</script>


</body>

</html>