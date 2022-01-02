

<div class="container">

    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Harga</h3>
            <?php foreach( $pricelist as $prices) : ?>
                <ul class="list-group">                
                    <li class="list-group-item"><?= $prices['ID'];?></li>                
                    <li class="list-group-item active" aria-current="true">An active item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div> -->

    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Item</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $pricelist as $prices) : ?>
                <tr>
                    <td><?= $prices['ID'];?></td>
                    <td><?= $prices['Item'];?></td>
                    <td><?= $prices['Harga'];?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
        

</div>