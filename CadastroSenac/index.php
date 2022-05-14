<?php 
include('header.php')
?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"></script>
  <div class="container">
    <br/>



<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">


  <div class="col">
    <div class="e-tabs mb-3 px-3">
      <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Users</a></li>
      </ul>
    </div>

    <div class="row flex-lg-nowrap">
      <div class="col mb-3">
        <div class="e-panel card">
          <div class="card-body">
            <div class="card-title">
              <h6 class="mr-2"><span>Users</span><small class="px-1">Be a wise leader</small></h6>
            </div>
            <div class="e-table">
              <div class="table-responsive table-lg mt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="align-top">
                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                          <input type="checkbox" class="custom-control-input" id="all-items">
                          <label class="custom-control-label" for="all-items"></label>
                        </div>
                      </th>
                      <th>Photo</th>
                      <th class="max-width">Nome</th>
                      <th class="sortable">cpf</th>
                      <th>Nascimento</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle">
                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                          <input type="checkbox" class="custom-control-input" id="item-1">
                          <label class="custom-control-label" for="item-1"></label>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;"><i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i></div>
                      </td>
                      <td class="text-nowrap align-middle">Kevin Rodrigues</td>
                      <td class="text-nowrap align-middle"><span>000.000.000.00</span></td>
                      <td class="text-center align-middle">00/00/0000</td>
                      <td class="text-center align-middle">
                        <div class="btn-group align-top">
                            <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Editar</button>
                            <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                          <input type="checkbox" class="custom-control-input" id="item-1">
                          <label class="custom-control-label" for="item-1"></label>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;"><i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i></div>
                      </td>
                      <td class="text-nowrap align-middle">Kevin Rodrigues</td>
                      <td class="text-nowrap align-middle"><span>000.000.000.00</span></td>
                      <td class="text-center align-middle">00/00/0000</td>
                      <td class="text-center align-middle">
                        <div class="btn-group align-top">
                            <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Editar</button>
                            <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                          <input type="checkbox" class="custom-control-input" id="item-1">
                          <label class="custom-control-label" for="item-1"></label>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;"><i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i></div>
                      </td>
                      <td class="text-nowrap align-middle">Kevin Rodrigues</td>
                      <td class="text-nowrap align-middle"><span>000.000.000.00</span></td>
                      <td class="text-center align-middle">00/00/0000</td>
                      <td class="text-center align-middle">
                        <div class="btn-group align-top">
                            <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Editar</button>
                            <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                        </div>
                      </td>
                   
                    
                  </tbody>
                </table>
              </div>
              <div class="d-flex justify-content-center">
                <ul class="pagination mt-3 mb-0">
                  <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                  <li class="active page-item"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">4</a></li>
                  <li class="page-item"><a href="#" class="page-link">5</a></li>
                  <li class="page-item"><a href="#" class="page-link">›</a></li>
                  <li class="page-item"><a href="#" class="page-link">»</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
     
        
         
        </div>
      </div>
    </div>

    <!-- User Form Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create User</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-1">
              <form class="form" novalidate="">
                
              <div class="form-group">
      <input type="file"  id="exampleFormControlFile1">
    </div>
  </div>
  </div>
<!-- CPF , NOME -->
    <div class="form-group">
      <label for="formGroupExampleInput">CPF:</label>
      <input type="number" name="cpf" name="" class="form-control" id="formGroupExampleInput" placeholder="CPF">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Nome:</label>
      <input type="text" name="nome" class="form-control" id="formGroupExampleInput2" placeholder="Nome completo">
    </div>

    <!-- E-MAIL, TELEFONE , DATA DE NASCIMENTO -->

    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">E-mail</label>
      <input type="text" name="email" class="form-control" id="validationCustom01" placeholder="Nome" value="" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Telefone</label>
      <input type="text" name="telefone" class="form-control" id="validationCustom02" placeholder="Telefone" value="Telefone" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Data de nascimento</label>
      <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
        <input type="date" name="dataNacimento" class="form-control" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Por favor, escolha um nome de usuário.
        </div>
      </div>
    </div>
  </div>
  

    
    <!--  ENDEREÇO , BAIRRO-->
    
  <div class="row">
    <div class="col">
    <label for="formGroupExampleInput">Endreço</label>
      <input type="text" name="endreco" class="form-control" placeholder="Nome">
    </div>
    <div class="col">
    <label for="formGroupExampleInput">Bairro</label>
      <input type="text" name="bairro" class="form-control" placeholder="Sobrenome">
    </div>
  </div>


<!-- ESCOLARIDADE , INSTITUIÇÃO -->
<br>
<div class="row">
      <div class="col">
      <label for="exampleFormControlSelect1">Nível de escolaridade</label>
      <select class="form-control" name="nivelEscolaridade" id="exampleFormControlSelect1"> <!-- DUVIDA AONDE COLOCAR O NAME="" -->
    
          <option>ensino fundametal inconpleto</option>
          <option>ensino fundametal completo</option>
          <option>ensino médio incompleto</option>
          <option>ensino médio completo</option>
          <option>ensino superior incompleto</option>
          <option>ensino superior completo</option>
      </select>
    </div>
      <div class="col">
        <label for="exampleFormControlSelect1">Estuda em outra instituição atualmente</label>
        <select class="form-control" name="instituicao" id="exampleFormControlSelect1">
            <option>Técnico</option>
            <option>Universidade</option>
            <option>Faculdade</option>
            <option>Centro Universitário</option>
            <option>Centro de Educação Tecnológica</option>
            <option>Institutos Federais</option>
        </select>
      </div>
</div>


<!--  -->
<br>
<div class="form-group">
    <label for="exampleFormControlInput1">Caso afirmativo, qual instituição</label>
    <input type="text" name="nameInstituicao" class="form-control" id="exampleFormControlInput1" placeholder="informe a Instituição">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Qual o Curso?</label>
    <input type="text" name="curso" class="form-control" id="exampleFormControlInput1" placeholder="informe a Instituição">
  </div>



<!--  -->
<br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Por qual motivo você escolheu se matricular em um curso do Senac RJ?
</label>
    <textarea class="form-control" name="textarea1" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">O que te levou a escolher este curso?</label>
    <textarea class="form-control" name="textarea2" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Você tem experiência na área profissional do curso?</label>
    <textarea class="form-control" name="textarea3" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Qual são suas expectativas após a conclusão do curso?Exemplo de textarea</label>
    <textarea class="form-control" name="textarea4" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    


  <button type="submit" width="150px" class="btn btn-primary">Salvar Cadastro</button>
  <button type="resert" class="btn btn-primary">Limpar tela</button>
                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php 
    include("footer.php")
    ?>