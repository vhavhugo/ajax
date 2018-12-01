# ajax
Curso de ajax


readyState - assincrono

0 = requisição não inicializada;
1 = conexão estabelecida com o servidor;
2 = requisição recebida;
3 = processando requisição;
4 = requisição finalizada;


    var xmlHttp = null;
    if(window.XMLHttpRequest){
        // if IE7, Mozilla, Safari, and so on: Use native object
        xmlHttp = new XMLHttpRequest();
    }
    if(window.ActiveXObject){
        // ...otherwise, use the ActiveX control for IE5.x and IE6.
        xmlHttp = new ActiveXObject('MSXML2.XMLHTTP.3.0');
    }
