<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicGroup.
 */
class MusicGroup {

	/**
	 * @var Property\Album
	 */
	private $album;

	/**
	 * @var Property\Genre
	 */
	private $genre;

	/**
	 */
	private $id;

	/**
	 * @var Property\Track
	 */
	private $track;

	/**
	 * MusicGroup constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get album.
	 * 
	 * @return Property\Album
	 */
	public function getAlbum() {
		return $this->album;
	}

	/**
	 * Get genre.
	 * 
	 * @return Property\Genre
	 */
	public function getGenre() {
		return $this->genre;
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
		return 'https://schema.org/MusicGroup';
	}

	/**
	 * Get track.
	 * 
	 * @return Property\Track
	 */
	public function getTrack() {
		return $this->track;
	}

	/**
	 * Set album.
	 * 
	 * @param Property\Album $album
	 * @return MusicGroup
	 */
	public function setAlbum(Property\Album $album) {
		$this->album = $album;

		return $this;
	}

	/**
	 * Set genre.
	 * 
	 * @param Property\Genre $genre
	 * @return MusicGroup
	 */
	public function setGenre(Property\Genre $genre) {
		$this->genre = $genre;

		return $this;
	}

	/**
	 * Set track.
	 * 
	 * @param Property\Track $track
	 * @return MusicGroup
	 */
	public function setTrack(Property\Track $track) {
		$this->track = $track;

		return $this;
	}
}