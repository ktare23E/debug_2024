    <?php 
    session_start();
    include_once '../components/header.php';
    include_once '../components/connection.php';
    if (!isset($_SESSION['isUsers'])) {
        header('Location: ../index.php');
        exit();
    }

    $query = mysqli_query($db, "SELECT * FROM products");

    ?>
    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Add Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <form action="add_product.php" method="POST">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="produc_tName" name="produc_tName" required>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="productPrice" name="product_prace" step="0.01"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="productType" class="form-label">Product Type</label>
                        <select class="form-select" id="productType" name="product_type" required>
                            <option value="">Select a type</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Food">Food</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" name="add_btn">Add Product</button>
                </form>
            </div>
        </div>
    </div>

    <!-- /Offcanvas -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h6>Product</h6>
            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                Add Product
            </a>
        </div>

        <hr>
        <table class="table">
            <caption>List of products</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php 
                while ($fetch = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <th scope="row">
                        <?- $fetch['product_id'] ?>
                    </th>
                    <td><?= $fetch['product_name'] ?></td>
                    <td><?= $fetch['product_price'] ?></td>
                    <td>
                        <?- $fetch['product_typo'] ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger btn-sm" href="delete.php?ids=<?= $id; ?>">Delete</a>
                        <a class="btn btn-outline-primary btn-sm" href="delete.php?ids=<?= $id; ?>">Edit</a>
                    </td>
                </tr>
                <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    </body>

    </html>