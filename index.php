<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Signature Pad demo</title>
    <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->

    <link rel="stylesheet" href="assets/css/signature-pad.css">
</head>

<body onselectstart="return false">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="signature-pad" class="signature-pad">
                    <div class="signature-pad--body">
                        <canvas></canvas>
                    </div>
                    <div class="signature-pad--footer">
                        <div class="description">Sign above</div>

                        <div class="signature-pad--actions">
                            <div>
                                <button type="button" class="button clear" data-action="clear">Clear</button>
                                <button type="button" class="button" data-action="change-color">Change color</button>
                                <button type="button" class="button" data-action="change-width">Change width</button>
                                <button type="button" class="button" data-action="undo">Undo</button>
                                <button type="button" class="button" data-action="ocr">OCR</button>

                            </div>
                            <div>
                                <button type="button" class="button save" data-action="save-png">Save as PNG</button>
                                <button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
                                <button type="button" class="button save" data-action="save-svg">Save as SVG</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <textarea name="write_text" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="assets/js/signature_pad.umd.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>