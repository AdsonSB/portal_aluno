<?php
// Cabeçalho compartilhado entre as páginas (TODOs 02, 07 e 19).
require_once __DIR__ . '/funcoes.php';
$tituloPagina = $tituloPagina ?? 'Portal do Aluno';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= escaparHtml($tituloPagina) ?> | Portal do Aluno</title>
    <style>
        :root {
            font-family: Arial, Helvetica, sans-serif;
            color: #1c2842;
            background-color: #f5f7fb;
            line-height: 1.5;
        }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; display: flex; flex-direction: column; }
        a { color: #2459c1; }
        .barra-superior { background: #162b50; color: #fff; }
        .barra-conteudo { max-width: 920px; padding: 18px 24px; margin: auto; display: flex; align-items: center; justify-content: space-between; gap: 16px; flex-wrap: wrap; }
        .marca { font-size: 1.2rem; font-weight: 700; letter-spacing: .2px; color: #fff; text-decoration: none; }
        .menu { display: flex; align-items: center; flex-wrap: wrap; gap: 14px; }
        .menu a { color: #e8efff; text-decoration: none; font-weight: 600; font-size: .94rem; }
        .menu a:hover, .menu a:focus-visible { text-decoration: underline; }
        main { width: 100%; max-width: 920px; margin: 34px auto; padding: 0 24px; flex: 1; }
        .cartao { padding: 32px; background: #fff; border: 1px solid #e0e6f1; border-radius: 16px; box-shadow: 0 8px 28px rgba(25, 45, 75, .06); }
        .etiqueta { color: #2459c1; font-size: .85rem; font-weight: 700; text-transform: uppercase; letter-spacing: .08em; }
        h1 { font-size: clamp(1.7rem, 4vw, 2.35rem); margin: 8px 0 14px; line-height: 1.2; }
        h2 { font-size: 1.2rem; margin-top: 0; }
        p { color: #4b5c72; }
        .acoes { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 24px; }
        .botao { display: inline-block; border: 1px solid #295dca; border-radius: 9px; padding: 11px 18px; background: #295dca; color: white; font: inherit; font-weight: 700; text-align: center; text-decoration: none; cursor: pointer; }
        .botao:hover, .botao:focus-visible { background: #1d4da9; }
        .botao-secundario { color: #2459c1; background: #fff; }
        .botao-secundario:hover, .botao-secundario:focus-visible { background: #eff4ff; }
        .grupo { display: flex; flex-direction: column; gap: 7px; margin: 18px 0; }
        label { font-weight: 700; font-size: .95rem; }
        input { width: 100%; padding: 12px 14px; border: 1px solid #aebbd0; border-radius: 9px; font: inherit; background: white; color: #1c2842; }
        input:focus { outline: 2px solid #719bf3; outline-offset: 1px; border-color: #2459c1; }
        .alerta { border-radius: 9px; border: 1px solid #f2b5b5; background: #fff2f2; color: #8b1c1c; padding: 14px 16px; margin: 20px 0; }
        .sucesso { border-color: #98d3b5; background: #eefaf3; color: #14623e; }
        .dados { display: grid; gap: 12px; margin: 25px 0; }
        .dados div { padding: 14px 16px; background: #f5f7fb; border-radius: 9px; overflow-wrap: anywhere; }
        .dados dt { font-size: .82rem; color: #53647b; font-weight: 700; margin-bottom: 4px; }
        .dados dd { margin: 0; font-size: 1.06rem; }
        .observacao { color: #65748a; font-size: .89rem; }
        footer { text-align: center; padding: 20px 24px; color: #65748a; border-top: 1px solid #e0e6f1; font-size: .9rem; }
        @media (max-width: 550px) { .barra-conteudo { padding: 16px; } main { padding: 0 16px; margin: 20px auto; } .cartao { padding: 23px; } }
    </style>
</head>
<body>
    <header class="barra-superior">
        <div class="barra-conteudo">
            <a class="marca" href="index.php">Portal do Aluno</a>
            <nav class="menu" aria-label="Menu principal">
                <a href="index.php">Início</a>
                <a href="cadastro.php">Cadastro</a>
                <a href="resultado.php">Consultar dados</a>
                <a href="logout.php">Encerrar sessão</a>
            </nav>
        </div>
    </header>
    <main>
