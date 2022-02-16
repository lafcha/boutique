<h2 class="text-center py-4"> Nos derniers produits </h2>

<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-3">
        <?php foreach ($productsData as $index => $product): ?>
        <div class="col">
            <div class="card product-card h-100">
                <img class="card-img-top" src="storage/app/products/product_<?= $product['id']?>.jpg" alt="Card image cap">
                <div class="card-body p-3">
                    <p class="fst-italic mb-0"><?= $product['category'] ?></p>
                    <h5 class="card-title"><?= $product['name'] ?></h5>
                    <h4 class="fw-bolder"><?= $product['price'] ?> TTC</h4>
                    <div class=" row ps-2">
                        <a href="/index.php?action=productPage&id=<?= $product['id'] ?>" class="btn btn-primary col-3">Voir</a>
                        <form action="/index.php?action=cart" method="POST" class="col-9 d-flex justify-content-end">
                            <label for="quantity">
                                <div class="col-9">
                                    <input id="quantity" type="number" class="form-control">
                                </div>
                            </label>
                            <div class="col-3">
                                <input type="submit" class="rounded-circle secondary text-light cart-pill form-control"
                                       value="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

