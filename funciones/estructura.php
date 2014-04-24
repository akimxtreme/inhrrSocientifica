<?php

class HTML{
	// [Atributos]
	private $titulo;
	// [Métodos]
	// DOCTYPE e Inicio de <html>
	public function docTypeHTML(){
	echo '<!DOCTYPE html>';
	echo '<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->';
	echo '<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->';
	}
	// <head> <title> e inicio del <body>
	public function head($tituloDoc) {
		$this->titulo=$tituloDoc;
	echo "<head>";
	echo '<meta charset="utf-8" />';
  	echo '<meta name="viewport" content="width=device-width" />';
 	echo '<title>'. $tituloDoc .'</title>';
	echo '<link rel="stylesheet" href="css/foundation.css" />';
	echo '<script src="js/vendor/custom.modernizr.js"></script>';
	// Deshabilitar el uso del clic derecho por completo 
	echo '<script type="text/javascript">
	document.oncontextmenu = function(){return false}
	</script>';
	echo '</head>';
	echo '<body>';
	}
	// fin del </html>
	public function HTML_fin(){
	echo "<script>
  	document.write('<script src=' +
  	('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  	'.js><\/script>')
  	</script>";
  
  	echo '
	  <script src="js/foundation.min.js"></script>
	  <!--
	  
	  <script src="js/foundation/foundation.js"></script>
	  
	  <script src="js/foundation/foundation.interchange.js"></script>
	  
	  <script src="js/foundation/foundation.dropdown.js"></script>
	  
	  <script src="js/foundation/foundation.placeholder.js"></script>
	  
	  <script src="js/foundation/foundation.forms.js"></script>
	  
	  <script src="js/foundation/foundation.alerts.js"></script>
	  
	  <script src="js/foundation/foundation.magellan.js"></script>
	  
	  <script src="js/foundation/foundation.reveal.js"></script>
	  
	  <script src="js/foundation/foundation.tooltips.js"></script>
	  
	  <script src="js/foundation/foundation.clearing.js"></script>
	  
	  <script src="js/foundation/foundation.cookie.js"></script>
	  
	  <script src="js/foundation/foundation.joyride.js"></script>
	  
	  <script src="js/foundation/foundation.orbit.js"></script>
	  
	  <script src="js/foundation/foundation.section.js"></script>
	  
	  <script src="js/foundation/foundation.topbar.js"></script>
	  
	  -->';
  
	echo '<script>
    $(document).foundation();
  		</script>';
	echo '</body>';
	echo '</html>';

	}
}




// Creando la Clase "Formulario"
class Formulario{
	// [Atributos]
	private $action, $claSS, $enctype, $id, $method, $name, $onSubmit, $style, $title, $titulo;
	private $disabled, $onBlur, $placeholder, $readonly;
	// [Métodos]
	// Inicializando los Atributos para el <form>
	public function Form_i($action, $class, $enctype, $id, $method, $name, $onSubmit, $style, $title){
		// Inicializando
		$this->action=$action;
		$this->claSS=$class;
		$this->enctype=$enctype;
		$this->id=$id;
		$this->method=$method;
		$this->name=$name;
		$this->onSubmit=$onSubmit;
		$this->style=$style;
		$this->title=$title;
		// Validando Campos Vacios
		echo '<form ';
		$this->AttribValida("action",$action);
		$this->AttribValida("class",$class);
		$this->AttribValida("enctype",$enctype);
		$this->AttribValida("id",$id);
		$this->AttribValida("method",$method);
		$this->AttribValida("name",$name);
		$this->AttribValida("onSubmit",$onSubmit);
		$this->AttribValida("style",$style);
		$this->AttribValida("title",$title);
		echo '>';
		}
	// Fin de la Etiqueta </form>
	public function Form_f(){
		echo "</fieldset>";
		echo "</form>";
		
		}
	// Validando Atributos Vacios
	public function AttribValida($atributo,$valor){
		if($valor!=""){
			$atributo = $atributo . '=' . '"' . $valor . '" ';
			echo $atributo;
			}else {
				$atributo = " "; 
				echo $atributo;
				}
	}
	// Titulo del Formulario (<fieldset><legend>)
	public function tituloForm($titulo){
		$this->titulo=$titulo;
		echo "<fieldset>";
		echo "<legend>$titulo</legend>";
	}
	
	// Titulo de un Campo (<label><label>)
	public function tituloCampos($titulo,$ayuda){
		$this->titulo=$titulo;
		echo "<label data-tooltip class='tip-top' title=''>$titulo</label>";
	}
	
	// Campos <textarea>
	public function textArea($class, $id,$name, $style, $title, $disabled, $onBlur, $placeholder, $readonly){
		$this->claSS=$class;
		$this->id=$id;
		$this->name=$name;
		$this->style=$style;
		$this->title=$title;
		$this->disabled=$disabled;
		$this->onBlur=$onBlur;
		$this->placeholder=$placeholder;
		$this->readonly=$readonly;
		
		echo '<textarea ';
		$this->AttribValida("class",$class);
		$this->AttribValida("id",$id);
		$this->AttribValida("name",$name);
		$this->AttribValida("style",$style);
		$this->AttribValida("title",$title);
		$this->AttribValida("disabled",$disabled);
		$this->AttribValida("onBlur",$onBlur);
		$this->AttribValida("placeholder",$placeholder);
		$this->AttribValida("readonly",$readonly);
		echo '>';
		echo '</textarea>';
		}
}
	
	

?>