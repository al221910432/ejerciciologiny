
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
    </head>
    
    <form class="row g-3">
        <div class="mb-3">
          <label for="validationDefault01" class="form-label">Nombre(s)</label>
          <input type="text" class="form-control" id="validationDefault01" value="" required>
        </div>
        <div class="mb-3">
          <label for="validationDefault02" class="form-label">Apedillo Paterno</label>
          <input type="text" class="form-control" id="validationDefault02" value="" required>
        </div>
        <div class="mb-3">
            <label for="validationDefault03" class="form-label">Apedillo Materno</label>
            <input type="text" class="form-control" id="validationDefault03" value="" required>
          </div>
          <div class="mb-3">
          <label for="validationDefault03" class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="validationDefault03" required>
        </div>
        <div class="mb-3">
          <label for="validationDefault04" class="form-label">Genero</label>
          <input type="text" class="form-control" id="validationDefault04" value="" required>
        </div>
        <div class="mb-3">
            <label for="validationDefault05" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" id="validationDefault05" value="" required>
          </div>
          <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Estoy de acuerdo con los terminos y condiciones
            </label>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
      </form></html>