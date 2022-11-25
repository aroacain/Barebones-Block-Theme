<?php
register_block_pattern(
    'pwmw/sample',
    array(
        'title'         => __( 'Sample', 'pwmw' ),
        'description'   => _x( 'Sample block pattern', 'Sample block pattern', 'pwmw' ),
        'content'       => '<!-- wp:paragraph {"align":"center","textColor":"gray"} -->
                            <p class="has-text-align-center has-gray-color has-text-color">Hello, world!</p>
                            <!-- /wp:paragraph -->',
        'categories'    => array( 'layouts' ),
        'keywords'      => array( 'pwmw', 'sample' ),
        'viewportWidth' => 1200,
    )
);

?>