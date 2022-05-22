<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>

        body{
            display: grid;
            grid-template-columns: repeat(1fr, 1fr, 1fr);
            background-color: lightgrey;
        }


        nav{
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #645244;
            display: flex;
            flex-direction: row;
        }

        h1 { color: #f05d23;
            font-family: "Great Vibes" cursive; 
            font-size: 80px;
            line-height: 160px;
            font-weight: normal;
            margin-bottom: 0px;
            margin-top: 40px;
            text-align: center;
            text-shadow: 0 1px 1px #fff; }

        ul{
            position: absolute;
            margin-top: 2em;
            margin-left: 2.5em;
            list-style: none;
            text-decoration: none;
            flex-direction: row;
        }

        input{
            display: inline-block;
            background-color: lightslategray;
            border-radius: 10px;
            border: 4px double whitesmoke;
            color: whitesmoke;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            padding: 10px;
            width: 200px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        input:hover{
            display: inline-block;
            background-color: lightgrey;
            border-radius: 10px;
            border: 4px double lightslategray;
            color: lightslategray;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            padding: 10px;
            width: 200px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        div{
            width: 100%;
            margin: 2em;
        }

        div img{
            width: 100%;
            margin: 2em;
        }

        section{
            padding: 2em;
        }

        p{
            margin: 0;
        }

    </style>
</head>
    <body>
        <h1 id="bienvenue">Bienvenue cher client</h1>
        <nav>
            <ul>
                <li><img src="../images/Logo.svg" id="logo" alt="logo"></li>
                <li><a href="../controler/controlerCompte.php"><input type="submit" value="Mon compte"></a></li>
                <li><a href="../vue/vueConnexion.php"><input type="submit" value="Se déconnecter"></a></li>
            </ul>
        </nav>
        <div><img src ="../images/amethyst.png" alt="img"/></div>
    </body>
</html>