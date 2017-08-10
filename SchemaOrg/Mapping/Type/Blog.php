<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Blog.
 */
class Blog {

	/**
	 * @var Property\BlogPost
	 */
	private $blogPost;

	/**
	 */
	private $id;

	/**
	 * Blog constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get blog post.
	 * 
	 * @return Property\BlogPost
	 */
	public function getBlogPost() {
		return $this->blogPost;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Blog';
	}

	/**
	 * Set blog post.
	 * 
	 * @param Property\BlogPost $blogPost
	 * @return Blog
	 */
	public function setBlogPost(Property\BlogPost $blogPost) {
		$this->blogPost = $blogPost;

		return $this;
	}
}