<?php
include "./executa_arquivos/guardiao.php";
include "topo.html"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baldochi</title>
    <link rel="stylesheet" href="style_page.css">
    <link rel="stylesheet" href="topo.css">
</head>
<body>
    <div class="back">
        <div class="ignora_menu"></div>
        <div class="page_center">
            <div class="topo_pagina">
                <div>
                    <h1>Adicionar Produto</h1>
                </div>
            </div>
            <div class="corpo_pagina">
                <form action="./executa_arquivos/adiciona_produto.php" method="post" enctype="multipart/form-data">
                    <div class="central">
                        <div class="textos">
                            <div class="adiciona_item">
                                <input type="text" name="titulo" required>
                                <label for="titulo">Título</label>
                            </div>
                            <div class="line">
                                <div class="adiciona_item">
                                    <select name="etiqueta" required>
                                        <option value="" selected disabled>Etiqueta</option>

                                        <?php 

                                        include "conexao.php";

                                        $query = "SELECT * FROM filtros order by nome_filtro";
                                        $executa = mysqli_query($db, $query);
                                        
                                        while($busca = mysqli_fetch_assoc($executa)){

                                            $id = $busca['idfiltro'];
                                            $nome = $busca['nome_filtro']

                                        ?>

                                            <option value="<?= $id ?>"><?= $nome ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="adiciona_item">
                                <input type="text" name="valor" id="valorInput" required>
                                    <label for="valor">Valor (R$)</label>
                                </div>
                            </div>
                            <div class="adiciona_item">
                                <textarea name="descricao" rows="3" required></textarea>
                                <label for="descricao">Descrição</label>
                            </div>
                        </div>
                        <div class="imagens">
                        <div class="adiciona_item">
                            <input type="file" name="fotos[]" id="fotos" multiple required>
                        </div>
                        <div id="preview">

                        </div>
                        </div>
                    </div>
                    <div class="adiciona_item">
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const valorInput = document.getElementById('valorInput');

            valorInput.addEventListener('input', function (e) {
            let valor = e.target.value.replace(/\D/g, ''); // Remova todos os caracteres não numéricos

            // Divida a parte inteira e a parte dos centavos
            const parteInteira = valor.slice(0, -2);
            const parteCentavos = valor.slice(-2);

            // Adicione pontos de milhar
            const parteInteiraFormatada = parteInteira.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            // Atualize o campo com o valor formatado
            e.target.value = 'R$ ' + parteInteiraFormatada + ',' + parteCentavos;
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            const descricaoInput = document.querySelector('.adiciona_item textarea');
            const descricaoLabel = document.querySelector('.adiciona_item label[for="descricao"]');

            descricaoInput.addEventListener('focus', function () {
                descricaoLabel.style.top = '-5px';
            });

            descricaoInput.addEventListener('blur', function () {
                if (this.value === '') {
                    descricaoLabel.style.top = '15px';
                }
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            const fotosInput = document.getElementById('fotos');
            const preview = document.getElementById('preview');

            fotosInput.addEventListener('change', function (e) {
                preview.innerHTML = ''; // Limpa a área de visualização

                for (const file of e.target.files) {
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(file);
                    img.style.maxWidth = '100px';
                    img.style.maxHeight = '100px';
                    preview.appendChild(img);
                }
            });
        });
    </script>


</body>
</html>