
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-5">
    <p class="text-start "><a href="{{'dashboard'}}" class="btn  fs-1 text-success">dashboard</a>/nouveau caissier</p>

    <p class="text-start fs-4">Ajouter un nouveau caissier</p>
</div>
<main class="">
    <section class="section ">
        <center>
            <div class="container">
                <div class="card o-hidden border-0 shadow-lg my-1" style="width:600px;">
                    <div class="container" style="width:90%;height:500px">
                        <br>
                        <div class="row">
                            <div class="container" style="width:600px;height:500px">
                                <br>
                                <div class="mb-3">
                                    <form action="{{route('postcaissier')}}" method="POST">
                                        @csrf
                                        <label for="nomCaisse" class="form-label"  >Nom Caissier</label>
                                        <input id="nomCaisse" class="form-control mt-1 w-full" type="text" name="nomCaisse" required autofocus />
                                        
                                        <label for="prenomCaisse" class="form-label"  >Prenom Caissier</label>
                                        <input id="prenomCaisse" class="form-control mt-1 w-full" type="text" name="prenomCaisse" required autofocus />
                                       
                                        <label for="niveau" class="form-label"  >Niveau</label>
                                        <input id="niveau" class="form-control mt-1 w-full" type="text" name="niveau" required autofocus />
                                       

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
