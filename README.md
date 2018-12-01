# ajax
Curso de ajax

    var xmlHttp = null;
    if(window.XMLHttpRequest){
        // if IE7, Mozilla, Safari, and so on: Use native object
        xmlHttp = new XMLHttpRequest();
    }
    if(window.ActiveXObject){
        // ...otherwise, use the ActiveX control for IE5.x and IE6.
        xmlHttp = new ActiveXObject('MSXML2.XMLHTTP.3.0');
    }
