<?php
include __DIR__.'/functions.php';

if(isset($_GET['length'])){
    $response = generatePassword($_GET['length']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <div class="content d-flex justify-content-center pt-5">
                    <form action="index.php" method="GET">
                    <label for="length" class="control-label">Lunghezza</label>
                        <div class="row">
                            <div class="col">
                            <input type="number" id="length" name="length" placeholder="lunghezza" class="form-control">
                            </div>
                            <div class="col">
                            <button type="submit" class="btn btn-success float-end">invia</button>
                            </div>
                        </div>                       
                    </form>
                </div>
                <div class="content d-flex justify-content-center pt-5">
                    <?php if(isset($response)){ ?>
                        <h4> 
                            <?php echo $response ?> 
                        </h4>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>