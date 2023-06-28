@extends('layouts.app')
@section('content')

      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>TARJETA DE IDENTIFICACION</h2>
                </div>
              </div>
            </div>
          </div>


<div class="form-elements-wrapper">
<div class="row">
<img src="assets/images/logo/cintillo_top.png" width="30" height="50">
<div class="col-lg-4">
<div class="card-style mb-30">
<img src="assets/images/cards/login.jpg" class="img-fluid perfil-cedula rounded-start" style="border: 10px solid transparent;border-radius: 40px 40px;" alt="...">
<h6 style="text-align: center;">Código de Acceso</h6>
<input type="text" name="cedula" class="form-control cedula-assist" placeholder="Cedula" required><br>
</div>
</div>

           
<div class="col-lg-8">
<div class="card-style mb-30">
<form class="row g-3">
<div class="col-md-6">
<label for="validationDefault01" class="form-label">NOMBRE</label>
<input type="text" class="form-control nombre" id="validationDefault01" disabled required>
</div>
<div class="col-md-6">
<label for="validationDefault02" class="form-label">APELLIDO</label>
<input type="text" class="form-control apellido" id="validationDefault02" disabled required>
</div>
<div class="col-md-4">
<label for="validationDefault01" class="form-label">CEDULA</label>
<input type="text" class="form-control cedula" id="validationDefault01" value=0 disabled required>
</div>
<div class="col-md-2">
<label for="validationDefault02" class="form-label">PISO</label>
<input type="text" class="form-control piso" id="validationDefault02" disabled required>
</div>
<div class="col-md-6">
<label for="validationDefault02" class="form-label">ESTATUS</label>
<input type="text" class="form-control estatus" id="estatus" disabled required>
</div> 
<div class="col-md-12">
<label for="validationDefault01" class="form-label">UBICACIÓN FÍSICA</label>
<input type="text" class="form-control ubicacion" id="validationDefault01" disabled required>
</div>
<div class="col-md-6">
<label for="validationDefault02" class="form-label">CARGO</label>
<input type="text" class="form-control cargo" id="validationDefault02" disabled required>
</div>
<div class="col-md-6">
<label for="validationDefault02" class="form-label">CONTADOR DEL DIA</label>
<input type="text" class="form-control conteo" id="validationDefault02" disabled required>
</div>
</div>
</form>
</div>
</div>


</div>
</div>
</div>
</section>
    
@endsection
