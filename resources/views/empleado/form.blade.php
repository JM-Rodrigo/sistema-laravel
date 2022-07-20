<label for="Nombre">Escribe el nombre:</label>
<input type="text" name="Nombre" id="Nombre" value="{{$empleado->Nombre}}">
<br>
<label for="ApellidoPaterno">Escribe el apellido paterno:</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}">
<br>
<label for="ApellidoMaterno">Escribe el apellido materno:</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}">
<br>
<label for="Correo">Escribe el correo electronico:</label>
<input type="email" name="Correo" id="Correo" value="{{$empleado->Correo}}">
<br>
<label for="Foto">Elija la foto:</label>
{{$empleado->Foto}}
<input type="file" name="Foto" id="Foto" value=""">
<br>
<input type="submit" value="Guardar" >