<?php global $configG; ?>
<form method="get" id="cse-search-box" action="<?php echo home_url( '/' ); ?>">
  <input type="text" class="form-control mr-sm-2" name="s" id="s" placeholder="Buscar" value="<?php the_search_query(); ?>" />
  <button type="submit" name="submit" id="searchsubmit" class="btn btn-primary  my-2 my-sm-0">Buscar</button>
</form>
