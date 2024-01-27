<!DOCTYPE html>
<html>

<head>
    <title>Catalog App</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <h1>Welcome to the Catalog App</h1>
    <main>
        <p>This app allows you to view a catalog of products. You can view the products in different sort orders.</p>
        <ul>
            <li><a href="/">View unsorted products</a></li>
            <li><a href="/price-sort">View products sorted by price</a></li>
            <li><a href="/sales-per-view-sort">View products sorted by sales per view</a></li>
            <li><a href="/name-sort">View products sorted by name</a></li>
        </ul>
        <h2><?php echo $sort ?> Products</h2>
        <div class="product-list">
            <?php
            foreach ($products as $product) { ?>
                <div class="">
                    <h3><?= $product['name'] ?></h3>
                    <p>Price: $<?= $product['price'] ?></p>
                    <p>Created: <?= $product['created'] ?></p>
                    <p>Sales: <?= $product['sales_count'] ?></p>
                    <p>Views: <?= $product['views_count'] ?></p>
                </div>

            <?php }  ?>
        </div>
    </main>

    <script src="/assets/js/script.js"></script>
</body>

</html>