<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Report.
 * 
 * @method Report setArticleBody(Property\ArticleBody $articleBody)
 * @method Report setArticleSection(Property\ArticleSection $articleSection)
 * @method Report setPageEnd(Property\PageEnd $pageEnd)
 * @method Report setPageStart(Property\PageStart $pageStart)
 * @method Report setPagination(Property\Pagination $pagination)
 * @method Report setWordCount(Property\WordCount $wordCount)
 */
class Report extends Article {

	/**
	 * @var Property\ReportNumber
	 */
	private $reportNumber;

	/**
	 * Get report number.
	 * 
	 * @return Property\ReportNumber
	 */
	public function getReportNumber() {
		return $this->reportNumber;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Report';
	}

	/**
	 * Set report number.
	 * 
	 * @param Property\ReportNumber $reportNumber
	 * @return Report
	 */
	public function setReportNumber(Property\ReportNumber $reportNumber) {
		$this->reportNumber = $reportNumber;

		return $this;
	}
}