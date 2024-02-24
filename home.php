<!-- Project for mess management -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Mother's Dish</title>
    <script>
    function deleteEntries() {
        confirmation = confirm("Do you really want to delete all the entries of the current day? ");
        if (confirmation) {
            window.location = "delete-entries.php";
        }
    }
    </script>
</head>

<body
    style="background-image: url(mothers-dish/images/home-cover.jpg);background-size:cover; background-attachment: scroll;">
    <div>

    </div>
    <navbar>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php" style="margin:0 10px 0 450px">Mother's Dish</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="register-customer.html"
                            style="margin:0 10px 0 10px">Register Customer</a>
                        <a class="nav-link" href="make-entry.html" style="margin:0 10px 0 10px">Make Entry</a>
                        <button class="nav-link btn btn-light" onclick="deleteEntries()">Delete Entries</button>
                        <a class="nav-link" href="logout.php" style="margin:0 10px 0 10px">Logout</a>

                    </div>
                </div>
            </div>
        </nav>
    </navbar>

    <div style="width: 100%;height: 100%; justify-content: left; display: flex;">

        <img src="mothers-dish/images/logo.webp" alt=""
            style="border-radius: 30px; justify-content: right; margin-left: 100px; margin-top: 50px;">
    </div>
    <div>
        <strong>
            <h1 class="display-2"
                style="border: double; border-radius: 20px; border-color: white; position:absolute;top:55%;left:0; margin-right: 300px; color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;; size: 1000px;"
                href="index.html">Mother's Dish</h1>
        </strong>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>