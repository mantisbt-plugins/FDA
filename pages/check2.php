<?php
require_api( 'authentication_api.php' );
$t_password= gpc_get_string('password');
if( is_blank( $t_password ) ) {
	error_parameters( 'FDA-Password' );
	trigger_error( ERROR_EMPTY_FIELD, ERROR );
}
$t_user_id = auth_get_current_user_id();
$t_password = auth_prepare_password( $t_password );

if( !auth_does_password_match( $t_user_id, $t_password ) ) { 
	trigger_error( ERROR_USER_CURRENT_PASSWORD_MISMATCH, ERROR );
} 
