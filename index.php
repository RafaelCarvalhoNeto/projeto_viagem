<!-- TRAZ O HEAD -->
<?php require_once("./inc/head.php"); ?>
<!-- TRAZ O HEADER -->
<?php require_once("./inc/header.php"); ?>

<section class="container-fluid borda">
    <div class="row bg-dark text-white">

        <!-- Carrossel Bootstrap -->
        <div class="col-lg-7 p-0">
            <div id="carrosselBootstrap" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carrosselBootstrap" data-slide-to="0" class="active"></li>
                    <li data-target="#carrosselBootstrap" data-slide-to="1"></li>
                    <li data-target="#carrosselBootstrap" data-slide-to="2"></li>
                    <li data-target="#carrosselBootstrap" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="reducao">
                            <img class="d-block w-100" src="./assets/img/placeholder-02-08.jpg" alt="First slide"> 
                        </div>
                        <div class="carousel-caption d-none d-sm-block">
                            <h5>Pirâmides</h5>
                            <p>This is a wider card with supporting text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reducao">
                            <img class="d-block w-100" src="./assets/img/placeholder-02-09.jpg" alt="Second slide"> 
                        </div>
                        <div class="carousel-caption d-none d-sm-block">
                            <h5>Pôr-do-Sol</h5>
                            <p>This is a wider card with supporting text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reducao">
                            <img class="d-block w-100" src="./assets/img/placeholder-02-10.jpg" alt="Third slide"> 
                        </div>
                        <div class="carousel-caption d-none d-sm-block">
                            <h5>Cairo Tower</h5>
                            <p>This is a wider card with supporting text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reducao">
                            <img class="d-block w-100" src="./assets/img/placeholder-02-11.jpg" alt="Fourth slide"> 
                        </div>
                        <div class="carousel-caption d-none d-sm-block">
                            <h5>Esfinge</h5>
                            <p>This is a wider card with supporting text</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carrosselBootstrap" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carrosselBootstrap" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>

        <!--TEXTO LATERAL-->
        <div class="col-lg-5 p-4 d-flex textcarro">
            <div>
                <h1 class="display-4">Explore o inacreditável Egito</h1>
                <p class="lead pb-4">Terras dos faraós, de belezas naturais de cair o queixo.</p>
            </div>
            <div>
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Lugares" aria-label="Lugares">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="buttom">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>    
            
        </div>
    </div>
</section>

