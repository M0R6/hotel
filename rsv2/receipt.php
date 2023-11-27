<?php
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// Retrieve reservation details from the database based on the reservation ID
if(isset($_GET['idrsv'])) {
    $idrsv = $_GET['idrsv'];
    $result = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE idrsv='$idrsv'");
    $reservation = mysqli_fetch_assoc($result);
    $currentDateTime = date('Y-m-d H:i:s');
    $date1 = strtotime($reservation['cidate']);
    $date2 = strtotime($reservation['codate']);

    // Calculate the difference in days
    $days = floor(($date2 - $date1) / (60 * 60 * 24));

    $unit = $reservation['unit'];
    $price = 0; // default price

    // Check the unit and set the price accordingly
    if ($unit == 'REGULAR') {
        $price = 250000;
    } elseif ($unit == 'DELUXE') {
        $price = 750000;
    }

    if ($price == 250000) {
        $pricef = 'Rp250.000';
    } elseif ($price == 750000) {
        $pricef = 'Rp750.000';
    }

    $totalprice = $price * $days * $reservation['rooms'];
    echo <<<HTML
<!DOCTYPE html>
<html>
                <head>
                    <meta charset="utf-8" />
                    <title>Your Receipt</title>
                    <link rel="icon" href="\hotel\rsv2\img\logo.svg">

                    <style>
                        .invoice-box {
                            max-width: 800px;
                            margin: auto;
                            padding: 30px;
                            border: 1px solid #eee;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                            font-size: 16px;
                            line-height: 24px;
                            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                            color: #555;
                        }

                        .invoice-box table {
                            width: 100%;
                            line-height: inherit;
                            text-align: left;
                        }

                        .invoice-box table td {
                            padding: 5px;
                            vertical-align: top;
                        }

                        .invoice-box table tr td:nth-child(2) {
                            text-align: right;
                        }

                        .invoice-box table tr.top table td {
                            padding-bottom: 20px;
                        }

                        .invoice-box table tr.top table td.title {
                            font-size: 45px;
                            line-height: 45px;
                            color: #333;
                        }

                        .invoice-box table tr.information table td {
                            padding-bottom: 40px;
                        }

                        .invoice-box table tr.heading td {
                            background: #eee;
                            border-bottom: 1px solid #ddd;
                            font-weight: bold;
                        }

                        .invoice-box table tr.details td {
                            padding-bottom: 20px;
                        }

                        .invoice-box table tr.item td {
                            border-bottom: 1px solid #eee;
                        }

                        .invoice-box table tr.item.last td {
                            border-bottom: none;
                        }

                        .invoice-box table tr.total td:nth-child(2) {
                            border-top: 2px solid #eee;
                            font-weight: bold;
                        }

                        @media only screen and (max-width: 600px) {
                            .invoice-box table tr.top table td {
                                width: 100%;
                                display: block;
                                text-align: center;
                            }

                            .invoice-box table tr.information table td {
                                width: 100%;
                                display: block;
                                text-align: center;
                            }
                        }

                        /** RTL **/
                        .invoice-box.rtl {
                            direction: rtl;
                            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                        }

                        .invoice-box.rtl table {
                            text-align: right;
                        }

                        .invoice-box.rtl table tr td:nth-child(2) {
                            text-align: left;
                        }
                    </style>
                </head>

                <body>
                    <div class="invoice-box">
                        <table cellpadding="0" cellspacing="0">
                            <tr class="top">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td class="title">
                                                <img
                                                    src="/hotel/rsv2/img/logo.svg"
                                                    style="display: block; margin: auto; max-width: 350px; width: 100%;"
                                                />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="information">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td>
                                                MORG Homestay<br />
                                                586 Greek Street.<br />
                                                Newcastle, NSW 22451
                                            </td>       
                                            

                                            <td>
                                                Invoice #: {$reservation['idrsv']}<br />
                                                Created: {$currentDateTime}<br />
                                                Western Indonesia Time (GMT+7)
                                            </td>             
                                        </tr>
                                        
                                    </table>
                                </td>
                            </tr>

                            <tr class="heading">
                                <td>Order detail:</td>

                                <td></td>
                            </tr>

                            <tr class="item">
                                <td>UNIT: {$reservation['unit']}</td>

                                <td>{$pricef}/night</td>
                            </tr>

                            <tr class="item">
                                <td> 
                                    Check-in: {$reservation['cidate']} <br>
                                    Check-out: {$reservation['codate']}
                                </td>

                                <td><br>{$days} night(s)</td>
                            </tr>

                            <tr class="item last">
                                <td>Room(s) booked:</td>

                                <td>{$reservation['rooms']}</td>
                            </tr>

                            <tr class="total">
                                <td></td>

                                <td>Total: Rp{$totalprice}</td>
                            </tr>
                        </table>
                        <button onclick="printFunction()">Print or save it to PDF</button>
                        <script>
                            function printFunction() { 
                                window.print(); 
                            }
                        </script>
                    </div>
                </body>
            </html>
HTML;
    // Add other details as needed
} else {
    echo "Invalid reservation ID.";
}
?>
