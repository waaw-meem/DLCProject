<!DOCTYPE html>
<html lang="en" class="">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Mortgage Calculator | DLC Real Estate </title>
        <?php include 'includes/meta.php'; ?>
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/choices.js@10.2.0/public/assets/styles/choices.min.css">

    </head>

    <body class="no-home">

        <!-- Loader -->
        <?php include 'includes/loader.php';?>
        <!-- Header -->
        <?php include 'includes/header.php'; ?>

        <main>

            <!-- inner hero -->
            <section class="inner-hero">
                <div class="inner-hero__figure">
                    <picture>
                        <source media="(min-width:576px)" srcset="/assets/images/heros/mortgage.jpg">
                        <img src="/assets/images/heros/mortgage-mob.jpg" alt="hero" class="img-hack">
                    </picture>
                </div>
                <div class="inner-hero__text">
                    <h1 class="h1 m-0">Mortgage Calculator </h1>
                </div>
                <div class="inner-hero__contacts">
                    <a href="javascript:void" class="item item--chat">
                        <img src="/assets/svg/chat.svg" alt="chat" class="svg-convert">
                    </a>
                    <a href="javascript:void" class="item">
                        <img src="/assets/svg/whatsapp.svg" alt="whatsapp" width="46" height="46" class="svg-convert">
                    </a>
                </div>
            </section>

            <section class="mortgage-calculator-sec secondary-bg">
                <div class="container-s">
                    <div class="custom-row align-item-center">
                        <div class="col_12 col_lg_6">
                            <div class="mortgage-calculator__left-panel">
                                <div class="generic-panel">
                                    <h2 class="text-capitalize">Mortgage Payment Calculator</h2>
                                    <p>Quickly See What Your Mortgage Payments Might Look Like</p>
                                </div>
                                <div class="custom-row">
                                    <div class="col_12 col_lg_12">
                                        <div class="c_form-field">
                                            <label for="">Mortgage Amount</label>
                                            <input type="number" class="c_form-field__control"
                                                placeholder="Enter your amount">
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_6">
                                        <div class="c_form-field">
                                            <label>Loan Term in years</label>
                                            <select name="" id=""  class="mortgage-choice">
                                                <option value="">25 Year</option>
                                                <option value="buy">Buy</option>
                                                <option value="rent">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_6">
                                        <div class="c_form-field">
                                            <label>Numbers Of Periods Per Year</label>
                                            <select name="" id=""  class="mortgage-choice">
                                                <option value="">25 Year</option>
                                                <option value="buy">Buy</option>
                                                <option value="rent">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_6">
                                        <div class="c_form-field">
                                            <label>Anaual Interest Rate</label>
                                            <select name="" id=""  class="mortgage-choice">
                                                <option value="">Fixed</option>
                                                <option value="buy">Buy</option>
                                                <option value="rent">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_6">
                                        <div class="c_form-field">
                                            <label>Variable Rate</label>
                                            <select name="" id=""  class="mortgage-choice">
                                                <option value="">Fixed</option>
                                                <option value="buy">Buy</option>
                                                <option value="rent">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_12">
                                        <div class="c_form-field">
                                            <div class="custom-radio-group">
                                                <input type="radio" id="advance-payment-option" name="advance-option">
                                                <label for="advance-payment-option">Advance Payment Option</label>
                                                <div class="check"></div>
                                            </div>
                                            <select name="" id="" id="a-select" class="mortgage-choice">
                                                <option value="">Fixed</option>
                                                <option value="buy">Buy</option>
                                                <option value="rent">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col_12 col_lg_12">
                                        <button type="submit" class="btnn">
                                            <span class="btnn__text">Calculate</span>
                                            <span class="btnn__icon">
                                                <img src="/assets/svg/arrow-right.svg" alt="icon" width="28" height="28"
                                                    class="svg-convert" />
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Result of mortgage calculator -->
                            <!-- <div class="mortgage-calculator__result">
                                <div class="mortgage-calculator__result-wrapper">
                                    <span class="title">Your Monthly Payment will be:</span>
                                    <h2 class="h2">2.700 AED</h2>
                                </div>
                            </div> -->

                        </div>
                        <div class="col_12 col_lg_6">
                            <div class="img-wrapper element-lg-right-zero h-100">
                                <img src="/assets/images/mortgage/mortgage-calculator.jpg " alt="mortgage calculator" width="936" height="820" class="img-hack">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </main>







        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/choices.js@10.2.0/public/assets/scripts/choices.min.js"></script>
        <?php include 'includes/scripts.php'; ?>

    </body>

</html>