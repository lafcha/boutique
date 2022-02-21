<div class="container col-12">
    <?php xdebug_var_dump($_SESSION) ?>
    <h2 class="py-4"><?= $productData['name']?>  <span class="badge bg-primary fs-6"><?= $productData['category']?></h2>
   </span>
    <div class="d-flex">
        <div class="col-3">
            <img alt="photo" src="./storage/app/products/product_<?= $productData['id']?>.jpg" class="img-fluid">
        </div>
        <div class="col-5 d-flex flex-column pt-5 ps-3">
            <div><p><?= $productData['description']?></p>
                <p class="fw-bolder fs-3"><?= $productData['price']?> €</p>
                <div class=" row">
                    <form action="/index.php?action=cart" method="POST" class="col-9 d-flex">
                        <label for="quantity">
                            <div class="col-7">
                                <input id="quantity" type="number" class="form-control" required>
                            </div>
                        </label>
                        <div class="col-6 ">
                            <input type="submit" class="btn btn-secondary" id="product-add-btn"
                                   value="Ajouter au panier" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>