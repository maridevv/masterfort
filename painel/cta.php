<?php include "verifica.php";
$puxaCta = $cta->rsDados();
$cta->excluir();
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adriano Monteiro">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
    <title>Painel Hoogli - Cta</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?php include "header.php"; ?>
        <?php include "inc-menu-lateral.php"; ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Cta</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                            <th>Título</th>
                                            <th>Breve</th>
                                            <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(count($puxaCta) > 0){
                                            foreach($puxaCta as $cta){?>
                                            <tr>
                                            <td><?php echo $cta->section_1_conteudo_1; ?></td>
                                            <td><?php echo  $cta->section_1_link_conteudo_2; ?></td>
                                              <td>
                                            <a href="editar-cta.php?id=<?php echo $cta->id; ?>" class="btn btn-success btn-circle">
                                             <i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:;" class="btn btn-warning btn-circle" onclick="excluir('cta.php', <?php echo $cta->id; ?>, 'excluirCta')">
                                            <i class="fa fa-times"></i></a>
                                             <button class="btn btn-info btn-circle copy-btn"
                                                    data-section-id="sectionToCopy_<?php echo $cta->id; ?>">
                                                    <i class="fas fa-copy"></i>
                                                  </button>
                                            </td>
                                            </td>
                                            <div class="d-none" id="sectionToCopy_<?php echo $cta->id; ?>">{<?php echo $cta->id; ?>}</div>
                                            <?php } }?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Título</th>
                                            <th>Breve</th>
                                             <th>Opções</th>
                                            <tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php include "footer.php"; ?>
        </div>
    </div>
        <script>
        $(document).ready(function () {
          $('.copy-btn').on('click', function () {
            var sectionId = $(this).data('section-id');
            var $tempInput = $('<textarea>');
            $("body").append($tempInput);
            $tempInput.val($('#' + sectionId).html()).select();
            document.execCommand("copy");
            $tempInput.remove();
            alert('Conteúdo copiado com sucesso!');
          });
        });
      </script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script src="dist/js/scripts.js"></script>
</body>
</html>
