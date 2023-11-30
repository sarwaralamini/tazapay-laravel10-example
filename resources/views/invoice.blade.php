<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card {
            border-radius: 0px;
        }
    </style>
  </head>
  <body>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card" style="min-height:800px;">
                <div class="card-header text-center">
                  <img src="{{ asset('logo.png') }}" alt="">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <b>To: Md.Sarwar Alam</b>
                            <br>Phone: 017XXXXXXXX
                            <br>Email: <a href="mailto:me@sarwaralam.com">me@sarwaralam.com</a>
                            <br>Example Street, Examply City
                            <br>Example Country, 101010
                        </div>
                        <div class="col-4">
                            <b>Invoice</b>
                            <br><b>ID:</b>#123-321
                            <br><b>Purchase Date:</b> {{ date("F j, Y") }}
                            <br><b>Status:</b> <span class="badge text-bg-warning">Unpaid</span>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="table-responsive">
                                <table class="table table-bordered border-secondary">
                                    <thead>
                                        <tr class="table-primary">
                                            <th>#</th>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>Unit Price</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Item One</td>
                                            <td>1</td>
                                            <td>$100</td>
                                            <td>$100</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Item Two</td>
                                            <td>5</td>
                                            <td>$30</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Item Three</td>
                                            <td>1</td>
                                            <td>$20</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Item Four</td>
                                            <td>1</td>
                                            <td>$50</td>
                                            <td>$50</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Item Five</td>
                                            <td>2</td>
                                            <td>$10</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Item Six</td>
                                            <td>1</td>
                                            <td>$30</td>
                                            <td>$30</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="table-responsive w-50 float-end">
                                <table class="table table-bordered border-secondary">
                                    <tr>
                                        <th style="width:54%!important;">Sub Total</th>
                                        <td>$500.00</td>
                                    </tr>
                                    <tr>
                                        <th style="width:54%!important;">Tax(0%)</th>
                                        <td>$0.00</td>
                                    </tr>
                                    <tr>
                                        <th style="width:54%!important;">Total Amount</th>
                                        <td>$500.00</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <hr>
                            <div class="d-flex" style="justify-content: space-between;">
                                <div>Thank you for your purchase</div>
                                <div>
                                    <button class="btn btn-primary text-light font-weight-bolder">Pay Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
