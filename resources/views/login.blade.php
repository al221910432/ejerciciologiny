<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    </head>


<div class="conteiner">
  <div class="row">
    <div class="col-md-6 mx-auto">
     
      <form method="POST">
    <div class="row">
      <div class="col-12 col-md-10 col-sm-8">
        <h1 >LOGIN</h1>
        <img src="https://cdn.pixabay.com/photo/2017/02/07/01/59/cloud-2044797_960_720.png"  
        style="width: 200px; height: 200px; border: 2px solid rgb(255, 255, 255)" style="text-align: end">
      </div>
      <div class="col-12 col-md-10 col-sm-8">
        <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
      </div>
      <div class="col-12 col-md-10 col-sm-8">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="col-12 col-md-10 col-sm-8">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
      </div>
      <div class="col-12 col-md-10 col-sm-8">
        <button type="submit" class="btn btn-primary mb-3">Iniciar sesion</button>
  </div> 
    </div>
        @csrf
            
            
    
        
            
              
            
              
            
            