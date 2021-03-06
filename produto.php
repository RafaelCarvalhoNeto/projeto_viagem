<!-- TRAZ O HEAD -->
<?php require_once("./inc/head.php"); ?>
<!-- TRAZ O HEADER -->
<?php require_once("./inc/header.php"); ?>

<section class="jumbotron jumbotron-fluid borda">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Produto</h1>
                <p class="lead">Encontre os melhores produtos aqui!</p>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-md-5">
            <div>
                <img class="d-block w-100 .produto" src="./assets/img/cerva3.png" alt="">
            </div>
        </div>
        <div class="col-md-7 my-3">
            <h2>Produto</h2>
            <small>Indentificação do Produto</small>
            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati in odit ratione recusandae excepturi voluptates blanditiis ex, iusto veniam voluptas asperiores, assumenda eos. Voluptate omnis deleniti repellendus velit necessitatibus qui!
            </p>
            <form action="#" method="POST" id="formComprar">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputTamanho">Tamanho</label>
                        <select class="form-control" name="inputTamanho" id="inputTamanho">
                            <option disabled="" selected="">--</option>
                            <option value="PP">PP</option>
                            <option value="P">P</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                            <option value="GG">GG</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" class="form-control" id="quantidade" step="1" min="1" value="1" required>
                    </div>
                </div>
                <div class="form-group col-md-12 p-0">
                    <button type="submit" class="mx-auto my-2 btn btn-warning btn-lg btn-block">Comprar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- ACCORDION -->
    <div class="row">
        <div class="col-12 my-5">
            <div class="accordion" id="accordionTabsProduto">

                <div>
                    
                    <buttom class="btn btn-outline-secondary btn-lg btn-block my-2" type="buttom" data-toggle="collapse" data-target="#titulo1" aria-expanded="false" aria-controls="titulo1">
                    Título 1 <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                    </buttom>

                    <div id="titulo1" class="collapse" aria-labelledby="aba01" data-parent="#accordionTabsProduto">
                        <div class="card-body">
                            <table class="table text-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Tamanho</th>
                                        <th scope="col"><span class="d-none d-md-block">Largura</span></th>
                                        <th scope="col"><span class="d-none d-md-block">Profundidade</span></th>
                                        <th scope="col"><span class="d-none d-md-block">Comprimento</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">PP</th>
                                        <td>30 cm</td>
                                        <td>30 cm</td>
                                        <td>30 cm</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">P</th>
                                        <td>35 cm</td>
                                        <td>35 cm</td>
                                        <td>35 cm</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">M</th>
                                        <td>40 cm</td>
                                        <td>40 cm</td>
                                        <td>40 cm</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">G</th>
                                        <td>45 cm</td>
                                        <td>45 cm</td>
                                        <td>45 cm</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">GG</th>
                                        <td>50 cm</td>
                                        <td>50 cm</td>
                                        <td>50 cm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div>
                    <buttom class="btn btn-outline-secondary btn-lg btn-block my-2" type="buttom" data-toggle="collapse" data-target="#titulo2" aria-expanded="false" aria-controls="titulo2">
                    Título 2 <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                    </buttom>

                    <div id="titulo2" class="collapse" aria-labelledby="aba02" data-parent="#accordionTabsProduto">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, nobis delectus! Sequi, ipsum exercitationem neque blanditiis provident officia. Officia distinctio totam hic repellat! Delectus, reiciendis? Quae nobis optio provident minus?
                        </div>
                    </div>
                </div>

                <div>
                    <buttom class="btn btn-outline-secondary btn-lg btn-block my-2" type="buttom" data-toggle="collapse" data-target="#titulo3" aria-expanded="false" aria-controls="titulo3">
                    Título 3 <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                    </buttom>

                    <div id="titulo3" class="collapse" aria-labelledby="aba03" data-parent="#accordionTabsProduto">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, nobis delectus! Sequi, ipsum exercitationem neque blanditiis provident officia. Officia distinctio totam hic repellat! Delectus, reiciendis? Quae nobis optio provident minus?
                        </div>
                    </div>
                </div>

                <!-- TESTE CARD 
                <div class="card">
                    <div class="card-header" id="aba03">
                        <h5 class="mb-0">
                            <button class="btn text-info bg-transparent col-12 collapsed" type="buttom" data-toggle="collapse" data-target="#titulo3" aria-expanded="false" aria-controls="titulo3">
                            Título 3 <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="titulo3" class="collapse" aria-labelledby="aba03" data-parent="#accordionTabsProduto">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, nobis delectus! Sequi, ipsum exercitationem neque blanditiis provident officia. Officia distinctio totam hic repellat! Delectus, reiciendis? Quae nobis optio provident minus?
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>

</section>

<!-- TRAZ O FOOTER -->
<?php require_once("./inc/footer.php"); ?>