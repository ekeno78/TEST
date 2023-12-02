<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Recherche </title>
</head>
<body>


<input type="text" onkeydown="searchKeyword()" placeholder="Entrez un mot-clé.." id="myKeyword">
<div id="response"></div>

<script>

const searchKeyword = async () => {
    document.querySelector("#response").innerHTML = ""
    let keyword = document.querySelector("#myKeyword").value;
    const req = await fetch(`recherche.php?keyword=${keyword}`)
    const json = await req.json()
    if(json.length > 0){
        json.forEach((post) => {
            document.querySelector("#response").innerHTML += post.NomPoisson + '<br>'
        }) 
    }
}


</script>
    
</body>
</html>
