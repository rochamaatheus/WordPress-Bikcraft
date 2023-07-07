<?php
  $contato = get_page_by_title('contato');
  $produtos = get_page_by_title('produtos');
?>

<div class="orcamento_dados grid-8">
  <h3>Dados</h3>
  <span><?php the_field('telefone', $contato)?></span>
  <span><?php the_field('email', $contato)?></span>
  <h3>Monte a sua Bikcraft</h3>
  <p>Escolha as especificações:</p>
  <?php the_field('itens_orcamento', $produtos);?>
</div>