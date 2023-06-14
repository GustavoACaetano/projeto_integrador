// Importando a função de autenticação de campos
import * as base from "./script_base.js";

document.querySelector("#alterarSenha").addEventListener("click", () => {
    window.location.assign("alterarSenha.html");
})


// Pegando os dados do usuário logado
var emailLogado = sessionStorage.getItem("logado");
const dadosUsuario = JSON.parse(localStorage.getItem(emailLogado));  

// Pegando os campos na tela
const campoNome = document.querySelector("#floatingInputGroup1");
const campoEmail = document.querySelector("#floatingInputGroup2");
const campoDataNasc = document.querySelector("#idade");
const radios = document.querySelectorAll(".radio");


// Pegando os labels de nome e email
const labelNome = document.querySelector("#label_nome");
const labelEmail = document.querySelector("#label_email");
const labelData = document.querySelector("#labelData");
const labelJogador = document.querySelector(".label_joga");
const labelsJogabilidade = document.querySelectorAll(".jogabilidades");


// Pegando as labels de erro
const noNome = document.querySelector("#noNome");
const noEmail = document.querySelector("#noEmail")
const noEmailPadrao = document.querySelector("#noEmailPadrao");
const noData = document.querySelector("#noData");
const noJogabilidade = document.querySelector("#noJogabilidade");

// Função para preencher automaticamente os campos com os dados do usuário
function preencherAuto(){
    campoNome.value = dadosUsuario.nome;
    campoEmail.value = emailLogado;
    campoDataNasc.value = dadosUsuario.dataNasc;

    let radioMarcada = dadosUsuario.jogabilidade;

    // Mudando a classe dos labels para fins estéticos
    labelNome.classList.add("focado");

    labelEmail.classList.add("focado");

    // Selecionando qual é o nível do jogador
    radios.forEach(radio => {
        if(radio.children[0].id == radioMarcada){
            radio.children[0].checked = true;
        }
    })
}

// chamando a função
preencherAuto();



function verificaTudo(){
    let verificaNome = base.verificaCampoVazio(campoNome, labelNome, noNome, false);
    let verificaEmail = base.verificaCampoVazio(campoEmail, labelEmail, noEmail, noEmailPadrao);
    if(verificaEmail){
        verificaEmail = base.verificaEmailForaPadrao(campoEmail, noEmail, noEmailPadrao)
    }
    let verDataNasc = base.verificaCampoVazio(campoDataNasc, labelData, noData, false); 

    let verjog = base.verificaJogabilidade(labelJogador, labelsJogabilidade, noJogabilidade);

    let lista = [verificaNome, verificaEmail, verDataNasc, verjog];
    return lista.every(element => element);
}

// Pegando o botão de editar
const btnEditar = document.querySelector("#alterar");

btnEditar.addEventListener("click", autenticar);

function autenticar(){
    if(verificaTudo()){
        let dataNasc = campoDataNasc.value;
        if(base.verficiaSeEleNasceuNaDataCorreta(dataNasc)){
            base.dataErrada(campoDataNasc, labelData);
            return;
        }
        Swal.fire({
            icon: 'question',
            text: 'Deseja editar suas informações?',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Sim',
            cancelButtonColor: '#d33',
            showCancelButton: true,
            cancelButtonText: 'Não'
        }).then((result) =>{
            if(result.isConfirmed){
                // Alterando os dados no localStorage
                dadosUsuario.nome = campoNome.value;
                dadosUsuario.dataNasc = dataNasc;
                dadosUsuario.jogabilidade = base.jogabilidadeMarcada();
                dadosUsuario.email = campoEmail.value;
                // Colocando tudo no dicionário/mapa de dadosUsuario

                let stringJson = JSON.stringify(dadosUsuario);

                localStorage.removeItem(emailLogado);
                // Removendo o item antigo
                emailLogado = campoEmail.value;

                sessionStorage.setItem("logado", emailLogado);
                // Setando o novo item no sessionStorage

                localStorage.setItem(campoEmail.value, stringJson);
                // Setando o novo item no localStorage
                Swal.fire({
                    icon: 'success',
                    title: 'Perfil atualizado'
                }).then(() => {
                    // Enviando para a página de login
                    window.location.assign("perfil.html")
                })
                // Enviando o usuário de volta para a tela de perfil
            }
        })
    }
}

let voltar = document.querySelector(".cssbuttons-io-button");
if(voltar){
    // Adicionando o ouvidor do evento para se inscrever
    voltar.addEventListener("click", () => {
    window.location.assign("perfil.html")
})
}
