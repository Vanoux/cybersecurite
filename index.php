<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Faille Sécurité</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="card card-outline-secondary">
    <div class="card-header">
        <h1 class= "text-center mb-0">Enregistrez vous</h1>
    </div>
        <div class="card-body bg-secondary">
            <form class="form" action="/" role="form" autocomplete="on" method="GET">
                <fieldset>
                    <label for="name" class="text-white mb-0">Nom</label>
                        <div class="row mb-1">
                            <div class="col-lg-6">
                                <input type="text" name="name" id="name" class="form-control" required="off">
                            </div>
                        </div>
                    <label for="email" class="text-white mb-0">Email</label>
                        <div class="row mb-1">
                            <div class="col-lg-6">
                                <input type="email" name="email" id="email" class="form-control" required="off">
                            </div>
                        </div>
                    <label for="password" class="text-white mb-0">Mot de passe</label>
                        <div class="row mb-1">
                            <div class="col-lg-6">
                                <input type="password" name="password" id="password" class="form-control" required="off">
                            </div>
                        </div>
                    <button type="submit" class="btn btn-info btn-lg float-right">Envoi</button>
                </fieldset>
            </form>
        </div>
</div> 
</body>
</html>