<main class="container">

    <!--ROTEIROS-->
    <section class="row">
            
        <h2 class="col-12 text-center p-3 mt-5 mb-3 text-uppercase bg-dark text-white">Roteiros</h2>
        <div id="carrosselRoteiros" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <ol class="carousel-indicators carrosel-de-vendas">
                    <li data-target="#carrosselRoteiros" data-slide-to="0" class="active"></li>
                    <li data-target="#carrosselRoteiros" data-slide-to="1" ></li>
                </ol>
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="./assets/img/placeholder-02-12.jpg">
                                <div class="card-body bg-success text-white">
                                    <h4 class="card-title">Produto X1</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-success text-white">
                                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">#comida</span></a>
                                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">#passeio</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="./assets/img/placeholder-02-13.jpg">
                                <div class="card-body bg-success text-white">
                                    <h4 class="card-title">Produto X2</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-success text-white">
                                    <span class="badge badge-pill badge-info">PROMO</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="./assets/img/placeholder-02-14.jpg" alt="Card image cap">
                                <div class="card-body bg-success text-white">
                                    <h4 class="card-title">Produto Y1</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-success text-white">
                                    <span class="badge badge-pill badge-info">PROMO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="./assets/img/placeholder-02-12.jpg">
                                <div class="card-body bg-success text-white">
                                    <h4 class="card-title">Produto X4</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-success text-white">
                                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">#comida</span></a>
                                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">#passeio</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="./assets/img/placeholder-02-13.jpg">
                                <div class="card-body bg-success text-white">
                                    <h4 class="card-title">Produto X5</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-success text-white">
                                    <span class="badge badge-pill badge-info">PROMO</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="./assets/img/placeholder-02-14.jpg" alt="Card image cap">
                                <div class="card-body bg-success text-white">
                                    <h4 class="card-title">Produto Y7</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-success text-white">
                                    <span class="badge badge-pill badge-info">PROMO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!--CIDADES-->
    <section id="catY" class="row">
        <h2 class="col-12 text-center p-3 mt-5 mb-3 text-uppercase bg-dark text-white" >Cidades</h2>

        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="./assets/img/placeholder-02-15.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto Y1</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./assets/img/placeholder-02-13.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto Y2</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./assets/img/placeholder-02-15.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto Y3</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </section>

    <!--DEPOIMENTOS-->
    <section class="row">
        <h2 class="col-12 text-center p-3 mt-5 mb-3 text-uppercase bg-dark text-white">Depoimentos</h2>
        <div class="row">
            <div class="col-md-6 col-sm-12 avancar">
                <div class="row bg-warning text-dark m-0 mb-3" style="align-items:center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <img class="p-2 d-block w-100" src="./assets/img/placeholder-02-13.jpg" alt="">
                    </div>
                    <div class="p-3 col-lg-6 col-md-12">
                        <h4>Título</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 avancar">
                <div class="row bg-warning text-dark m-0 mb-3" style="align-items:center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <img class="p-2 d-block w-100" src="./assets/img/placeholder-02-13.jpg" alt="">
                    </div>
                    <div class="p-3 col-lg-6 col-md-12">
                        <h4>Título</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12 avancar">
                <div class="row bg-warning text-dark m-0  mb-3" style="align-items:center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <img class="p-2 d-block w-100" src="./assets/img/placeholder-02-13.jpg" alt="">
                    </div>
                    <div class="p-3 col-lg-6 col-md-12">
                        <h4>Título</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 avancar">
                <div class="row bg-warning text-dark m-0  mb-3" style="align-items:center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <img class="p-2 d-block w-100" src="./assets/img/placeholder-02-13.jpg" alt="">
                    </div>
                    <div class="p-3 col-lg-6 col-md-12">
                        <h4>Título</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
                
    </section>
    
     
    </section>

    <!--HISTÓRIA-->
    <section class="row">
        <h2 class="col-12 text-center p-3 mt-5 mb-3 text-uppercase bg-dark text-white">História</h2>

        <div id="carrosselHistoria" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <ol class="carousel-indicators">
                    <li data-target="#carrosselHistoria" data-slide-to="0" class="active"></li>
                    <li data-target="#carrosselHistoria" data-slide-to="1"></li>
                </ol>
                <div class="carousel-item active">
                    <div class="col-12 p-0">
                        <div class="d-lg-flex bg-info text-white d-sm-block">
                            <div>
                                <img class="d-block w-100" src="./assets/img/placeholder-02-13.jpg" alt="" >
                            </div>
                            <div class="p-3 d-flex" style="flex-direction:column; justify-content: space-around">
                                <h4>Título</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit itaque necessitatibus repudiandae accusamus quam, quae rerum vero, unde suscipit, pariatur est numquam dolor esse iste odit? Vitae esse est repellendus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias id quia itaque unde, in aliquid nostrum corrupti vitae distinctio, soluta iste inventore neque. Voluptas beatae placeat aperiam exercitationem delectus consectetur?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-12 p-0">
                        <div class="d-lg-flex bg-light text-dark d-sm-block">
                            <div>
                                <img class="d-block w-100" src="./assets/img/placeholder-02-13.jpg" alt="" >
                            </div>
                            <div class="p-3 d-flex" style="flex-direction:column; justify-content: space-around">
                                <h4>Título</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit itaque necessitatibus repudiandae accusamus quam, quae rerum vero, unde suscipit, pariatur est numquam dolor esse iste odit? Vitae esse est repellendus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias id quia itaque unde, in aliquid nostrum corrupti vitae distinctio, soluta iste inventore neque. Voluptas beatae placeat aperiam exercitationem delectus consectetur?</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-12 mt-5 mb-3">
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ex repellat temporibus ea hic eveniet sit cum architecto alias atque, accusamus, exercitationem ipsa sunt magnam eum consectetur ratione? Sed, labore.
            </div>
            
        </div>

    </section>


    <section class="row">
            
        <h2 class="col-12 text-center p-3 mt-5 mb-3 text-uppercase bg-dark text-white">Roteiros</h2>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top" src="./assets/img/placeholder-02-12.jpg">
                    <div class="card-body bg-success text-white">
                        <h4 class="card-title">Produto X1</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer bg-success text-white">
                        <a href="#" class="card-link"><span class="badge badge-pill badge-info">#comida</span></a>
                        <a href="#" class="card-link"><span class="badge badge-pill badge-info">#passeio</span></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top" src="./assets/img/placeholder-02-13.jpg">
                    <div class="card-body bg-success text-white">
                        <h4 class="card-title">Produto X2</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer bg-success text-white">
                        <span class="badge badge-pill badge-info">PROMO</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top" src="./assets/img/placeholder-02-14.jpg" alt="Card image cap">
                    <div class="card-body bg-success text-white">
                        <h4 class="card-title">Produto Y1</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer bg-success text-white">
                        <span class="badge badge-pill badge-info">PROMO</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
<!-- TRAZ O FOOTER -->
<?php require_once("./inc/footer.php"); ?>