<?php

$images = rwmb_meta( 'product_images', array( 'limit' => 1 ) );
$image = reset( $images );

$currency = rwmb_meta( 'currency', ['object_type' => 'setting'], 'General Settings' );
$symbol = isset( $currency['symbol'] ) ? $currency['symbol'] : '';
$position = isset( $currency['position_of_the_symbol'] ) ? $currency['position_of_the_symbol'] : '';
?>

<div class="w-full lg:w-1/2 px-4 mb-8">
  <div class="relative rounded shadow">
    <span class="absolute py-1 px-3 m-2 text-sm text-white font-semibold bg-green-600 rounded"><?php rwmb_the_value( 'condition' ); ?></span>
    <img src="<?php echo $image['full_url']; ?>" alt="">
    <div class="p-3">
      <h3 class="font-heading"><a class="text-green-600" href="<?php the_permalink(); ?>"><?php rwmb_the_value( 'brand' ); ?> | <?php rwmb_the_value( 'model' ); ?></a></h3>
      <span class="text-2xl"><?php if ($position == 'before'): echo $symbol; endif;?><?php echo rwmb_meta( 'price' ); ?> <?php if ($position == 'after'): echo $symbol; endif;?></span>
    </div>
  </div>
</div>