<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$storeId = 'FKHbpbMJwrWHIhuMPqXAxTOYoxXyLzfp';
$productId = 'jvcPGfqINALouswRSULpCa';

$productClient = (new \Bitcart\Client\Product($baseUrl, $token));

// GET /products/count
//$productsCount = $productClient->getProductsCount();
//var_dump($productsCount);

// GET /products
//$products = $productClient->getProducts(new \Bitcart\Dto\SearchDto());
//var_dump($products);

// GET /products/categories
//$storeId = 'FKHbpbMJwrWHIhuMPqXAxTOYoxXyLzfp';
//$categories = $productClient->getCategories($storeId);
//var_dump($categories);

// GET /products/maxprice
//$maxPrice = $productClient->getMaxPrice($storeId);
//var_dump($maxPrice);

// POST /products
//$product = $productClient->createProduct(new \Bitcart\Dto\ProductDto('Test Product ' . rand(1000, 9999), 100, rand(1,10), $storeId));
//var_dump($product);

// GET /products/{model_id}
//$product = $productClient->getProduct($productId);
//var_dump($product);

// PATCH /products/{model_id}
//$product = $productClient->updateProduct($productId, new \Bitcart\Dto\ProductDto('Test Product', 118, 10, 'FKHbpbMJwrWHIhuMPqXAxTOYoxXyLzfp'));
//var_dump($product);

// DELETE /products/{model_id}
//$product = $productClient->deleteProduct($productId);
//var_dump($product);