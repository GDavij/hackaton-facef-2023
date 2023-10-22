<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            background: #eee;
        }
        .center {
               width: 100vw;
               height: 100vh;
               display: grid;
               place-content: center;
        }

        .text-green {
            color: #999;
        }

        .button-green {
            background: #23ad3e;
            box-shadow: 2px 2px 10px 2px #0005;
            border: 0;
            padding: 1rem 2rem;
            font-size: 1.5rem;
            color: #fff;
            font-weight: 700;
            border-radius: 12px;
        }
    </style>

    <script>
        const Close = _ => window.close();
    </script>
</head>
<body>
    <div class="center">
        <h1 class="text-green">Lixo Registrado</h1>
        <button class="button-green" onclick="Close()">Okay, Fechar</button>
    </div>
</body>
</html>