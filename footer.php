<?php global $configG ?>
<footer class="disInlineB">
  <div class="container">
    <div class="row">
      <div class="col1 colinfo col-md-4">
        <?php echo wpautop( $configG['text_info_col1'] ); ?>
      </div>
      <div class="col2 colinfo col-md-4">
        <?php echo wpautop( $configG['text_info_col2'] ); ?>
        <?php echo $configG['cod_mapacol2_footer']; ?>
        <?php echo do_shortcode( '[redes_sociales]' ) ?>
      </div>
      <div class="col3 colinfo col-md-4">
        <?php echo wpautop( $configG['text_info_col3'] ); ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

<?php include 'includes/estilos-programados.php'; ?>

</body>
</html>
