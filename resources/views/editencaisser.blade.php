
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container mt-5">
    <p class="text-start "><a href="{{'dashboard'}}" class="btn  fs-1 text-success">dashboard</a>/nouveau Reçu</p>

    <p class="text-start fs-4">Ajouter un nouveau Reçu</p>
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
                                    <form action="{{route('updateencaisser')}}" method="POST">
                                        @csrf  
                                        <div class="mb-1">
                                            <label for="idcaisse" class="form-label">Id Caisse</label>
                                            <select name="idcaisse" id="idcaisse" class="form-control">
                                                <option value="{{$encaisser->idcaisse}}">
                                                    {{$encaisser->idcaisse}}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label for="id" class="form-label">ID Etudiant</label>
                                            <select name="id" id="id" class="form-control">
                                                <option value="{{$encaisser->id}}">
                                                        {{$encaisser->id}}
                                                    </option>
                                                </select>
                                        </div>
                                        <div class="mb-1">
                                            <label for="datedebut" class="form-label"  >Date Debut</label>
                                            <input id="datedebut" class="form-control mt-1 w-full" type="date" name="datedebut" required autofocus value="{{$encaisser->datedebut}}" />
                                        </div>
                                        <div class="mb-1">
                                            <label for="datefin" class="form-label"  >Date Fin</label>
                                            <input id="datefin" class="form-control mt-1 w-full" type="date" name="datefin" required autofocus value="{{$encaisser->datefin}}" />
                                        </div>
                                        <div class="mb-1">
                                            <label for="heureEncaisse" class="form-label"  >Heure Encaisser</label>
                                            <input id="heureEncaisse" class="form-control mt-1 w-full" type="time" name="heureEncaisse" required autofocus value="{{$encaisser->heurEncaisse}}" />
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
