<h1>{{$modo}} empleado</h1>
<div class="form-group">
    <label for="Nombre">Escribe el nombre:</label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}">
</div>
<div class="form-group">
    <label for="ApellidoPaterno">Escribe el apellido paterno:</label>
    <input  class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
</div>
<div class="form-group">
    <label for="ApellidoMaterno">Escribe el apellido materno:</label>
    <input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMatern:''}}">
</div>
<div class="form-group">
    <label for="Correo">Escribe el correo electronico:</label>
    <input class="form-control" type="email" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
</div>
<div class="form-group">
    <label for="Foto">Elija la foto:</label>
    @if(isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto" width="100px">
    @endif
    <input class="form-control" type="file" name="Foto" id="Foto" value=""">
</div>
<input class="btn btn-success mt-3" type="submit" value="{{$modo}} datos" >
<a class="btn btn-primary mt-3" href="{{url('empleado/')}}">Regresar</a>
