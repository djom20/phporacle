<div id="crearEventos" class="well" style="display:none;">
	<button id="cerrar_event" class="close">&times;</button>
	<form action="">
		<div id="uploads" style="position:absolute;margin-left:68%;margin-top:-41px;">
			<a id="fileUpdate" href="fileUpdate"><img src="theme/img/paper-clip.png"></a>
			<input type="file" name="uploadfiles" id="uploadfiles" style="display:none;">
		</div>
		<h3>Crear evento</h3>
		<input class="span6" type="text" name="asunto" id="asunto" placeholder="Asunto">
		<input class="span6" type="text" name="incidente" id="incidente" placeholder="Incidente">
		<select name="estados" id="estados" style="margin-top:1%;">
			<option value="pendiente">Pendiente</option>
			<option value="completado">Completado</option>
			<option value="cerrado">Cerrado</option>
		</select>
		<button class="btn disabled"><i class="icon-time"></i> 09:07pm</button>
		<button class="btn disabled"><i class="icon-calendar"></i> 24/08/2013</button>
		<button type="button" class="btn"><i class="icon-print"></i> Imprimir</button>
		<button type="button" class="btn"><i class="icon-envelope"></i> Email</button>
		<button type="submit" class="btn btn-success"><i class="icon-ok-sign icon-white"></i> Crear Evento</button>
	</form>
	<div id="sectionFiles" style="display:none;">File: <span id="textfile"></span></div>
</div>