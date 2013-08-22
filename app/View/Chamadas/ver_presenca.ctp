<div id="cadastro">
	
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
		<input type="button" value="Verificar Presença" id="btn-verificar-chamada" />
		<input type="button" value="Salvar Chamada" id="btn-salvar-chamada" />
	</div>
	
	<div id="ListaChamada">
		<table>
			<thead>
		<tr>
<th>ID_ALUNO</th>
<th>Nome</th>
<th>Total Presença</th>
<th>Retirar da Chamada</th>
</tr>
</thead>
<tbody id="tabelaLista">
	
</tbody>
	</table>	
	
	</div>
	
	
	
</div>
