<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="testo.php">
                    <label for="">Testo</label>
                    <input type="textarea" name="testo">
                    <label for="">
                        inserisci una parola da censurare 
                        <input type="text" name="key">
                    </label>
                    <button class="btn btn-primary">accedi</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>