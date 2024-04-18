<?php
    $paytmParams = array();
    $paytmParams["MID"] = $_POST['MID'];
    $paytmParams["ORDER_ID"] = $_POST['ORDER_ID'];
    $paytmParams["CUST_ID"] = $_POST['CUST_ID'];
    $paytmParams["MOBILE_NO"] = $_POST['MOBILE_NO'];
    $paytmParams["EMAIL"] = $_POST['EMAIL'];
    $paytmParams["CHANNEL_ID"] = $_POST['CHANNEL_ID'];
    $paytmParams["TXN_AMOUNT"] = $_POST['TXN_AMOUNT'];
    $paytmParams["WEBSITE"] = $_POST['WEBSITE'];
    $paytmParams["INDUSTRY_TYPE_ID"] = $_POST['INDUSTRY_TYPE_ID'];
    $paytmParams["CALLBACK_URL"] = $_POST['CALLBACK_URL'];
    $paytmChecksum = getChecksumFromArray($paytmParams,$me);
    $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
    // $transactionURL = "https://securegw.paytm.in/theia/processTransaction"; // for production
?>
<html>
    <head>
        <title>Merchant Checkout Page</title>
    </head>
    <body>
        <center><h1>Please do not refresh this page...</h1></center>
        <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
            <?php
                foreach($paytmParams as $name => $value) {
                    echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
                }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
        </form>
        <script type="text/javascript">
            document.f1.submit();
        </script>
    </body>
</html>