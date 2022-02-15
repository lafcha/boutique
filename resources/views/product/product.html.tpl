<div class="container col-12">
    <h2 class="py-4"><?= $productData['name']?><span class="badge bg-primary"><?= $productData['category']?></span></h2>
    <div class="d-flex">
        <div class="col-6">
            <img alt="photo" src="./resources/img/img.jpg">
        </div>
        <div class="col-5 d-flex flex-column pt-5">
            <div><p><?= $productData['description']?></p>
                <form action=" /index.php?action=cart" method="POST">
                    <label for="quantity">
                        <span><?= $priceWithTax?> €</span>
                        <input id="quantity" type="number">
                    </label>
                    <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                </form>
            </div>

        </div>
    </div>
</div>