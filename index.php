<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="col-md-6 m-auto p-3">
        <h1>Contact</h1>

        <div class="response alert d-none"></div>

        <form class="contact-form">
            <div class="row">
                <div class="col-md mb-3">
                    <label for="fullname" class="form-label">Votre nom</label>
                    <input type="text" name="fullname" id="fullname" required class="form-control">
                </div>
                <div class="col-md mb-3">
                    <label for="email" class="form-label">Votre email</label>
                    <input type="email" name="email" id="email" required class="form-control">                
                </div>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Sujet</label>
                <input type="text" name="subject" id="subject" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea name="message" id="message" rows="5" required class="form-control"></textarea>
            </div>
            <input type="hidden" name="hp">
            <div class="d-flex justify-content-end">
                <input type="submit" value="Envoyer votre message" class="btn btn-primary">
            </div>
        </form>        
    </div>


    <script src="js/main.js"></script>

</body>
</html>