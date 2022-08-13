window.onload = function(){
var carrinho = [];
var produto = {
				'codigo': 0,
				'qtd': 0
			}			
	// function Add(id, qtd){
	// 	// var id = this.getAttribute('id');
	// 	// var qtd = this.value;
	// 	// produto.codigo = id;
	// 	// produto.qtd = qtd;
	// 	// carrinho = produto;
	// 	localStorage.setItem(id, qtd);
	// }
	function click(){
		var qtd = this.value;
		var id = this.getAttribute('id');


		localStorage.setItem(id, qtd);
		// if(localStorage.hasOwnProperty(id)){ //verificando:  já existe??
		// 	Atualizar(id,qtd); //atualiza tela do usuário
		// }else{ //se não existir:
		// 	//console.log("Não tem");
		// 	localStorage.setItem(id, qtd);			
		// }		
		Carrinho();
	}
	function Atualizar(id, qtd){

			//atualiza o valor na sessão:
			localStorage.setItem(id, qtd);		
			// atualizar carrinho que o usuario vê com ajax:
			var url = 'ajax.php?acao&exibir='+id;
			//fazendo a chamada assincrona (sem redirecionar/atualizar):
			fetch(url).then(resposta =>{
				return resposta.json(); //conversao do json
			})
			.then (function (json){ //o que será feito com o json				
				var linha = '<tr class="p'+json.cd+'"><td>';
				linha+= '<img src="'+json.foto+'" style="height: 50px;"></td>';
				linha+= '<td>'+qtd+'</td>';
				linha+= '<td>R$ '+json.valor+'</td>';
				linha+= '<td>R$ '+(qtd*json.valor)+'</td></tr>';
				document.querySelector('.p'+id).innerHTML=linha;
			});

	
	}
	var item = document.getElementsByClassName('produto');

	for(var i=0; i<item.length; i++){
		item[i].addEventListener('change',click, false);
	}



	Carrinho();
	//funcao que mostra os produtos no carrinho
	function Carrinho(){
		document.querySelector('#carrinho').innerHTML = '';
		for ( var i = 0; i < localStorage.length; i++ ) {	
			
			//atualiza o valor na sessão:
			var id = localStorage.key(i);	
			var qtd = localStorage.getItem(id);
			// atualizar carrinho que o usuario vê com ajax:
			var url = 'ajax.php?acao&exibir='+id;			
			//fazendo a chamada assincrona (sem redirecionar/atualizar):
			fetch(url).then(resposta =>{
				return resposta.json(); //conversao do json
			})
			.then (function (json){ //o que será feito com o json
				var linha ='';
				linha+= '<tr class="p'+json.cd+'"><td>';
				linha+= '<img src="'+json.foto+'" style="height: 50px;"></td>';
				linha+= '<td>'+qtd+'</td>';
				linha+= '<td>R$ '+json.valor+'</td>';
				linha+= '<td>R$ '+(qtd*json.valor)+'</td></tr>';
				//console.log(linha);
				document.querySelector('#carrinho').innerHTML+=linha;
			});
		}
		
	}
}
