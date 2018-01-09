<?php
/**
 * Created by PhpStorm.
 * User: jloosli
 * Date: 1/9/18
 * Time: 4:18 PM
 */

namespace TCSTech;


class TagRegistration {
	public $namespace;
	public $tagName;
	public $function;

	public function __construct( $namespace, $tagName, $function ) {
		$this->namespace = $namespace;
		$this->tagName   = $tagName;
		$this->function  = $function;
	}

	public function process( $node ) {
		$x = $node;
		eval( $this->function );
	}
}
