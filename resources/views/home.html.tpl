<h2 class="text-center py-4"> Nos derniers produits </h2>

<div class="container-fluid">
    <div class="card product-card" style="width: 18rem;">
        <img class="card-img-top" src="resources/img/products/product_001.jpg" alt="Card image cap">
        <div class="card-body p-3">
            <p class="fst-italic mb-0">Pastries</p>
            <h5 class="card-title">Croissant</h5>
            <h4 class="fw-bolder">2,50€ TTC</h4>
            <div class=" row ps-2">
                <a href="#" class="btn btn-primary col-3">Voir</a>
                     <form action="/index.php?action=cart" method="POST" class="col-9 d-flex justify-content-end">
                        <label for="quantity">
                            <div class="col-9">
                                <input id="quantity" type="number" class="form-control">
                            </div>
                        </label>
                         <div class="col-3">
                             <input type="submit" class="rounded-circle secondary text-light cart-pill form-control" value=""></input>
                         </div>
                    </form>
            </div>
        </div>
    </div>
</div>
