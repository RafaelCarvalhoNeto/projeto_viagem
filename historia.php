<!-- TRAZ O HEAD -->
<?php require_once("./inc/head.php"); ?>
<!-- TRAZ O HEADER -->
<?php require_once("./inc/header.php"); ?>

<section class="container borda">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="display-4">Lorem ipsum dolor sit amet</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, harum minima impedit asperiores</p>
        </div>
    </div>
    
    <div class="row mb-5">

        <div class="col-3">
            <nav id="navbarVertical" class="navbar navbar-light bg-light">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#Item1">Eu sou o 1</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ml-3" href="#Item1-1">Eu sou o 1.1</a>
                            <a class="nav-link ml-3" href="#Item1-2">Eu sou o 1.2</a>
                        </nav>   
                    <a class="nav-link mt-2" href="#Item2">Eu sou o 2</a>
                    <a class="nav-link mt-2" href="#Item3">Eu sou o 3</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ml-3" href="#Item3-1">Eu sou o 3.1</a>
                            <a class="nav-link ml-3" href="#Item3-2">Eu sou o 3.2</a>
                        </nav>
                </nav>
             </nav>
        </div>

        <div class="col-9">
            <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">
                <h4 id="Item1">Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquam consequatur alias voluptas eligendi, nemo sint animi facere quia. Dignissimos alias ipsam voluptates repudiandae excepturi, omnis ratione illum quasi praesentium.</p>

                <h5 id="Item1-1">voluptates repudiandae</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquid nulla odit quas! Sint reiciendis, aliquam quia dicta voluptates nihil, soluta veniam obcaecati dolor sequi voluptatibus consequatur corrupti! Aut, unde! Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa consectetur nam quae maxime nobis sit quam veritatis totam blanditiis natus minima numquam voluptates temporibus, odit incidunt dolorem possimus iusto quod?</p>

                <h5 id="Item1-2">dicta voluptates nihil</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eos dicta facere neque tempore, vero accusantium ab architecto tenetur error dignissimos distinctio suscipit, beatae voluptatem ad expedita totam voluptas. Minus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, assumenda vitae neque, voluptatum dolorem tempore accusantium et aliquam ipsa ducimus numquam eos hic nam consequuntur nesciunt deleniti consequatur! Commodi, nihil.</p>

                <h4 id="Item2">Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquam consequatur alias voluptas eligendi, nemo sint animi facere quia. Dignissimos alias ipsam voluptates repudiandae excepturi, omnis ratione illum quasi praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit facilis quas laboriosam officiis quia repellat ut ullam. Eligendi amet autem facere eius debitis fugiat harum facilis. Soluta libero ducimus earum.</p>

                <h4 id="Item3">Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquam consequatur alias voluptas eligendi, nemo sint animi facere quia. Dignissimos alias ipsam voluptates repudiandae excepturi, omnis ratione illum quasi praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolore, exercitationem esse itaque blanditiis, saepe ut quas, natus accusamus minima obcaecati quam. Illo magnam expedita, vitae nihil repudiandae animi maxime!</p>

                <h5 id="Item3-1">voluptates repudiandae</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aliquid nulla odit quas! Sint reiciendis, aliquam quia dicta voluptates nihil, soluta veniam obcaecati dolor sequi voluptatibus consequatur corrupti! Aut, unde!Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquam consequatur alias voluptas eligendi, nemo sint animi facere quia. Dignissimos alias ipsam voluptates repudiandae excepturi, omnis ratione illum quasi praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolore, exercitationem esse itaque blanditiis, saepe ut quas, natus accusamus minima obcaecati quam. Illo magnam expedita, vitae nihil repudiandae animi maxime!</p>

                <h5 id="Item3-2">dicta voluptates nihil</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eos dicta facere neque tempore, vero accusantium ab architecto tenetur error dignissimos distinctio suscipit, beatae voluptatem ad expedita totam voluptas. Minus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aliquam consequatur alias voluptas eligendi, nemo sint animi facere quia. Dignissimos alias ipsam voluptates repudiandae excepturi, omnis ratione illum quasi praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolore, exercitationem esse itaque blanditiis, saepe ut quas, natus accusamus minima obcaecati quam. Illo magnam expedita, vitae nihil repudiandae animi maxime!</p>
            
            </div>
        </div>
    </div>


</section>

<!-- TRAZ O FOOTER -->
<?php require_once("./inc/footer.php"); ?>