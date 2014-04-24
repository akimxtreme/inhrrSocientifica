<html>
    <head>
        <title>Planilla de Preinscripcion</title>        
    </head>
    <body>
        <form>
            <fieldset>
                <legend>Planilla de Preinscripcion a la Sociedad Cientifica</legend>
                <label>Nombre(s)</label><br>
                <input type="text" name="nombre"/><br>
                <label>Apellido(s)</label><br>
                <input type="text" name="apellido"/><br>
                <label>Cedula / Pasaporte</label><br>
                <input type="text" name="idIdentificacion"/><br>
                <label>Fecha de Nacimiento</label><br>
                <input type="text" name="fechaNacimiento"/><br>
                <label>Sexo</label><br>
                <input type="radio" name="sexo" value="Femenino"/><label>Femenino</label><br>
                <input type="radio" name="sexo" value="Masculino"/><label>Masculino</label><br>
                <label>Profesion</label><br>
                <select name="profesion">
                    <option>Seleccione...</option>
                    <option>Abogado</option>
                    <option>Arquitecto</option>
                    <option>Bioanalista</option>
                    <option>Biologo</option>
                    <option>Contador</option>
                    <option>Farmaceutico</option>
                    <option>Ingeniero Quimico</option>
                    <option>Medico</option>
                    <option>Otros</option>
                </select>
                <label>Indique la Profesion</label>
                <input type="text" name="otraProfesion"/><br>
                <label>Anio de Graduacion</label><br>
                <input type="text" name="anioGraduacion"/><br>
                <label>Foto</label><br>
                <input type="file" name="foto"/><br>
                <label>Correo Electronico</label><br>
                <input type="text" name="correo"/><br>
                <label>Telefono (Hogar)</label><br>
                <input type="text" name="tlfHogar"/><br>
                <label>Telefono (Personal)</label><br>
                <input type="text" name="tlfPersonal"/><br>
                <label>Tipo de Personal</label><br>
                <select name="idiomas">
                    <option>Seleccione...</option>
                    <option value="Contratado">Contratado</option>
                    <option value="Fijo">Fijo</option>
                    <option value="Jubilado">Jubilado</option>
                </select><br>
                <label>Lugar donde labora o laboro</label><br>
                <select name="lugar">
                    <option>Seleccione...</option>
                    <option>Gerencia de Registro y Control</option>
                    <option>Gerencia de Docencia e Investigacion</option>
                    <option>Gerencia de Diagnostico y Vigilancia Epidemiologica</option>
                    <option>Gerencia Sectorial de Produccion</option>
                    <option>Area de Informatica</option>
               </select><br>
                <label>Anios de Servicio en la Institucion</label><br>
                <input type="text" name="aniosinhrr"/><br>
                <label>Extension</label><br>
                <input type="text" name="extension"/><br>
                <label>Cursos de Ampliacion y de Post-Grado</label><br>
                <textarea></textarea><br>
                <label>Habilidades y Destrezas</label><br>
                <textarea></textarea><br>
                <label>Conocimiento del Idioma</label><br>
                <select name="idiomas">
                    <option>Seleccione...</option>
                    <option value="Arabe">Arabe</option>
                    <option value="Chino">Chino</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Frances">Frances</option>
                    <option value="Japones">Japones</option>
                    <option value="Ruso">Ruso</option>
                </select><br>
                <label></label><br>
                <fieldset>
                    <legend>Ingles</legend>
                    <label>Escrito</label><br>
                    <input type="radio" name="inglesE"/>
                    <label>Basico</label><br>
                    <input type="radio" name="inglesE"/>
                    <label>Medio</label><br>
                    <input type="radio" name="inglesE"/>
                    <label>Avanzado</label><br>
                    <input type="radio" name="inglesE"/>
                    <label>Nativo</label><br>
                    <br>
                    <label>Hablado</label><br>
                    <input type="radio" name="inglesH"/>
                    <label>Basico</label><br>
                    <input type="radio" name="inglesH"/>
                    <label>Medio</label><br>
                    <input type="radio" name="inglesH"/>
                    <label>Avanzado</label><br>
                    <input type="radio" name="inglesH"/>
                    <label>Nativo</label><br>
                    <br>
                    <label>Leido</label><br>
                    <input type="radio" name="inglesL"/>
                    <label>Basico</label><br>
                    <input type="radio" name="inglesL"/>
                    <label>Medio</label><br>
                    <input type="radio" name="inglesL"/>
                    <label>Avanzado</label><br>
                    <input type="radio" name="inglesL"/>
                    <label>Nativo</label><br>
                </fieldset>
                <label>Desea Participar en Actividades extraordinarias de la Sociedad</label><br>
                <input type="radio" name="participacion" value="si"/>
                <label>Si</label><br>
                <input type="radio" name="participacion" value="no"/>
                <label>No</label><br>
                <fieldset>
                    <legend>Tipos de Actividades Extraordinarias de la Sociedad</legend>
                    <input type="checkbox" name="1"/>
                    <label>Apoyo Administrativo</label><br>
                    <input type="checkbox" name="2"/>
                    <label>Actividades de enlace con los Colegios profesionales o Tecnicos</label><br>
                    <input type="checkbox" name="3"/>
                    <label>Actividades con otras Sociedades</label><br>
                    <input type="checkbox" name="4"/>
                    <label>Organizacion y Asistencia a cursillos de actualizacion</label><br>
                    <input type="checkbox" name="5"/>
                    <label>Organizacion de Eventos Cientificos</label><br>
                    <input type="checkbox" name="6"/>
                    <label>Comision de Publicaciones</label><br>
                    <input type="checkbox" name="7"/>
                    <label>Actividades Docentes</label><br>
                    <input type="checkbox" name="8"/>
                    <label>Actividades de Investigacion</label><br>
                    <input type="checkbox" name="8"/>
                    <label>Otras</label><input type="text" name="otras"/><br>
                   
                </fieldset>
                <input type="submit" name="preinscribirse" value="Preinscribirse"/>
            </fieldset>
        </form>
    </body>
    
</html>
<?php

?>
