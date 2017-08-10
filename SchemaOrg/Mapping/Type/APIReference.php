<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class APIReference.
 * 
 * @method APIReference setArticleBody(Property\ArticleBody $articleBody)
 * @method APIReference setArticleSection(Property\ArticleSection $articleSection)
 * @method APIReference setDependencies(Property\Dependencies $dependencies)
 * @method APIReference setPageEnd(Property\PageEnd $pageEnd)
 * @method APIReference setPageStart(Property\PageStart $pageStart)
 * @method APIReference setPagination(Property\Pagination $pagination)
 * @method APIReference setProficiencyLevel(Property\ProficiencyLevel $proficiencyLevel)
 * @method APIReference setWordCount(Property\WordCount $wordCount)
 */
class APIReference extends TechArticle {

	/**
	 * @var Property\AssemblyVersion
	 */
	private $assemblyVersion;

	/**
	 * @var Property\ExecutableLibraryName
	 */
	private $executableLibraryName;

	/**
	 * @var Property\ProgrammingModel
	 */
	private $programmingModel;

	/**
	 * @var Property\TargetPlatform
	 */
	private $targetPlatform;

	/**
	 * Get assembly version.
	 * 
	 * @return Property\AssemblyVersion
	 */
	public function getAssemblyVersion() {
		return $this->assemblyVersion;
	}

	/**
	 * Get executable library name.
	 * 
	 * @return Property\ExecutableLibraryName
	 */
	public function getExecutableLibraryName() {
		return $this->executableLibraryName;
	}

	/**
	 * Get programming model.
	 * 
	 * @return Property\ProgrammingModel
	 */
	public function getProgrammingModel() {
		return $this->programmingModel;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/APIReference';
	}

	/**
	 * Get target platform.
	 * 
	 * @return Property\TargetPlatform
	 */
	public function getTargetPlatform() {
		return $this->targetPlatform;
	}

	/**
	 * Set assembly version.
	 * 
	 * @param Property\AssemblyVersion $assemblyVersion
	 * @return APIReference
	 */
	public function setAssemblyVersion(Property\AssemblyVersion $assemblyVersion) {
		$this->assemblyVersion = $assemblyVersion;

		return $this;
	}

	/**
	 * Set executable library name.
	 * 
	 * @param Property\ExecutableLibraryName $executableLibraryName
	 * @return APIReference
	 */
	public function setExecutableLibraryName(Property\ExecutableLibraryName $executableLibraryName) {
		$this->executableLibraryName = $executableLibraryName;

		return $this;
	}

	/**
	 * Set programming model.
	 * 
	 * @param Property\ProgrammingModel $programmingModel
	 * @return APIReference
	 */
	public function setProgrammingModel(Property\ProgrammingModel $programmingModel) {
		$this->programmingModel = $programmingModel;

		return $this;
	}

	/**
	 * Set target platform.
	 * 
	 * @param Property\TargetPlatform $targetPlatform
	 * @return APIReference
	 */
	public function setTargetPlatform(Property\TargetPlatform $targetPlatform) {
		$this->targetPlatform = $targetPlatform;

		return $this;
	}
}