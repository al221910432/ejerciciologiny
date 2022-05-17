<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel CRUD</title>
        <script src="{{asset('/js/jquery-3.6.0.min.js')}}"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            input[type=text],
            input[type=email],
            input[type=date],
            input[type=file],
            input[type=password],
            input[type=submit],
            button,
            .alert-danger,
            .form-floating {
                width: 50%;
            }

            .ir-arriba {
                display: none;
                padding: 5px;
                background: #024959;
                font-size: 25px;
                color: #fff;
                cursor: pointer;
                position: fixed;
                bottom: 20px;
                right: 20px;
                border-radius: 10px 10px 0px 0px;
            }

            .alert-danger {
                border-radius: 3px;
                border: 1px solid #C00;
                margin: 10px;
            }
        </style>
    </head>



            
            <div class="mb-3">
                <label class="form-label">Nombre(s):</label>
                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" placeholder="Hector">
                <div class="form-text">
                    @if($errors->first('nombre'))<i class="alert-danger">{{$errors->first('nombre')}}</i>@endif
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido paterno:</label>
                <input type="text" class="form-control" name="app" value="{{old('app')}}" placeholder="Garcia">
                <div class="form-text">
                    @if($errors->first('app'))<i class="alert-danger">{{$errors->first('app')}}</i>@endif
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido materno:</label>
                <input type="text" class="form-control" name="apm" value="{{old('apm')}}" placeholder="Nuez">
                <div class="form-text">
                    @if($errors->first('apm'))<i class="alert-danger">{{$errors->first('apm')}}</i>@endif
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="fn" value="{{old('fn')}}">
                <div class="form-text">
                    @if($errors->first('fn'))<i class="alert-danger">{{$errors->first('fn')}}</i>@endif
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Género</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gen" value="Masculino" checked>
                    <label class="form-cheked-label">Masculino</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gen" value="Femenino">
                    <label class="form-cheked-label">Femenino</label>
                </div>
            </div>
            
        
            <div class="mb-3">
                <label class="form-label">Correo eléctronico:</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="example@alumno.com">
                <div class="form-text">
                    @if($errors->first('email'))<i class="alert-danger">{{$errors->first('email')}}</i>@endif
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="pass">
                <div class="form-text">
                    @if($errors->first('password'))<i class="alert-danger">{{$errors->first('password')}}</i>@endif
                </div>
            </div>
        </form>
        </div>
    </body>

</html>