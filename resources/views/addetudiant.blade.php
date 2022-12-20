
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-5">
    <p class="text-start "><a href="{{'dashboard'}}" class="btn  fs-1 text-success">dashboard</a>/nouveau Etudiant</p>

    <p class="text-start fs-4">Ajouter un nouveau Etudiant</p>
</div>
<main class="">
    <section class="section ">
        <center>
            <div class="container">
                <div class="card o-hidden border-0 shadow-lg my-1" style="width:600px;">
                    <div class="container" style="width:90%;height:30%">
                        <br>
                        <div class="row">
                            <div class="container" style="width:400px;height:30%">
                                <br>
                                <div class="mb-1">
                                <form action="{{route('postetudiant')}}" method="POST">
                                        @csrf
                                        <div class="mb-1">
                                            <label for="nom" class="form-label"  >Nom</label>
                                            <input id="nom" class="form-control mt-1 w-full" type="text" name="nom" required autofocus />
                                        </div>
                                        <div class="mb-1">
                                            <label for="prenom" class="form-label"  >Prenom</label>
                                            <input id="prenom" class="form-control mt-1 w-full" type="text" name="prenom" required autofocus />
                                        </div>
                                        <div class="mb-1">
                                            <label for="naissance" class="form-label"  >Naissance</label>
                                            <input id="naissance" class="form-control mt-1 w-full" type="date" name="naissance" required autofocus />
                                        </div>
                                        <div class="mb-1">
                                            <label for="lieu" class="form-label"  >Lieu</label>
                                            <input id="lieu" class="form-control mt-1 w-full" type="text" name="lieu" required autofocus />
                                        </div>

                                        <div class="mb-1">
                                            <label for="" class="form-label">Sexe:</label>
                                            <select name="sexe" class="form-control mt-1 w-full" required autofocus>
                                                <option value="">...</option>
                                                <option value="MASCULIN">MASCULIN</option>  
                                                <option value="FEMININ">FEMININ</option>
                                            </select>   
                                        </div>
                                        <div class="mb-1">
                                            <label for="diplome" class="form-label"  >Diplome</label>
                                            <input id="diplome" class="form-control mt-1 w-full" type="text" name="diplome" required autofocus />
                                        </div>
                                        <div class="mb-1">
                                            <label for="nomtuteur" class="form-label"  >Nom tuteur</label>
                                            <input id="nomtuteur" class="form-control mt-1 w-full" type="text" name="nomtuteur" required autofocus />
                                        </div>
                                        <div class="mb-1">
                                            <label for="codecl" class="form-label">Code Client</label>
                                            <select name="codecl" id="codecl" class="form-control">
                                            @foreach ($classes as $classe)
                                                <option value="{{$classe->id}}">
                                                    {{$classe->nomcl}}
                                                </option>
                                            @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-1">sauvegarder</button>
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
