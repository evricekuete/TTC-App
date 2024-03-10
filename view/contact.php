<?php include('layouts/navbar.php') ?>
        <!-- Page Header-->
        <header class="masthead" style="background-color: antiquewhite; padding-top: 50px;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Nous envoyer un message</h1>
                            <span class="subheading">Espace Reservé et utilisé uniquement en cas de probleme.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4" style="background-color: antiquewhite; padding: 50px;" >
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                       
                        <div class="my-5 py-3 px-3 bg-light">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating">
                                <input class="form-control" id="name" type="text" placeholder="Entrez votre nom..." data-sb-validations="required" />
                                <label for="name">Votre nom</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Le nom est obligatoire.</div>
                            </div><br>
                            <div class="form-floating">
                                <input class="form-control" id="email" type="email" placeholder="Entrez votre adresse e-mail..." data-sb-validations="required,email" />
                                <label for="email">Adresse e-mail</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">L'e-mail est obligatoire.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Adresse e-mail invalide.</div>
                            </div><br>
                            <div class="form-floating">
                                <textarea class="form-control" id="text" cols="30" rows="10" type="text" placeholder="Entrez votre Message ici..." data-sb-validations="required" > </textarea>
                                <label for="text"> Votre Message</label>
                                <div class="invalid-feedback" data-sb-feedback="text:required">le message est obligatoire.</div>
                            </div><br>
                            <button type="submit" onclick="validateForm()">Envoyer</button>
                        </form>
                        
                        <script>
                            function validateForm() {
                                const name = document.getElementById("name").value;
                                const email = document.getElementById("email").value;
                                const text = document.getElementById("text").value;

                                if (name === "" || email === "" || text === "") {
                                    alert("Veuillez remplir tous les champs.");
                                } else {
                                    alert("Message envoyé avec success !");
                                }
                            }
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
 <?php include('layouts/footer.php') ?>