<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrazione impiegato</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
      input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
</style>
</head>
<body>
<div class="main-block">
    <h1>Riepilogo impiegato</h1>
    <form action="/person/add" method="POST">
        <hr>
        <label>nome: </label><input type="text" name="nome" id="nome" value="{{$obj->getNome()}}" required/>
        <label>cognome: </label><input type="text" name="cognome" id="cognome" value="{{$obj->getCognome()}}" required/>
        <label>eta: </label><input type="text" name="eta" id="eta" required value="{{$obj->getEta()}}"/>
        <label>altezzaInMetri: </label><input type="text" name="altezzaInMetri" id="altezzaInMetri" value="{{$obj->getAltezzaInMetri()}}" required/>
        <label>profilo: </label><input type="text" name="profilo" id="profilo" value="{{$obj->getProfilo()}}" required/>
    </form>
</div>
</body>
</html>
