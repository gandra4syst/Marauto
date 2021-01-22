<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Encontre o veículo que deseja</h2>
    <form action="#" method="post" id="f_busca" name="f_busca">
        <div class="div_busca">
            <label for="">Selecione a marca</label>
            <select name="marca" id="id_marcas">
                <option selected disabled value="">Selecione</option>
                <option>VW</option>
                <option>Renault</option>
                <option>Opel</option>
                <option>Mercedes</option>
            </select>
        </div>
        <div class="div_busca">
            <label for="modelo">Selecione o modelo</label>
            <select name="modelo" id="id_modelos">
                <option selected disabled value="">Selecione</option>
                <option>Golf</option>
                <option>Passat</option>
                <option>Polo</option>
                <option>Tuareg</option>
            </select>
        </div>

        <div class="div_busca">
            <input type="submit" value="Buscar" name="f_submit">
        </div>
    </form>
</body>

</html>