/************************************
* Desenvolvido por Matheus Carvalho *
*************************************/
function CriaRequest() {
    try{
        request = new XMLHttpRequest();        
    }catch (IEAtual){

        try{
            request = new ActiveXObject("Msxml2.XMLHTTP");       
        }catch(IEAntigo){

            try{
                request = new ActiveXObject("Microsoft.XMLHTTP");          
            }catch(falha){
                request = false;
            }
        }
    }
    if (!request) 
        alert("Seu Navegador não suporta Ajax!");
    else
        return request;
}
function getDados() {
    // Declaração de Variáveis
    var nome   = document.getElementById("cidr").value;
    var reverso   = document.getElementById("dominio").value;
    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();
    // Exibi a imagem de progresso
    // result.innerHTML = '<img src="Progresso1.gif"/>';
    // Monta a requisição
    xmlreq.open("GET", "consulta-ptr.php" + "?cidr=" + nome + "&dominio=" + reverso);
    // Atribui uma função para ser executada sempre que houver uma mudança de estado
    xmlreq.onreadystatechange = function(){
        // Verifica se foi concluído com sucesso e a conexão fechada
        if (xmlreq.readyState == 4) {
            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}