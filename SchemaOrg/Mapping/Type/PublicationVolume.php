<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicationVolume.
 */
class PublicationVolume {

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
	 * @var Property\VolumeNumber
	 */
	private $volumeNumber;

	/**
	 * PublicationVolume constructor.
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
		return 'https://schema.org/PublicationVolume';
	}

	/**
	 * Get volume number.
	 * 
	 * @return Property\VolumeNumber
	 */
	public function getVolumeNumber() {
		return $this->volumeNumber;
	}

	/**
	 * Set page end.
	 * 
	 * @param Property\PageEnd $pageEnd
	 * @return PublicationVolume
	 */
	public function setPageEnd(Property\PageEnd $pageEnd) {
		$this->pageEnd = $pageEnd;

		return $this;
	}

	/**
	 * Set page start.
	 * 
	 * @param Property\PageStart $pageStart
	 * @return PublicationVolume
	 */
	public function setPageStart(Property\PageStart $pageStart) {
		$this->pageStart = $pageStart;

		return $this;
	}

	/**
	 * Set pagination.
	 * 
	 * @param Property\Pagination $pagination
	 * @return PublicationVolume
	 */
	public function setPagination(Property\Pagination $pagination) {
		$this->pagination = $pagination;

		return $this;
	}

	/**
	 * Set volume number.
	 * 
	 * @param Property\VolumeNumber $volumeNumber
	 * @return PublicationVolume
	 */
	public function setVolumeNumber(Property\VolumeNumber $volumeNumber) {
		$this->volumeNumber = $volumeNumber;

		return $this;
	}
}