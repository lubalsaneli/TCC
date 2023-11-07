const felpudos_container = document.querySelector(".felpudos-container");
const total_felpudos = document.querySelector("#total_felpudos");

const listarAnimais = async () => {
    const dados = await fetch("./list.php");
    const resposta = await dados.text();

    felpudos_container.innerHTML = resposta;
}

const contagemHeader = async () => {
    const dadosQtde = await fetch("./qtde.php");
    const respostaQtde = await dadosQtde.text();

    respostaQtde === '1' 
        ? total_felpudos.innerHTML = `${respostaQtde} FELPUDO DISPONÍVEL`
        : total_felpudos.innerHTML = `${respostaQtde} FELPUDOS DISPONÍVEIS`
    
}

listarAnimais();
contagemHeader();
