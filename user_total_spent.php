// Short Code: [user_total_spent], return example: "NT$9999" or "Please login to see the total"
add_shortcode('user_total_spent', 'get_user_total_spent');
function get_user_total_spent() {
	$user_id = get_current_user_id();
    if( $user_id != 0 ) {
        $customer = new WC_Customer( $user_id );
        $total_spent = $customer->get_total_spent();
		    return wc_price( $total_spent )
    }
    else{
        return "Please login to see the total";
    }
}
