<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <title>Laravel</title>

</head>
<body>

<form action="{{url('cliente/'.$cliente->id)}}" method="post">
    @csrf
    @method('PUT')
        {{$cliente->id}}
        <input   type="text" name="nombre" required id="nombre" placeholder="nombre" minlength="2" maxlength="50" value="{{old('nombre',$cliente->nombre)}}">
        @error('nombre')
            <div  >{{$message}}</div>
        @enderror
        <input    type="text" name="apellidos" id="apellidos" placeholder="apellidos" minlength="2" maxlength="100" required  value="{{old('apellidos',$cliente->apellidos) }}">
        @error('apellidos')
            <div  >{{$message}}</div>
        @enderror
        <input    type="date" name="fechanacimiento" id="fechanacimiento" placeholder="fechanacimiento" value="{{old('fechanacimiento', $cliente->fechanacimiento)}}">
        @error('fechanacimiento')
            <div  >{{$message}}</div>
        @enderror
        <input    type="correo" name="correo" id="correo" placeholder="correo"  value="{{'correo',$cliente->correo }}" >
        @error('correo')
            <div  >{{$message}}</div>
        @enderror
        <input    type="number" name="telefono" id="telefono" placeholder="telefono" value="{{old('telefono', $cliente->telefono) }}">
        @error('telefono')
            <div  >{{$message}}</div>
        @enderror
        <input   type="number" maxlength="100" name="direccion" id="direccion" placeholder="direccion"  value="{{old('direccion', $cliente->direccion) }}">
        @error('direccion')
            <div  >{{$message}}</div>
        @enderror
         <input   type="number" maxlength="50" minlength="5" name="claveacceso" id="claveacceso" placeholder="claveacceso"required  value="{{old('claveacceso', $cliente->claveacceso) }}">
        @error('claveacceso')
            <div  >{{$message}}</div>
        @enderror
         <input   type="text" maxlength="30" name="descuento" id="estadocivil" placeholder="estadocivil"   value="{{old('estadocivil', $cliente->estadocivil) }}">
        @error('estadocivil')
            <div  >{{$message}}</div>
        @enderror
         <input   type="decimal" maxlength="8" name="sueldoanual" id="sueldoanual" placeholder="sueldoanual"  value="{{old('sueldoanual', $cliente->sueldoanual) }}">
        @error('sueldoanual')
            <div  >{{$message}}</div>
        @enderror
        <input type="submit"  class="btn btn-primary" value="editar">
          <a href="{{route('cliente.index')}}" class="btn btn-info">volver</a>
</form>
</body>
</html>

