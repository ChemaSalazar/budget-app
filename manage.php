<?php
// load up your config file
//require_once("/path/to/resources/config.php");

require_once("resources/templates/header.php");
?>

    <div class="container-fluid">
        <div class="row">
            <?php
            require_once("resources/templates/leftPanel.php");
            ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manage</h1> <div id="wallet-amount" class="h4 float-right coloor-txt-medium-green">$62,455.23</div>
                </div>

                <h3 class="h3"> <span class="bi bi-gear-wide-connected"></span> Manage Bills & Expenses</h3>
                <a href="#" class="btn btn-success"><span class="bi bi-plus"></span> Add New Bill</a>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Expense</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mastercard *6675</td>
                            <td>56.00</td>
                            <td>Credit Card</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        <tr>
                            <td>Visa *7787</td>
                            <td>20.00</td>
                            <td>Credit Card</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        <tr>
                            <td>Rent</td>
                            <td>560.00</td>
                            <td>Rent/Mortgage</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        <tr>
                            <td>Synchrony *9909</td>
                            <td>256.00</td>
                            <td>Shopping</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        <tr>
                            <td>Disney+</td>
                            <td>256.00</td>
                            <td>Subscription</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>



                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3 class="h3 mt-5"> <span class="bi bi-gear-wide-connected"></span> Manage Other Expenses</h3>
                </div>
                <a href="#" class="btn btn-success"><span class="bi bi-plus"></span> Create New Expense</a>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Expense</th>
                            <th>Amount</th>
                            <th>Tag</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Groceries</td>
                            <td>166.00</td>
                            <td>Groceries</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        <tr>
                            <td>Takeout</td>
                            <td>29.00</td>
                            <td>Food</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        <tr>
                            <td>Gas</td>
                            <td>86.00</td>
                            <td>Transportation</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        <tr>
                            <td>Amazon</td>
                            <td>77.00</td>
                            <td>Shopping</td>
                            <td><a href="#" class="btn badge bg-success">Add</a><a href="#" class="btn badge bg-danger">Subtract</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>




            </main>
        </div>
    </div>
<?php
require_once("resources/templates/footer.php");
?>