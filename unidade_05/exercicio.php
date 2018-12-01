<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            $.getJSON('_json/produtos.json', function(data){
                $.each(data, function(i,valor){
                    console.log(valor.nomeproduto);
                })
            });
        </script>
    </body>
</html>