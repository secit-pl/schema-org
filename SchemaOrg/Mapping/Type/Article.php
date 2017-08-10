<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Article.
 */
class Article {

	/**
	 * @var Property\ArticleBody
	 */
	private $articleBody;

	/**
	 * @var Property\ArticleSection
	 */
	private $articleSection;

	/**
	 */
	private $id;

	/**
	 * @var Property\PageEnd
	 */
	private $pageEnd;

	/**
	 * @var Property\PageStart
	 */
	private $pageStart;

	/**
	 * @var Property\Pagination
	 */
	private $pagination;

	/**
	 * @var Property\WordCount
	 */
	private $wordCount;

	/**
	 * Article constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get article body.
	 * 
	 * @return Property\ArticleBody
	 */
	public function getArticleBody() {
		return $this->articleBody;
	}

	/**
	 * Get article section.
	 * 
	 * @return Property\ArticleSection
	 */
	public function getArticleSection() {
		return $this->articleSection;
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
	 * Get page end.
	 * 
	 * @return Property\PageEnd
	 */
	public function getPageEnd() {
		return $this->pageEnd;
	}

	/**
	 * Get page start.
	 * 
	 * @return Property\PageStart
	 */
	public function getPageStart() {
		return $this->pageStart;
	}

	/**
	 * Get pagination.
	 * 
	 * @return Property\Pagination
	 */
	public function getPagination() {
		return $this->pagination;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Article';
	}

	/**
	 * Get word count.
	 * 
	 * @return Property\WordCount
	 */
	public function getWordCount() {
		return $this->wordCount;
	}

	/**
	 * Set article body.
	 * 
	 * @param Property\ArticleBody $articleBody
	 * @return Article
	 */
	public function setArticleBody(Property\ArticleBody $articleBody) {
		$this->articleBody = $articleBody;

		return $this;
	}

	/**
	 * Set article section.
	 * 
	 * @param Property\ArticleSection $articleSection
	 * @return Article
	 */
	public function setArticleSection(Property\ArticleSection $articleSection) {
		$this->articleSection = $articleSection;

		return $this;
	}

	/**
	 * Set page end.
	 * 
	 * @param Property\PageEnd $pageEnd
	 * @return Article
	 */
	public function setPageEnd(Property\PageEnd $pageEnd) {
		$this->pageEnd = $pageEnd;

		return $this;
	}

	/**
	 * Set page start.
	 * 
	 * @param Property\PageStart $pageStart
	 * @return Article
	 */
	public function setPageStart(Property\PageStart $pageStart) {
		$this->pageStart = $pageStart;

		return $this;
	}

	/**
	 * Set pagination.
	 * 
	 * @param Property\Pagination $pagination
	 * @return Article
	 */
	public function setPagination(Property\Pagination $pagination) {
		$this->pagination = $pagination;

		return $this;
	}

	/**
	 * Set word count.
	 * 
	 * @param Property\WordCount $wordCount
	 * @return Article
	 */
	public function setWordCount(Property\WordCount $wordCount) {
		$this->wordCount = $wordCount;

		return $this;
	}
}