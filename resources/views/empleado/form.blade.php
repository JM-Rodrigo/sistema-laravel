<label for="Nombre">Escribe el nombre:</label>
<input type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}">
<br>
<label for="ApellidoPaterno">Escribe el apellido paterno:</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
<br>
<label for="ApellidoMaterno">Escribe el apellido materno:</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMatern:''}}">
<br>
<label for="Correo">Escribe el correo electronico:</label>
<input type="email" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
<br>
<label for="Foto">Elija la foto:</label>
@if(isset($empleado->Foto))
    <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto" width="100px">
@endif
<input type="file" name="Foto" id="Foto" value=""">
<br>
<input type="submit" value="Guardar" >
<a href="{{url('empleado/')}}">Regresar</a>
