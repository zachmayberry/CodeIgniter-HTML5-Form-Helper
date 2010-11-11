<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Text Input Field
 */
if ( ! function_exists('form_input'))
{
	function form_input($data = '', $value = '', $placeholder = '', $extra = '')
	{
		$defaults = array('type' => 'text', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value, 'placeholder' => $placeholder);

		return "<input "._parse_form_attributes($data, $defaults).$extra." />";
	}
}

/**
 * Email Input Field
 */
if ( ! function_exists('form_email'))
{
	function form_email($data = '', $value = '', $placeholder = '', $extra = '')
	{
		$defaults = array('type' => 'email', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value, 'placeholder' => $placeholder);

		return "<input "._parse_form_attributes($data, $defaults).$extra." />";
	}
}

/**
 * URL Input Field
 */
if ( ! function_exists('form_url'))
{
	function form_url($data = '', $value = '', $placeholder = '', $extra = '')
	{
		$defaults = array('type' => 'url', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value, 'placeholder' => $placeholder);

		return "<input "._parse_form_attributes($data, $defaults).$extra." />";
	}
}

/**
 * Search Input Field
 */
if ( ! function_exists('form_search'))
{
	function form_search($data = '', $value = '', $placeholder = '', $extra = '')
	{
		$defaults = array('type' => 'search', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value, 'placeholder' => $placeholder);

		return "<input "._parse_form_attributes($data, $defaults).$extra." />";
	}
}


/* End of file form_helper.php */
/* Location: ./application/helpers/form_helper.php */