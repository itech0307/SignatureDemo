<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Signature</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Employee Signature</h2>
        <form method= "POST" action="save_signature.php" class="sigPad" id="smoothed-variableStrokeWidth">
            <div class="form-group">
                <label for="id">ID:</label>
                <input required type="text" class="form-control" id="id" name="id" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label for="fullname">Fullname:</label>
                <input required type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Fullname">
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input required type="text" class="form-control" id="department" name="department" placeholder="Enter Department">
            </div>
            <div class="sig sigWrapper">
                <label for="signature">Signature:</label>
                <canvas id="signatureCanvas" class="border border-dark"></canvas>
                <input type="hidden" id="output" name="output" class="output">
            </div>
            <button type="submit" class="saveButton btn btn-primary" onclick="saveSignature()">Save</button>
            <button type="button" class="clearButton btn btn-danger" onclick="clearSignature()">Clear</button>
        </form>
    </div>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fullname</th>
                <th scope="col">Department</th>
                <th scope="col">Signature</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'fill_table.php'; ?>
        </tbody>
    </table>

    <script src="assets/numeric-1.2.6.min.js"></script>
    <script src="assets/bezier.js"></script>
    <script src="jquery.signaturepad.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#smoothed-variableStrokeWidth').signaturePad({
                drawOnly:true, 
                drawBezierCurves:true, 
                variableStrokeWidth:true, 
                lineTop:0});
        });

        function saveSignature() {
            var id = $('#id').val();
            var fullname = $('#fullname').val();
            var department = $('#department').val();
            var canvas = document.getElementById("signatureCanvas");
            var signatureData = canvas.toDataURL(); // Retrieve the data URL of the canvas

            // Set the signature data to a hidden input field
            $('#output').val(signatureData);

            // Alert the current value of output
            //alert("Current value of output: " + $('#output').val());

            // Submit the form
            //$('#smoothed-variableStrokeWidth').submit();
        }
    </script>
</body>
</html>
