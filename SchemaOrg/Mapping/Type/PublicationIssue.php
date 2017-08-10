<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicationIssue.
 */
class PublicationIssue {

	/**
	 */
	private $id;

	/**
	 * @var Property\IssueNumber
	 */
	private $issueNumber;

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
	 * PublicationIssue constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
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
	 * Get issue number.
	 * 
	 * @return Property\IssueNumber
	 */
	public function getIssueNumber() {
		return $this->issueNumber;
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
		return 'https://schema.org/PublicationIssue';
	}

	/**
	 * Set issue number.
	 * 
	 * @param Property\IssueNumber $issueNumber
	 * @return PublicationIssue
	 */
	public function setIssueNumber(Property\IssueNumber $issueNumber) {
		$this->issueNumber = $issueNumber;

		return $this;
	}

	/**
	 * Set page end.
	 * 
	 * @param Property\PageEnd $pageEnd
	 * @return PublicationIssue
	 */
	public function setPageEnd(Property\PageEnd $pageEnd) {
		$this->pageEnd = $pageEnd;

		return $this;
	}

	/**
	 * Set page start.
	 * 
	 * @param Property\PageStart $pageStart
	 * @return PublicationIssue
	 */
	public function setPageStart(Property\PageStart $pageStart) {
		$this->pageStart = $pageStart;

		return $this;
	}

	/**
	 * Set pagination.
	 * 
	 * @param Property\Pagination $pagination
	 * @return PublicationIssue
	 */
	public function setPagination(Property\Pagination $pagination) {
		$this->pagination = $pagination;

		return $this;
	}
}