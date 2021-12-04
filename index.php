<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<div id="answer">

<head>
    <title>Home</title>
</head>
<body>

    <section id="navbar">
        <div class="bg-primary py-3">
            <div class="container text-white">
                <h1 class="mb-0">Home</h1>
            </div>
        </div>
    </section>

    <section id="navbar">
        <div class="bg-dark py-3">
            <div class="container">
                <button type="button" class="navbaritems active" onclick="loadHome()">Home</button>
                <button type="button" class="navbaritems" onclick="loadAbout()">Over mij</button>
                <button type="button" class="navbaritems" onclick="loadWork()">Projecten</button>
                <button type="button" class="navbaritems" onclick="loadContact()">Contact</button>
            </div>
        </div>
    </section>
    <section id="header">
        <div class="bg-image" style="background-image: url('./images/japan.gif');">
            <div class="bg-cover">
                <div class="container h-100">
                    <div class="row justify-content-center h-100">
                        <div class="col-12 col-md-8 text-white text-center">
                            <div class="d-table h-100 w-100">
                                <div class="d-table-cell align-middle">
                                    <h1 class="mb-lg-3"><i>Johnny <span class="highlight">Magielse</span></i></h1>
                                    <h5><i>Dus wie ben ik nou eigenlijk?</i></h5>

                                    <svg class="mt-3 icon" viewBox="0 0 43 40" height="2.2rem" xmlns="http://www.w3.org/2000/svg"><g fill="#FFF" fill-rule="evenodd"><path d="M36.486 11a1 1 0 011 1v14.74l3.824-3.465a1 1 0 011.322-.018l.09.088a1 1 0 01-.07 1.412l-6.124 5.55-6.193-5.513a1 1 0 111.33-1.494l3.821 3.402V12a1 1 0 011-1z"></path><g fill-rule="nonzero"><path d="M12.467 0C5.593 0 0 5.163 0 11.51v16.11c0 6.347 5.593 11.51 12.467 11.51 6.874 0 12.467-5.163 12.467-11.51V11.51C24.934 5.163 19.341 0 12.467 0zm9.924 27.62c0 5.052-4.452 9.163-9.924 9.163-5.472 0-9.924-4.11-9.924-9.163V11.51c0-5.052 4.452-9.162 9.924-9.162 5.472 0 9.924 4.11 9.924 9.162v16.11z"></path><path d="M12.467 7.784c-.702 0-1.271.526-1.271 1.174v5.403c0 .648.569 1.174 1.271 1.174s1.272-.526 1.272-1.174V8.958c0-.648-.57-1.174-1.272-1.174z"></path></g></g></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="blocks">
        <div class="bg-dark">
            <div class="container">
                <div class="row justify-content-center text-white text-center">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <a href="#answer" onclick="loadAbout()">
                            <div id="snippet" class="card border-0 rounded" style="background-image: url('./images/city.jpg');">
                                <div class="snip-cover d-flex h-100">
                                    <p class="my-auto mx-auto">Over mij</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <a href="#answer" onclick="loadWork()">
                            <div id="snippet" class="card border-0 rounded" style="background-image: url('./images/work.jpg');">
                                <div class="snip-cover d-flex h-100">
                                    <p class="my-auto mx-auto">Projecten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <a href="#answer" onclick="loadContact()">
                            <div id="snippet" class="card border-0 rounded" style="background-image: url('./images/contact.jpg');">
                                <div class="snip-cover d-flex h-100">
                                    <p class="my-auto mx-auto">Contact</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

    <?php require_once './pages/footer.php' ?>
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<script>
function loadAbout() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("answer").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./pages/about.php", true);
  xhttp.send();
}

function loadHome() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("answer").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./pages/home.php", true);
  xhttp.send();
}

function loadWork() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("answer").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./pages/work.php", true);
  xhttp.send();
}

function loadContact() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("answer").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./pages/contact.php", true);
  xhttp.send();
}
</script>