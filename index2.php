<?php
require_once("funciones/estructura.php");
$html= new HTML();
$html->docTypeHTML();
$html->head("Formulario de Registro de Inscripción de Miembros");
// The Twelve Kingdoms
?>



	<div class="row">
		<div class="large-12 columns">
        	<hr />
			<h3>Sociedad Científica del Instituto Nacional de Higiene “Rafael Rangel”</h3>
			<h3 class="subheader">Formulario de Registro de Inscripción de Miembros</h3>
			<hr />
		</div>
        <div class="large-12 columns">
        <?php
		$formulario = new Formulario();
		$formulario->Form_i("index.php","formulario","","miembro","POST","miembro","","","Registro de Inscripción de Miembros");
		$formulario->tituloForm('Registro de Inscripción de Miembros');
		$formulario->tituloCampos('Descripción','Ingresa la Descripción');
		$formulario->textArea("formulario","descripcion","descripcion","","","","","Ingrese la Descripción","");	
		$formulario->Form_f();
		
		
		?>
<!--
<form>
  <fieldset>
    <legend>Registro de Inscripción de Miembros</legend>

    <div class="row">
      <div class="large-12 columns">
        <label>Input Label</label>
        <input type="text" placeholder="large-12.columns">
      </div>
    </div>

    <div class="row">
      <div class="large-4 columns">
        <label>Input Label</label>
        <input type="text" placeholder="large-4.columns">
      </div>
      <div class="large-4 columns">
        <label>Input Label</label>
        <input type="text" placeholder="large-4.columns">
      </div>
      <div class="large-4 columns">
        <div class="row collapse">
          <label>Input Label</label>
          <div class="small-9 columns">
            <input type="text" placeholder="small-9.columns">
          </div>
          <div class="small-3 columns">
            <span class="postfix">.com</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Textarea Label</label>
        <textarea placeholder="small-12.columns"></textarea>
      </div>
    </div>

  </fieldset>
</form>

-->
        </div>
	</div>


<?php
$html->HTML_fin();
?>