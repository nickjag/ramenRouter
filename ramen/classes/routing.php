<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { exit;}

class routing {
	
	private	$url;
	public	$path;
	public	$restriction;
	public	$controller;
	public	$view;
	
	public function __construct() {
		
		/** Set path */
		
		$this->url = $_SERVER['REQUEST_URI'];
		$this->set_url_path();
		
		/** Reset get requests from .htaccess redirection */
		
		$this->reset_get_requests();
		
	}
	private function set_url_path() {
		
		/** Clean path */
		
		$this->path = $this->clean_url(strtolower(preg_replace('/\\?.*/', '', $this->url)));
		
		/** Remove directory from path */
		
		$this->path = str_replace(EXCLUDE_PATH_IN_ROUTING, '', $this->path);
		
	}
	private function reset_get_requests() {
		
		$get_str = explode('?', $this->url);
		
		if (isset($get_str[1]) && $get_str[1]!='') { 
			
			$get_vars = explode('&',$get_str[1]);
			
			foreach ($get_vars as $var_str) {
				
				$var_parts = explode('=',$var_str);
				
				if (isset($var_parts[1])) {
					
					$_GET[$var_parts[0]]=urldecode($var_parts[1]);
				}
			}
		}
	}
	private function clean_url($url) {
		
		$url = strtolower($url);
		$url = preg_replace("/[^a-z0-9_\/\s-]/", "", $url);
		$url = preg_replace("/[\s-]+/", " ", $url);
		$url = preg_replace("/[\s_]/", "-", $url);
		
		return $url;
	}
	
}

?>