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
                    <h1 class="h2">Category</h1> <div id="wallet-amount" class="h4 float-right coloor-txt-medium-green">$62,455.23</div>
                </div>

                <h3 class="h3"> <span class="bi bi-wallet2"></span> Bills and Subscriptions</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Mastercard *6675 <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text">This payment is due in 5 days!</p>
                                <a href="#" class="btn btn-primary col-12">$56.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Visa *7787 <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text">This payment is due in 14 days!</p>
                                <a href="#" class="btn btn-primary col-12">$20.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Rent <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text">This payment is due in 3 weeks.</p>
                                <a href="#" class="btn btn-primary col-12">$560.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Synchrony *9909 <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text">You paid this card.</p>
                                <a href="#" class="btn btn-primary col-12">$256.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Disney+ <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text">This payment is due in 4 weeks.</p>
                                <a href="#" class="btn btn-primary col-12">$256.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="card-text txt-center mt-3">
                            <p>Add new</p>
                            <span class="h2 bi bi-plus-square-dotted"></span>
                        </div>
                    </div>
                </div>



                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3 class="h3 mt-5"> <span class="bi bi-cash-stack"></span> Other Expenses</h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Groceries <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary col-12">$166.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Take Out <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary col-12">$29.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gas <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary col-12">$86.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Amazon <span class="bi bi-arrows-move float-right"></span></h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary col-12">$77.00</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4">
                        <div class="card-text txt-center mt-3">
                            <p>Add new</p>
                            <span class="h2 bi bi-plus-square-dotted"></span>
                        </div>
                    </div>
                </div>




            </main>
        </div>
    </div>
<?php
require_once("resources/templates/footer.php");
?>