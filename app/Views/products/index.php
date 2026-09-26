<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
</head>
<body>

    <h1><?= esc($title) ?></h1>

    <?php if (empty($products)): ?>
        <p>No products found.</p>
    <?php else: ?>

        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= esc($product['id']) ?></td>
                        <td><?= esc($product['name']) ?></td>
                        <td><?= esc($product['description']) ?></td>
                        <td><?= esc($product['price']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>

    <p>
        <a href="<?= base_url('/') ?>">Return to Home</a>
    </p>

</body>
</html>