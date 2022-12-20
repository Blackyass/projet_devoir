
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-5">
    <p class="text-start "><a href="{{'dashboard'}}" class="btn  fs-1 text-success">dashboard</a>/nouvelle classe</p>

    <p class="text-start fs-4">Ajouter une nouvelle Classe</p>
</div>
<main class="">
    <section class="section ">
        <center>
            <div class="container">
                <div class="card o-hidden border-0 shadow-lg my-1" style="width:600px;">
                    <div class="container" style="width:90%;height:30%">
                        <br>
                        <div class="row">
                            <div class="container" style="width:600px;height:500px">
                                <br>
                                <div class="mb-3">
                                    <form action="{{route('postclasse')}}" method="POST">
                                        @csrf
                                        <label for="nomcl" class="form-label"  >Nom Client</label>
                                        <input id="nomcl" class="form-control mt-1 w-full" type="text" name="nomcl" required autofocus />
                                        
                                        <label for="fraisInscription" class="form-label"  >Frais d'Inscription</label>
                                        <input id="fraisInscription" class="form-control mt-1 w-full" type="number" name="fraisInscription" required autofocus />

                                        <label for="mensualite" class="form-label"  >Mensualite</label>
                                        <input id="mensualite" class="form-control mt-1 w-full" type="number" name="mensualite" required autofocus />
                                        
                                        <label for="fraistenue" class="form-label"  >Frais Tenue</label>
                                        <input id="fraistenue" class="form-control mt-1 w-full" type="number" name="fraistenue" required autofocus />

                                        <label for="fraisamicale" class="form-label"  >Frais Amicale</label>
                                        <input id="fraisamicale" class="form-control mt-1 w-full" type="number" name="fraisamicale" required autofocus />

                                        <button type="submit" class="btn btn-primary mt-3">sauvegarder</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </center>
    </section>
</main>
