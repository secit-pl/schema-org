<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TechArticle.
 * 
 * @method TechArticle setArticleBody(Property\ArticleBody $articleBody)
 * @method TechArticle setArticleSection(Property\ArticleSection $articleSection)
 * @method TechArticle setPageEnd(Property\PageEnd $pageEnd)
 * @method TechArticle setPageStart(Property\PageStart $pageStart)
 * @method TechArticle setPagination(Property\Pagination $pagination)
 * @method TechArticle setWordCount(Property\WordCount $wordCount)
 */
class TechArticle extends Article {

	/**
	 * @var Property\Dependencies
	 */
	private $dependencies;

	/**
	 * @var Property\ProficiencyLevel
	 */
	private $proficiencyLevel;

	/**
	 * Get dependencies.
	 * 
	 * @return Property\Dependencies
	 */
	public function getDependencies() {
		return $this->dependencies;
	}

	/**
	 * Get proficiency level.
	 * 
	 * @return Property\ProficiencyLevel
	 */
	public function getProficiencyLevel() {
		return $this->proficiencyLevel;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TechArticle';
	}

	/**
	 * Set dependencies.
	 * 
	 * @param Property\Dependencies $dependencies
	 * @return TechArticle
	 */
	public function setDependencies(Property\Dependencies $dependencies) {
		$this->dependencies = $dependencies;

		return $this;
	}

	/**
	 * Set proficiency level.
	 * 
	 * @param Property\ProficiencyLevel $proficiencyLevel
	 * @return TechArticle
	 */
	public function setProficiencyLevel(Property\ProficiencyLevel $proficiencyLevel) {
		$this->proficiencyLevel = $proficiencyLevel;

		return $this;
	}
}