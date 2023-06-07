// Importando a função de autenticação de campos
import * as base from "./script_base.js";

// Pegando todos os botões para se inscrever
const cancel = document.querySelectorAll(".inscricao");

// Pegando o email do usuário logado
const email = sessionStorage.getItem("logado");
// Pegando todos os dados do usuário
const dados = JSON.parse(localStorage.getItem(email));

var meus_eventos = [];

const barra_pesquisa = document.querySelector("#busca");

const lupa = document.querySelector("#lupa");

// Percorrendo todos os botões
cancel.forEach(btn =>{
    // Adicionando um EventListener em cada um
    btn.addEventListener("click", () => {
      cancelarInscricao(btn.id);
    });
  })


  // Caso o usuário não esteja logado
  if(!email){
      Swal.fire({
          // Alert avisando ao usuário fazer login
          title: 'Faça login!',
          icon: 'error',
          text: 'Você precisa estar logado para enviar mensagem',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Login'
      }).then((result) => {
          if(result.isConfirmed){
              // Enviando o usuário para a tela de login
              window.location.assign("index.html");
          }
      })
  }

function meusEventos(){   
  let todosEventos = document.querySelectorAll(".evento");
  todosEventos.forEach(evento => {    
    if(dados.eventos_inscritos.includes(evento.id.slice(3))){
      // Colocando display block em todos os eventos que o usuário está inscrito
      evento.style.display = "block";
      meus_eventos.push(evento);
      document.querySelector("#semevento").style.display = "none";
    }
})}

meusEventos()

function cancelarInscricao(id){
  Swal.fire({
    // Iniciando um alert perguntando se o usuário deseja cancelar a inscrição.
    title: 'Cancelar inscrição?',
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sim',
    cancelButtonText: 'Não'
  }).then((result) => {
    if (result.isConfirmed) {
      // Alert para caso o usuário se inscreveu.
      Swal.fire(
        'Feito!',
        'Sua inscrição foi cancelada.',
        'success'
      ) 
      
      dados.eventos_inscritos = dados.eventos_inscritos.filter((valor) => {
        return valor != id;
        // Retirando da lista o evento que o usuário está desinscrevendo
      });

      let stringJson = JSON.stringify(dados);
      localStorage.setItem(email, stringJson);
      // Setando novamente no localStorage

      document.querySelector(`#div${id}`).style.display = "none";
      meus_eventos.splice(`#div${id}`);
      // Retirando o evento da tela
      if(!dados.eventos_inscritos.length){
        document.querySelector("#semevento").style.display = "block";
        document.querySelector("#pesquisar").classList.add("sembarra");
        document.querySelector("#pesquisar").classList.remove("d-flex");
        // Caso não haja eventos inscritos, irá aparecer a mensagem
      }
    }
  })
}


lupa.addEventListener("click", () =>{
  base.pesquisar(meusEventos, barra_pesquisa)
});

// Adicionando um EventListener para quando for feita a pesquisa
barra_pesquisa.addEventListener("keypress", (event) => {
  let tecla = event.key;
  if(tecla == "Enter"){
      base.pesquisar(meusEventos, barra_pesquisa);
    }
});

barra_pesquisa.addEventListener("search", () =>{
  if(!barra_pesquisa.value){
    base.barraVazia(meusEventos)
  }
})


// function barraVazia(){
//   meus_eventos.forEach(conteudo => {
//     conteudo.style.display = "block";
//   })
//   naoAchou.style.display = "none"
// }
// function pesquisar(){
//   let naoAchou = document.querySelector("#naoAchou");
//   let contAchou = 0;

//   if(!barra_pesquisa.value){
//     barraVazia();
//   } else {
//     // Percorrendo por todos os eventos
//     meus_eventos.forEach(conteudo =>{
//       // Pegando o título do evento
//       let titulo = conteudo.children[0].children[0].children[1].children[0].textContent.toUpperCase();

//       // Verificando se o texto pesquisado é o mesmo que o título
//       if(titulo.includes(barra_pesquisa.value.toUpperCase())){
//         // Mostrando todos os conteúdos que tiverem o texto pesquisado como título
//         conteudo.style.display = "block";
//         contAchou += 1;
//       }else{
//         // Escondendo todos os conteúdos que não tiverem o texto pesquisado como título
//         conteudo.style.display = "none";
//       }

//       if(contAchou > 0){
//         naoAchou.style.display = "none"
//       } else {
//         naoAchou.textContent = `Nenhum resultado para "${barra_pesquisa.value}" encontrado!`
//         naoAchou.style.display = "block"
//       }
//     });
//   }
// }