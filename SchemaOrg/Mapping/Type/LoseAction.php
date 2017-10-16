<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LoseAction.
 */
class LoseAction {

	/**
	 */
	private $id;

	/**
	 * @var Property\Winner
	 */
	private $winner;

	/**
	 * LoseAction constructor.
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LoseAction';
	}

	/**
	 * Get winner.
	 * 
	 * @return Property\Winner
	 */
	public function getWinner() {
		return $this->winner;
	}

	/**
	 * Set winner.
	 * 
	 * @param Property\Winner $winner
	 * @return LoseAction
	 */
	public function setWinner(Property\Winner $winner) {
		$this->winner = $winner;

		return $this;
	}
}