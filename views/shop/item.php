
<div class="row mt-5">
    <div class="col-lg-3">
        <div class="list-group">
            <a class="list-group-item active" href="#!">Category 1</a>
            <a class="list-group-item" href="#!">Category 2</a>
            <a class="list-group-item" href="#!">Category 3</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card">
            <img class="card-img-top img-fluid" src="/img/<?=$product['img']?>" alt="..." />
            <div class="card-body">
                <h3 class="card-title"><?=$product['name']?></h3>
                <h4><?=$product['price'] . ' ₽'?></h4>
                <p class="card-text"><?=$product['description']?></p>
            </div>
        </div>
        
    </div>
</div>