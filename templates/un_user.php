
<div class="row row-cols-1 row-cols-md-3 g-4">
         
            <div class="col">
                <div class="card">
                    <img src="/asset/img/<?=$unuser['image']?>"
                      class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $unuser['email']  ?></h5>
                        <p class="card-text"><?= $unuser['motdepasse'] ?></p>
                    </div>
                    <a href="/detail_user?email=<?= $unuser['email']?>">detail user</a>
                </div>
            </div>
       
    </div>

    
</body>

</html>