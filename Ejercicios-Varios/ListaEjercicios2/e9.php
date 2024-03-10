<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 Ejercicio 9</title>
    <script>
        var numeros = [];

        function Add(){
            var num = parseInt(document.getElementById("num").value);
            if (num >= 0){
                numeros.push(num);
            }else{
                var xhr = new XMLHttpRequest();
                xhr.onload = function(){
                    alert("Media : "+this.responseText);
                    document.getElementById("num").value = 0;
                }
                xhr.open("POST","e9_post.php", false);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send("numeros="+JSON.stringify(numeros));
            }
        }
    </script>
</head>
<body>
    <h1>Media aritmética</h1>
     Número <input type="number" id="num"/>
    <input type="button" onclick="Add()" value="Púlsame"/>
</body>
</html>