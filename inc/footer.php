<footer class="bg-dark text-white mt-4 p-3">
  <div class="container">
    <div class="row">
      <section class="col-12 col-md-6 pr-5">
        <h4>Inscreva-se</h4>
        <p>Acompanhe todas as novidades, textos, notícias e dicas que postamos</p>
            <form action="" method="post">
            <div class="form-group">
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" aria-describedby="passwordHelp">
            </div>
            <button class="btn btn-primary rounded float-right" type="buttom">Buscar</button>
          </form>
      </section>
      <section class="col-12 col-md-3 text-center">
        <h4>Menu</h4>
        <div class="list-group-item bg-dark border-0 p-0">
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Roteiros</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Cidades</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Depoimentos</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">História</a>
        </div>
      </section>
      <section class="col-12 col-md-3 text-center">
        <h4>Social</h4>
        <div class="btn-group-vertical btn-block btn-group-sm" role="group">
          <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook-square"></i>Facebook</a>
          <a href="#" class="btn btn-outline-info"><i class="fab fa-twitter-square"></i>Twitter</a>
          <a href="#" class="btn btn-outline-warning"><i class="fab fa-instagram"></i>Instagram</a>
        </div>
      </section>
      <section class="col-12 mt-5">
        <blockquote class="blockquote text-center">
          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto enim asperiores mollitia odit fugi</p>
          <p class="blockquote-footer">Lorem Ipsum <cite title="Source Title">Fundador do Mundo</cite></p>

        </blockquote>
      </section>
    </div>
  </div>
</footer>



<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div id="carouselModal" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">

        <!-- LOGIN -->
        <div class="carousel-item active" id="carrosselLoginItem">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLoginLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="email">email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu email">
                  <small id="emailHelp" class="form-text text-muted">Não se preocupe, não vendemos mailing lists.</small>
                </div>
                <div class="form-group">
                  <label for="senha">Password</label>
                  <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" aria-describedby="passwordHelp">
                  <small id="passwordHelp" class="form-text text-muted">Insira uma maiúscula, uma minúscula e um número pelo menos.</small>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="aceite">
                  <label class="form-check-label" for="aceite">Estou de acordo com os termos, pode vender meus dados!</label>
                </div>
                <div class="form-group col-auto clearfix px-0">
                  <button type="submit" class="btn btn-info float-right ml-2">Logar</button>
                  <button type="reset" class="btn btn-secondary float-right">Limpar</button>
                </div>
              </form> 
            </div>
            <div class="modal-footer">
                <small class="d-block w-100 text-muted">Ops! Ainda não tenho conta, quero <a href="#carouselModal" class="text-info" role="button" data-slide="next">me cadastrar</a>.</small>
              </a>
            </div>
          </div>
        </div>

        <!-- CADASTRO -->
        <div class="carousel-item" id="carroselCadastroItem">
        
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCadastroLabel">Cadastro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="" method="post" id="formCadastro">
                                 
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" placeholder="Insira seu nome" aria-describedby="nomeCadastroHelp" id="inputNome" name="inputNome">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputSobrenome">Sobrenome</label>
                    <input type="text" class="form-control" placeholder="Insira seu sobrenome" aria-describedby="sobrenomeCadastroHelp" id="inputSobrenome" name="inputSobrenome">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEndereco">Endereço</label>
                  <input type="text" class="form-control" placeholder="Insira seu endereço" aria-describedby="enderecoHelp" id="inputEndereco" name="inputEndereco">
                </div>
                
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputCep">CEP</label>
                    <input type="text" class="form-control" placeholder="01234-567" name="inputCep">
                  </div>
                  <div class="form-group col-md-7">
                    <label for="inputCidade">Cidade</label>
                    <input type="text" class="form-control" placeholder="São Paulo" name="inputCidade">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputUF">UF</label>
                    <select class="form-control" name="inputUF" id="inputUF">
                      <option disabled="" selected="">UF</option>
                      <option value="AC">AC</option>
                      <option value="AL">AL</option>
                      <option value="AM">AM</option>
                      <option value="AP">AP</option>
                      <option value="BA">BA</option>
                      <option value="CE">CE</option>
                      <option value="DF">DF</option>
                      <option value="ES">ES</option>
                      <option value="GO">GO</option>
                      <option value="MA">MA</option>
                      <option value="MG">MG</option>
                      <option value="MS">MS</option>
                      <option value="MT">MT</option>
                      <option value="PA">PA</option>
                      <option value="PB">PB</option>
                      <option value="PE">PE</option>
                      <option value="PI">PI</option>
                      <option value="PR">PR</option>
                      <option value="RJ">RJ</option>
                      <option value="RN">RN</option>
                      <option value="RO">RO</option>
                      <option value="RR">RR</option>
                      <option value="RS">RS</option>
                      <option value="SC">SC</option>
                      <option value="SE">SE</option>
                      <option value="SP">SP</option>
                      <option value="TO">TO</option>
                    </select>
                  </div>
                </div>
                  
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputConfirma">Senha</label>
                    <input type="password" name="inputSenha" class="form-control" placeholder="Senha" aria-describedby="senhaHelp" id="inputSenha">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputSobrenome">Confirma Senha</label>
                    <input type="password" class="form-control" placeholder="Confirma senha" aria-describedby="ConfirmaHelp" id="inputConfirma" name="inputConfirma">
                  </div>
                </div>

                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="aceiteCadastro" checked>
                  <label class="form-check-label" for="aceiteCadastro">Estou de acordo com os termos, pode vender meus dados!</label>
                </div>

                <div class="form-group col-auto clearfix px-0">
                  <button type="submit" class="btn btn-info float-right ml-2">Logar</button>
                  <button type="reset" class="btn btn-secondary float-right">Limpar</button>
                </div>

              </form> 
            </div>
            <div class="modal-footer">
              <small class="d-block w-100 text-muted">Ops! Já tenho conta, quero <a href="#carouselModal" class="text-info" role="button" data-slide="prev">me logar</a>.</small></a>
            </div>
          </div>
        </div>





      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>