<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DataCatalog.
 */
class DataCatalog {

	/**
	 * @var Property\Dataset
	 */
	private $dataset;

	/**
	 */
	private $id;

	/**
	 * DataCatalog constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get dataset.
	 * 
	 * @return Property\Dataset
	 */
	public function getDataset() {
		return $this->dataset;
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
		return 'https://schema.org/DataCatalog';
	}

	/**
	 * Set dataset.
	 * 
	 * @param Property\Dataset $dataset
	 * @return DataCatalog
	 */
	public function setDataset(Property\Dataset $dataset) {
		$this->dataset = $dataset;

		return $this;
	}
}