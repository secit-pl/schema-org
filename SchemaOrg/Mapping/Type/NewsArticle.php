<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NewsArticle.
 * 
 * @method NewsArticle setArticleBody(Property\ArticleBody $articleBody)
 * @method NewsArticle setArticleSection(Property\ArticleSection $articleSection)
 * @method NewsArticle setPageEnd(Property\PageEnd $pageEnd)
 * @method NewsArticle setPageStart(Property\PageStart $pageStart)
 * @method NewsArticle setPagination(Property\Pagination $pagination)
 * @method NewsArticle setWordCount(Property\WordCount $wordCount)
 */
class NewsArticle extends Article {

	/**
	 * @var Property\Dateline
	 */
	private $dateline;

	/**
	 * @var Property\PrintColumn
	 */
	private $printColumn;

	/**
	 * @var Property\PrintEdition
	 */
	private $printEdition;

	/**
	 * @var Property\PrintPage
	 */
	private $printPage;

	/**
	 * @var Property\PrintSection
	 */
	private $printSection;

	/**
	 * Get dateline.
	 * 
	 * @return Property\Dateline
	 */
	public function getDateline() {
		return $this->dateline;
	}

	/**
	 * Get print column.
	 * 
	 * @return Property\PrintColumn
	 */
	public function getPrintColumn() {
		return $this->printColumn;
	}

	/**
	 * Get print edition.
	 * 
	 * @return Property\PrintEdition
	 */
	public function getPrintEdition() {
		return $this->printEdition;
	}

	/**
	 * Get print page.
	 * 
	 * @return Property\PrintPage
	 */
	public function getPrintPage() {
		return $this->printPage;
	}

	/**
	 * Get print section.
	 * 
	 * @return Property\PrintSection
	 */
	public function getPrintSection() {
		return $this->printSection;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NewsArticle';
	}

	/**
	 * Set dateline.
	 * 
	 * @param Property\Dateline $dateline
	 * @return NewsArticle
	 */
	public function setDateline(Property\Dateline $dateline) {
		$this->dateline = $dateline;

		return $this;
	}

	/**
	 * Set print column.
	 * 
	 * @param Property\PrintColumn $printColumn
	 * @return NewsArticle
	 */
	public function setPrintColumn(Property\PrintColumn $printColumn) {
		$this->printColumn = $printColumn;

		return $this;
	}

	/**
	 * Set print edition.
	 * 
	 * @param Property\PrintEdition $printEdition
	 * @return NewsArticle
	 */
	public function setPrintEdition(Property\PrintEdition $printEdition) {
		$this->printEdition = $printEdition;

		return $this;
	}

	/**
	 * Set print page.
	 * 
	 * @param Property\PrintPage $printPage
	 * @return NewsArticle
	 */
	public function setPrintPage(Property\PrintPage $printPage) {
		$this->printPage = $printPage;

		return $this;
	}

	/**
	 * Set print section.
	 * 
	 * @param Property\PrintSection $printSection
	 * @return NewsArticle
	 */
	public function setPrintSection(Property\PrintSection $printSection) {
		$this->printSection = $printSection;

		return $this;
	}
}