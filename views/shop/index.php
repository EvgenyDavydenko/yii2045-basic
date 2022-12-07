
<div class="row mt-5">

    <div class="col-lg-3">
    <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
            <a class="list-group-item" href="#!">Category 1</a>
            <a class="list-group-item" href="#!">Category 2</a>
            <a class="list-group-item" href="#!">Category 3</a>
        </div>       
    </div>

    <div class="col-lg-9">
        <div class="row">
            <?php foreach ($products as $product): ?> 
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="<?= \yii\helpers\Url::to(['shop/item', 'id'=>$product->id])?>"><img class="card-img-top" src="/img/<?= $product->img ?>" alt="<?= $product->name ?>" /></a>
                    <div class="card-body">
                        <h4 class="card-title"><?= $product->name ?></h4>
                        <p class="card-text">Категория</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-primary btn-block"><?= $product->price . ' ₽'?></button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>                  
        </div>

        <div class="row">               
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pagination,
                'maxButtonCount' => 5,
                'activePageCssClass' => 'active',
                'linkContainerOptions' => ['class' => 'page-item'],
                'linkOptions' => ['class' => 'page-link'],
                'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
            ]); ?>                 
        </div>
    </div>

</div>