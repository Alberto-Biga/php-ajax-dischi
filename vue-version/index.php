<?php require __DIR__ . '/partials/meta.php' ?>


<div id="app">
    <?php require __DIR__ .'/partials/header.php' ?>    
    
    <main>
        <div class="container">
            <div class="row row-cols-3 g-3 mt-5">
                
                <div v-for="element in dischi">
                    <div class="col text-white text-center">
                        <img class="img-fluid" :src="element.poster" alt="Poster">
                        <h2> {{element.title}} </h2>
                        <span> {{element.author}} </span>
                        <span> {{element.year}} </span>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

</div>

<?php require __DIR__ . '/partials/footer.php' ?>
