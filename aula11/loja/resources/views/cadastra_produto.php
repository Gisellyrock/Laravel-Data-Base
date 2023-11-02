<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
</head>
<body>
    <form action="/products" method="post">

    <div>
        <label>Nome:</label>
        <input type="text" name="name">
    </div>

    <div>
        <label>Descrição:</label>
        <input type="text" name="description">
    </div>

    <div>
        <label>Categoria:</label>
        <input type="text" name="category">
    </div>

    <div>
        <label>Preço:</label>
        <input type="number" step=".01" name="price">
    </div>
    <button>Cadastrar</button>
</form>

</body>
</html>
