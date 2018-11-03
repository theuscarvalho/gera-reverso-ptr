<!DOCTYPE html>
<html>
<!--**********************************************
*      Desenvolvido por Matheus Carvalho         *
*          www.matheuscarvalho.com.br            *
**************************************************-->
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
		<!--<script src="ajax.js"></script>-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
        <script type="text/javascript" src="ajax.js"></script>
        <div id="Container">
		    <center>
            <h1>GERA PTR</h1>
            <hr/>
            <div id="Pesquisar">
                Infome o bloco ex: 127.0.0.1/24: 
                <input type="text" name="cidr" id="cidr"/>
				<br>
				Infome o Dominio ex: matheuscarvalho.com: 
                <input type="text" name="dominio" id="dominio"/> 
				<br>
                <input type="button" name="btnPesquisar" value="Gerar" onclick="getDados();"/>
				</center>
            </div>
            <hr/>
            <div id="Resultado"></div>
            <hr>
 
        </div>
    </body>
</html>