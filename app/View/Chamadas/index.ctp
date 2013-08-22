<div id="cadastro">
	
	<a href="/sites/chamadaOnline/Chamadas/ver_presenca">Verifica Presença</a>
	
	<div class="input select required"><label for="AoficinaSexo">Selecione sua Escola:</label>
		<select id="escola">
			<option value="">Escolha uma escola</option>
		
		</select>
	</div>

	<div class="input select required" id="oficinalbl" style="display:none;"><label for="AoficinaSexo">Selecione a Oficina</label>
		<select id="oficina" >
			<option value="">Escolha uma escola</option>		
		</select>
	</div>
	
	<div class="input button">
		<input type="button" value="Gerar Chamada" id="btn-chamada" />
		<input type="button" value="Enviar Chamada" id="btn-env-chamada" />
	</div>
	
	<div id="ListaChamada">
		<table>
			<thead>
		<tr>
<th>ID_ALUNO</th>
<th>Nome</th>
<th>Presença</th>
<th>Data Total</th>
</tr>
</thead>
<tbody id="tabelaLista">
	
</tbody>
	</table>	
	
	</div>
	
	
	
</div>
