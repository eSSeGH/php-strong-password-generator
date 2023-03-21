<?php 

$letters = ['w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m'];
$m_letters = ['W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M'];
$numbers = ['1','2','3','4','5','6','7','8','9','0'];
$s_char = ['[',']','{','}','#','§','-','_',':',';','.',',','(',')','/','&','%','$','£','"','!','<','>'];

$all_char = array_merge($letters, $m_letters, $numbers, $s_char);

$pw_length = isset($_GET["pw-length"]) ?? null;
var_dump($_GET);
$pw_length_int = intval($_GET["pw-length"]);
var_dump($pw_length_int);

$pw = array_rand(array_flip($all_char), $pw_length_int);
var_dump($pw);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <!-- header -->
    <header style="height: 90px; background-color: rgba(0, 0, 0, 0.95)">
        <h2 class="text-center" style="line-height: 90px; color: cornflowerblue;">Strong Password Generator</h2>
    </header>

    <!-- start main -->
    <main class="pt-5" style="height: calc(100vh - 90px); background-color: cornflowerblue;">

        <div class="container card py-3 px-5">

            <form action="./index.php" method="GET">

                <div class="mb-3 row">
                    <label for="pw-length" class="col-sm-6 col-form-label">Lunghezza Password</label>

                    <div class="col-sm-6 ms-auto">
                        <input type="text" class="form-control" name="pw-length" id="pw-length">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                
            </form>

        </div>

        <section class="password pt-5">

            <div class="container card py-3 px-5">

                <div class="row">

                    <h2 class="col-sm-6">La tua password:</h2>

                    <h2 class="col-sm-6"><?php 

                        foreach ($pw as $pw_char) {
                            echo $pw_char;
                        }
                        
                    ?></h2>

                </div>

            </div>

        </section>

    </main>
    <!-- end main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>