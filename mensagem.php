<?php
include "connect.php";

$mensagem = "Nova visita no site";
if (salvaLog($mensagem)) {
echo "O LOG foi salvo com sucesso!";
} else {
echo "Não foi possível salvar o LOG!";
}