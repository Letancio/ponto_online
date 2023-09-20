<?php include('src/Resource/theme/app.php'); ?>
<!-- partial -->
<div class="collapse" id="registrodeponto">
    <div class="card card-body">
        <div class="app-wrapper">

            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl">

                    <h1 class="app-page-title">Registro de Ponto</h1>

                    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                        <div class="inner">
                            <div class="container text-center">
                                <div class="row align-items-start">
                                    <div class="col-sm-4">
                                        <img src="public/images/imgs/home2.png" class="img-fluid" height="350px" width="230px">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="app-card-body p-3 p-lg-4">
                                            <h3 class="mb-3">Bem vindo Colaborador(a)!</h3>
                                            <div class="row gx-5 gy-3">
                                                <div class="col-12 col-lg-9">
                                                <center><div id="relogio"></div></center>
                                                </div>
                                                <form class="card shadow">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">TOKEN</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">INFORME SUA CHAVE DE VALIDAÇÃO</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PERIODO</label>
    <select class="form-control" id="exampleInputPassword1">
        <option value="0">::SELECIONE::</option>
        <option value="1">Inicio da Jornada</option>
        <option value="2">Pausa para Almoço</option>
        <option value="3">Retorno do Almoço</option>
        <option value="4">Final da Jornada</option>
        <option value="5">Evento Ordinario</option>
    </select>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

                                            </div><!--//col-->
                                            <div class="col">
                                                <br>
                                                <button class="btn app-btn-primary" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                                        <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z" />
                                                    </svg>REGISTRAR</button>
                                            </div><!--//col-->
                                            </form>
                                        </div><!--//row-->
                                    </div><!--//app-card-body-->
                                </div>
                            </div>





                        </div><!--//inner-->
                    </div><!--//app-card-->

                    <div class="container text-center">
                        <div class="row align-items-start">
                            <div class="col-sm-4">
                            </div>
                            <div class="col">
                                One of three columns
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('src/Resource/theme/footer.php'); ?>
