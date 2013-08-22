$(document).ready(function() {
			
	$.getJSON("/sites/chamadaOnline/Chamadas/Selct_escola", function(result) {
		$.each(result, function(i, field) {
			$("#escola").append('<option value=' + field.value + '>' + field.name + '</option>');
		});
	});

	$('#escola').change(function() {

		$.ajax({
			type : 'GET',
			data : {
				'idEscola' : $('#escola').val()
			},
			dataType : "json",
			url : '/sites/chamadaOnline/Chamadas/Selct_oficina',
			success : function(retorno) {
				$.each(retorno, function(i, field) {
					$('#oficinalbl').fadeIn();
					$("#oficina").append('<option value=' + field.value + '>' + field.name + '</option>');
				});
			},
			fail : function(retorno) {
				console.log(retorno);
			},
			done : function(retorno) {
				console.log(retorno);
			}
		});
		$('#oficina option').remove();

	});

	var now = new Date();
	var datetime = now.getFullYear() + '/' + (now.getMonth() + 1) + '/' + (now.getDay() + 11);
	datetime += ' ' + now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();

	$('#btn-chamada').click(function() {
		$.ajax({
			type : 'GET',
			data : {
				'idEscola' : $('#escola').val(),
				'idOficina' : $('#oficina').val()
			},
			dataType : "json",
			url : '/sites/chamadaOnline/Chamadas/selct_aluno',
			success : function(retorno) {
				$.each(retorno, function(i, field) {
					//$('#oficinalbl').fadeIn();
					$("#tabelaLista").append('<tr class="id' + field.value + '"><td class="id' + field.value + '" >' + field.value + '</td><td class="nome' + field.value + '">' + field.name + '</td><td><input type="checkbox" value="P"  class="present' + field.value + '"/></td><td class="data' + field.value + '"">' + datetime + '</td></tr>');
				});
			},
			fail : function(retorno) {
				console.log(retorno);
			},
			error : function(retorno) {
				console.log(retorno);
			},
			done : function(retorno) {
				console.log(retorno);
			}
		});
	});

	$('#btn-env-chamada').click(function() {

		$('#tabelaLista tr').each(function(i) {
			var id = this.className.match(/id(\d+)/)[1];
			var nome = $('.nome' + id).text();
			var present = $('.present' + id + ':checked').val();
			var data = $('.data' + id).text();
			var escola = $('#escola').val();
			var oficina = $('#oficina').val();
			if (present == null) {
				var present = 'F';
			} else {
				var present = 'P';
			}

			$.ajax({
				type : 'GET',
				data : {
					'id' : id,
					'nome' : nome,
					'present' : present,
					'data' : data,
					'escola' : escola,
					'oficina' : oficina
				},
				dataType : "json",
				url : '/sites/chamadaOnline/Chamadas/insert_aluno_chamada',
				success : function(retorno) {
					console.log(retorno);
				},
				fail : function(retorno) {
					console.log(retorno);
				},
				error : function(retorno) {
					console.log(retorno);
				},
				done : function(retorno) {
					console.log(retorno);
				}
			});

			console.log(id, nome, present, data, escola, oficina);

		});

	});

	$('#btn-verificar-chamada').click(function() {
			$.ajax({
				type : 'GET',
				data : {
					'idEscola' : $('#escola').val(),
					'idOficina' : $('#oficina').val()
				},
				dataType : "json",
				url : '/sites/chamadaOnline/Chamadas/select_chamada',
				success : function(retorno) {
					$.each(retorno, function(i, field) {
						//$('#oficinalbl').fadeIn();
						$("#tabelaLista").append('<tr class="id' + field.value + '"><td class="id' + field.value + '" >' + field.value + '</td><td class="nome' + field.value + '">' + field.name + '</td><td class="presen' + field.value + '">' + field.presen + '</td><td><input type="checkbox" value="1"  class="fc' + field.value + '"/></td></tr>');
					});
						$("[class^=fc]").click(function(Event) {
		
			var id = this.className.match(/fc(\d+)/)[1];
			var rc = $('.fc' + id).val();
		
			$.ajax({
					type : 'GET',
					data : {'id' : id,'rc' : rc},
					dataType : "json",
					url : '/sites/chamadaOnline/Chamadas/update_aluno_chamada',
					success : function(retorno) {
						alert('Alteração feita com sucesso');
					},
					fail : function(retorno) {
						alert(retorno);
					},
					error : function(retorno) {
						alert(retorno);
					},
					done : function(retorno) {
						alert(retorno);
					}
			});		
		});
				},
				fail : function(retorno) {
					console.log(retorno);
				},
				error : function(retorno) {
					console.log(retorno);
				},
				done : function(retorno) {
					console.log(retorno);
				}
			});
		});

			
}); 