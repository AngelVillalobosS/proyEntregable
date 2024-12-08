
<!DOCTYPE html>
<html lang="en">
@extends('principal')
@section('contenido')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProyEntregable01/resources/css/vapor/bootstrap.css">
    <link rel="stylesheet" href="/ProyEntregable01/resources/css/vapor/bootstrap.min.css">
    <link rel="stylesheet" href="/ProyEntregable01/resources/css/disenio.css">
    <link rel="shortcut icon" href="">
    <title>ProyE02</title>
</head>
<body>
    <div class='divisor'>
    <h1>Encuesta | Solicitud de agregado</h1>
        <form action="{{route('enviarEncuesta')}}" method = 'POST'>
            {{csrf_field()}}
            <table class="table table-hover">
                <!-- id_encuesta -->
                 <tr class="tr_row">
                    <td><h5># Encuesta</h5></td>
                    <td>
                        <input type="text" class="form-control" name='id_survey' value='{{$nextId}}' readonly='readonly'>
                    </td>
                 </tr>
                <!-- Nombres -->
                <tr> <!-- 1st TextBox -->
                    <td width = 100> <h5>Nombre(s): </h5>
                    @if($errors->first('name_per'))
                        <p class="text-warning">{{$errors->first('name_per')}}</p>
                    @endif
                    </td>
                    <td width = 200> <input type="text" class = ' form-control' id = 'inputDefault' name = 'name_per' value="{{old('name_per')}}"></td>
                </tr>
                <!-- Apellido Paterno -->
                <tr> <!-- 2nd TextBox -->
                    <td width = 100> <h5>Apellido Paterno: </h5>
                    @if($errors->first('a_pa'))
                        <p class="text-warning">{{$errors->first('a_pa')}}</p>
                    @endif                
                    </td>
                    <td width = 200> <input type="text" class = ' form-control' id = 'inputDefault' name = 'a_pa'></td>
                </tr>
                <!-- Apellido Materno -->
                <tr> <!-- 3rd TextBox -->
                    <td width = 100> <h5>Apellido Materno: </h5>
                    @if($errors->first('a_ma'))
                        <p class="text-warning">{{$errors->first('a_ma')}}</p>
                    @endif
                    </td>
                    <td width = 200> <input type="text" class = ' form-control' id = 'inputDefault' name = 'a_ma'></td>
                </tr>
                <tr>
                    <td><h5>Año:</h5></td>
                    <td><input type="text" class='form-control' id='readOnyInput' name='year' placeholder='2024' readonly=''></td>
                </tr>
                <tr> <!-- 1st RadioButton -->
                    <td><h5>Selecciona tu sexo:</h5></td>
                    <td>
                        <input type="radio" class='form-check-input' name='sexo' value='M'>
                        <label for="optionsRadios1" class='form-check-label'>Masculino</label>
                        <input type="radio" class='form-check-input' name='sexo' value='F'>
                        <label for="optionsRadios1" class='form-check-label'>Femenino</label>
                        <input type="radio" class='form-check-input' name='sexo' value='O' checked>
                        <label for="optionsRadios1" class='form-check-label'>Otro</label>
                    </td>
                </tr>
                <tr> <!-- 2nd RadioButton -->
                    <td><h5>¿Estas contento con la pagina?</h5></td>
                    <td>
                        <input type="radio" class='form-check-input' name='happiness' value='D'>
                        <label for="optionsRadios1" class='form-check-label'>Descontento</label>
                        <input type="radio" class='form-check-input' name='happiness' value='C' checked>
                        <label for="optionsRadios1" class='form-check-label'>Contento</label>
                        <input type="radio" class='form-check-input' name='happiness' value='M'>
                        <label for="optionsRadios1" class='form-check-label'>Muy Contento</label>
                    </td>
                </tr>
                <tr> <!-- 3rd RadioButton -->
                    <td><h5>¿Con cuántas estrellas calificas <br> el contenido de la pagina?</h5></td>
                    <td>
                        <input type="radio" class='form-check-input' name='stars' value='1'>
                        <label for="optionsRadios1" class='form-check-label'>1 </label>
                        <input type="radio" class='form-check-input' name='stars' value='2'>
                        <label for="optionsRadios1" class='form-check-label'>2</label>
                        <input type="radio" class='form-check-input' name='stars' value='3' checked>
                        <label for="optionsRadios1" class='form-check-label'>3</label>
                        <input type="radio" class='form-check-input' name='stars' value='4' >
                        <label for="optionsRadios1" class='form-check-label'>4</label>
                        <input type="radio" class='form-check-input' name='stars' value='5' >
                        <label for="optionsRadios1" class='form-check-label'>5</label>
                    </td>
                </tr>
                <!-- Solicitude Type -->
                <tr> <!-- 1st CheckBox -->
                <td> <h5>¿De qué estamos hablando?</h5>
                @if($errors->first('requests'))
                        <p class="text-warning">{{$errors->first('requests')}}</p>
                @endif
                </td>
                    <td><input type="checkbox" class="form-check-input" name = 'requests', value = 'R'>
                    <label class="form-check-label" for="requests">Solicitar la baja de un contenido</label> 
                    <br>
                    <input type="checkbox" name="requests" value = 'C' id="" class="form-check-input">
                    <label class="form-check-label" for="requests">Solicitar la adición de un contenido</label>
                    <br>
                    <input type="checkbox" class="form-check-input" name="requests" value = 'A' id="">
                    <label class="form-check-label" for="requests">Ofrecer una critica sobre el contenido</label>
                    </select>
                    </td>
                </tr>
                <!-- Type of Content -->
                <tr> <!-- 1st ComboBox -->
                    <td><h5>Especifica el contenido</h5></td>
                    <td>
                        <select  class="form-select" name = 'id_content'>
                            @foreach($contents as $conts)
                            <option value = '{{$conts->id_content}}'>{{$conts->content}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <!-- Categories -->
                <tr> <!-- 2nd ComboBox -->
                    <th scope='row'> <h5>Selecciona una Categoria</h5>
                    </td>
                    <td>
                    <select  class="form-select" name = 'id_categorie'>
                            @foreach($categories as $cats)
                            <option value = '{{$cats->id_categorie}}'>{{$cats->categorie}}</option>
                            @endforeach
                    </select>
                    </th>
                </tr>     
              <!-- Genre -->
                <tr> <!-- 2nd CheckBox -->
                <td> <h5>Seleccione el genero</h5>
                @if($errors->first('genre'))
                    <p class="text-warning">{{$errors->first('genre')}}</p>
                @endif
                </td>
                    <td><input type="checkbox" class="form-check-input" name = 'genre', value = 'R'>
                    <label class="form-check-label" for="genre">Romance</label>
                    <input type="checkbox" name="genre" value = 'C' id="" class="form-check-input">
                    <label class="form-check-label" for="genre">Comedia</label>
                    <input type="checkbox" class="form-check-input" name="genre" value = 'A' id="">
                    <label class="form-check-label" for="genre">Accion</label>
                    </select>
                    </td>
                </tr> <!-- 3rd CheckBox -->
                <td> <h5>Seleccione el estudio emisor</h5>
                    @if($errors->first('studio'))
                        <p class="text-warning">{{$errors->first('studio')}}</p>
                    @endif
                </td>
                    <td><input type="checkbox" class="form-check-input" name = 'studio', value = 'G'>
                    <label class="form-check-label" for="gibli">Gibli</label>                    
                    <input type="checkbox" name="studio" value = 'M' id="" class="form-check-input">
                    <label class="form-check-label" for="mappa">Mappa</label>
                    <br>
                    <input type="checkbox" class="form-check-input" name="studio" value = 'S' id="">
                    <label class="form-check-label" for="sony">Sony</label>
                    <input type="checkbox" class="form-check-input" name="studio" value = 'P' id="">
                    <label class="form-check-label" for="paramount">Paramount</label>
                    <br>
                    <input type="checkbox" class="form-check-input" name="studio" value = 'N' id="">
                    <label class="form-check-label" for="netflix">Netflix</label>
                    <input type="checkbox" class="form-check-input" name="studio" value = 'A' id="">
                    <label class="form-check-label" for="amazon_prime">Amazon Prime</label>
                    </select>
                    </td>
                </tr>
                <tr> <!-- 1st TextArea -->
                    <td><h5>Sugerencias: </h5></td>
                    <td><textarea name="suggestions" id="exampleTextarea" class='form-control'></textarea></td>
                </tr>
                <tr> <!-- 2nd TextArea -->
                    <td><h5>¿Algún comentarios para <br> los desarrolladores?: </h5></td>
                    <td><textarea name="dev_comments" id="exampleTextarea" class='form-control'></textarea></td>
                </tr>
                <tr> <!-- SubmitButton -->
                    <td colspan = 2>
                        <center>
                            <input class="btn btn-outline-secondary" type="submit" value="Enviar">
                        </center>
                    </td>
                </tr
            </table>
        </form>
    </div>
    
</body>
</html>