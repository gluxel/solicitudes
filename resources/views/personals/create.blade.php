@extends('layouts.app')
@section('content')
<!-- ========== section start ========== -->
<section class="section">
<div class="container-fluid">
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Crear Registro</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 icon-card">
            <form action="{{ route('registros.store') }}" method="POST">
                <label for="">Codigo Unico Alcaldia<input type="text"></label>
                <label for="">Cedula<input type="number"></label>
                <label for="">Denunciante<input type="text"></label>
                <label for="">Telefono<input type="number"></label>
                <label for="">Estado <select class="estado" name="estado" id="">
                        <option value="" selected disabled hidden>Seleccionar</option>
                    </select>
                </label>
                <label for="">Municipio<select class="muni" name="muni" id="">
                    </select>
                </label>
                <label for="">Parroquia<select class="parroq" name="parroq" id="">
                    </select>
                </label>
                <label for="">Descripcion<input type="text"></label>
                <label for="">Categoria<select class="categ" name="categ" id="">
                        <option value="" selected disabled hidden>Seleccionar</option>
                        <option value=1 >SOCIAL</option>
                        <option value=2 >SERVICIO</option>
                    </select>
                </label>
                <label for="">Subcategoria<select class="subcateg" name="subcateg" id="">
                    </select>
                </label>
                <label for="">ExtCategoria<select class="extcateg" name="extcateg" id="">
                    </select>
                </label>
                <label for="">Estatus<select class="estatus" name="estatus" id="">
                    </select>
                </label>
                <label for="">Responsable<input type="text"></label>
                <label for="">Fecha Generado<input type="date"></label>
                <label for="">Fecha Ultimo Estatus<input type="date"></label>
                <label for="">Verificacion<select name="" id="">
                        <option value='' selected disabled hidden></option>
                        <option value=1>SI</option>
                        <option value=0>NO</option>
                    </select>
                </label>
                <button type="submit" class="btn btn-outline-info">Enviar</button>  
            </form>
        </div>
    </div>






</div>
</section>




<!-- ========== section end ========== -->
@endsection

@section('js')
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
</script>

<script>
$('.estado').change(function(){
    $('.muni').empty();
    var list_fieldHTML = '<option value="" selected disabled hidden>Seleccionar</option>'; //New input field html
    $('.muni').append(list_fieldHTML); //Add field html
    $('.muni').prop('disabled', true);
$.ajax({ url: "/getmuni",data: {"_token": "{{ csrf_token() }}", id:$('.estado').val()},formData: false ,type:'POST'}).done(function(data) {
        if (data) {
            data.forEach(myFunction);
            function myFunction(item) {
               // alert(item.id);
                var list_fieldHTML = '<option value="'+item.id+'">'+item.nombre+' </option> '; //New input field html 
	        $('.muni').append(list_fieldHTML); //Add field html
            }
            $('.muni').prop('disabled', false);
        }else;
    });
});
</script>

<script>
$('.muni').change(function(){
    $('.parroq').empty();
    var list_fieldHTML = '<option value="" selected disabled hidden>Seleccionar</option>'; //New input field html
    $('.parroq').append(list_fieldHTML); //Add field html
    $('.parroq').prop('disabled', true);
$.ajax({ url: "/getparroq",data: {"_token": "{{ csrf_token() }}", id:$('.muni').val()},formData: false ,type:'POST'}).done(function(data) {
        if (data) {
            data.forEach(myFunction);
            function myFunction(item) {
               // alert(item.id);
                var list_fieldHTML = '<option value="'+item.id+'">'+item.nombre+' </option> '; //New input field html 
	        $('.parroq').append(list_fieldHTML); //Add field html
            }
            $('.parroq').prop('disabled', false);
        }else;
    });
});
</script>

<script>
$('.categ').change(function(){
    $('.subcateg').empty();
    var list_fieldHTML = '<option value="" selected disabled hidden>Seleccionar</option>'; //New input field html
    $('.subcateg').append(list_fieldHTML); //Add field html
    $('.subcateg').prop('disabled', true);
$.ajax({ url: "/getsubcateg",data: {"_token": "{{ csrf_token() }}", id:$('.categ').val()},formData: false ,type:'POST'}).done(function(data) {
        if (data) {
            data.forEach(myFunction);
            function myFunction(item) {
               // alert(item.id);
                var list_fieldHTML = '<option value="'+item.id+'">'+item.nombre+' </option> '; //New input field html 
	        $('.subcateg').append(list_fieldHTML); //Add field html
            }
            $('.subcateg').prop('disabled', false);
        }else;
    });
});
</script>

<script>
$('.subcateg').change(function(){
    $('.extcateg').empty();
    var list_fieldHTML = '<option value="" selected disabled hidden>Seleccionar</option>'; //New input field html
    $('.extcateg').append(list_fieldHTML); //Add field html
    $('.extcateg').prop('disabled', true);
$.ajax({ url: "/getextcateg",data: {"_token": "{{ csrf_token() }}", id:$('.subcateg').val()},formData: false ,type:'POST'}).done(function(data) {
        if (data) {
            data.forEach(myFunction);
            function myFunction(item) {
               // alert(item.id);
                var list_fieldHTML = '<option value="'+item.id+'">'+item.nombre+' </option> '; //New input field html 
	        $('.extcateg').append(list_fieldHTML); //Add field html
            }
            $('.extcateg').prop('disabled', false);
        }else;
    });
});
</script>

<script>

    var list_fieldHTML = '<option value="" selected disabled hidden>Seleccionar</option>'; //New input field html
    $('.estatus').append(list_fieldHTML); //Add field html
    $('.estatus').prop('disabled', true);
$.ajax({ url: "/getestatus",formData: false ,type:'GET'}).done(function(data) {
        if (data) {
            data.forEach(myFunction);
            function myFunction(item) {
               // alert(item.id);
                var list_fieldHTML = '<option value="'+item.id+'">'+item.nombre+' </option> '; //New input field html 
	        $('.estatus').append(list_fieldHTML); //Add field html
            }
            $('.estatus').prop('disabled', false);
        }else;
    });
    $.ajax({ url: "/getestado",formData: false ,type:'GET'}).done(function(data) {
        if (data) {
            data.forEach(myFunction);
            function myFunction(item) {
               // alert(item.id);
                var list_fieldHTML = '<option value="'+item.id+'">'+item.nombre+' </option> '; //New input field html 
	        $('.estado').append(list_fieldHTML); //Add field html
            }
            $('.estado').prop('disabled', false);
        }else;
    });

</script>
@endsection

