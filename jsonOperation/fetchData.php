<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <button type="button" onclick="getInfo()"> Click here for json info</button>

    </body>


    <script>
        function getInfo(){
            var info;
            fetch("product.php")
            .then(function(data){
                return data.json()
            }).then(function(informationAll){
                info = informationAll
                putItOnBody(info)
            }).catch((error)=> alert("There is an arrow"))
        
        }

        function putItOnBody(info){
            for(var i = 0; i<info.length; i++){
                var p = document.createElement("p");
                p.innerText = info[i]

                document.body.appendChild(p)
            }

        }
    </script>
</html>