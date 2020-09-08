<?

function mycar_rest_func( WP_REST_Request $request ){
    global $query;
    global $card_template;

    $list           = $request->get_param('list');
    $year_from      = $request->get_param('year_from');
    $year_to        = $request->get_param('year_to');
    $price_from     = $request->get_param('price_from');
    $price_to       = $request->get_param('price_to');
    $mileage_from   = $request->get_param('mileage_from');
    $mileage_to     = $request->get_param('mileage_to');
    $body_type      = $request->get_param('body_type');
    $gearbox        = $request->get_param('gearbox');
    $drive          = $request->get_param('drive');
    $fuel           = $request->get_param('fuel');
    $color          = $request->get_param('color');
    $sort           = $request->get_param('sort');

    $meta_params = array();

    if($year_from) {
        $meta_params[] = 
                [
                    'key'       => 'year',
                    'value'     => $year_from,
                    'compare'   => '>='
                ];
        
    };
    if($year_to) {
        $meta_params[] = 
                [
                    'key'       => 'year',
                    'value'     => $year_to,
                    'compare'   => '<='
                ];
        
    };
    if($price_from) {
        $meta_params[] = 
                [
                    'key'       => 'price',
                    'value'     => $price_from,
                    'compare'   => '>='
                ];
        
    };
    if($price_to) {
        $meta_params[] = 
                [
                    'key'       => 'price',
                    'value'     => $price_to,
                    'compare'   => '<='
                ];
        
    };
    if($mileage_from) {
        $meta_params[] = 
                [
                    'key'       => 'mileage',
                    'value'     => $mileage_from,
                    'compare'   => '>='
                ];
        
    };
    if($mileage_to) {
        $meta_params[] = 
                [
                    'key'       => 'mileage',
                    'value'     => $mileage_to,
                    'compare'   => '<='
                ];
        
    };
    if($body_type) {
        $meta_params[] = 
                [
                    'key'   =>  'body_type',
                    'value' =>  $body_type 
                ];
        
    };
    if($gearbox) {
        $meta_params[] = 
                [
                    'key'   =>  'gearbox',
                    'value' =>  $gearbox 
                ];
        
    };
    if($drive) {
        $meta_params[] = 
                [
                    'key'   =>  'drive',
                    'value' =>  $drive 
                ];
        
    };
    if($color) {
        $meta_params[] = 
                [
                    'key'   => 'color',
                    'value' => $color 
                ];
        
    };
    if($fuel) {
        $meta_params[] = 
                [
                    'key'   =>  'fuel',
                    'value' =>  $fuel 
                ];
        
    };

    $cat = $request->get_param('model') ? $request->get_param('model') : $request->get_param('mark');
    
    $args = array(
        'cat'               => $cat,
        'posts_per_page'    => 9,
        'paged'             => $list,
        'meta_query'        => $meta_params
    );

    if($sort == 'price_down') {

        $args['orderby']    = 'meta_value_num';
        $args['meta_key']   = 'price';
        $args['order']      = 'DESC';

    } elseif($sort == 'price_up') {

        $args['orderby']    = 'meta_value_num';
        $args['meta_key']   = 'price';
        $args['order']      = 'ASC';

    } elseif($sort == 'year_down') {

        $args['orderby']    = 'meta_value_num';
        $args['meta_key']   = 'year';
        $args['order']      = 'DESC';

    } elseif($sort == 'year_up') {

        $args['orderby']    = 'meta_value_num';
        $args['meta_key']   = 'year';
        $args['order']      = 'ASC';

    };

    $query  = new WP_Query ( $args );
    
    $response = Array(
        'cards' => '',
        'params' => array(
            'pages' => $query->max_num_pages,
            'page' => $query->query['paged']
        )
    );

    if($query->have_posts()){
        while ( $query->have_posts() ){
            $query->the_post();

            set_query_var( 'params', [
                'post' => $post,
            ] );

            get_template_part('./components/card/card'); 
            wp_reset_query();
            
            $response['cards'] .= "<div class='col-12 col-md-6 col-lg-4'>$card_template</div>";

        }
    }else{
        $response['cards'] = "<h2>Ничего не найдена, попробуйте изменить критерии поиска</h2>";
    }
    $response['query'] = $query;
    return $response;
    exit();

}

add_action( 'rest_api_init', function(){

	register_rest_route( 'mycar/v1', '/posts/', [
		'methods'  => 'GET',
        'callback' => 'mycar_rest_func',
        'args'     => array(
            'list' => array(
                'type'    => 'integer',
                'default' => 1 
            ),
            'mark' => array(
                'type'    => 'integer', 
                'default' => 32,
            ),
            'model' => array(
                'type'    => 'integer',
            ),
            'year_from' => array(
                'type'    => 'integer', 
            ),
            'year_to' => array(
                'type'    => 'integer', 
            ),
            'price_from' => array(
                'type'    => 'integer', 
            ),
            'price_to' => array(
                'type'    => 'integer', 
            ),
            'mileage_from' => array(
                'type'    => 'integer', 
            ),
            'mileage_to' => array(
                'type'    => 'integer', 
            ),
            'body_type' => array(
                'type'    => 'string', 
            ),
            'gearbox' => array(
                'type'    => 'string', 
            ),
            'drive' => array(
                'type'    => 'string', 
            ),
            'fuel' => array(
                'type'    => 'string', 
            ),
            'color' => array(
                'type'    => 'string', 
            ),
            'sort' => array(
                'type'    => 'string', 
            ),
        ),
	] );

} );