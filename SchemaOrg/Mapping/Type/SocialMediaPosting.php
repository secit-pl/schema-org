<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SocialMediaPosting.
 * 
 * @method SocialMediaPosting setArticleBody(Property\ArticleBody $articleBody)
 * @method SocialMediaPosting setArticleSection(Property\ArticleSection $articleSection)
 * @method SocialMediaPosting setPageEnd(Property\PageEnd $pageEnd)
 * @method SocialMediaPosting setPageStart(Property\PageStart $pageStart)
 * @method SocialMediaPosting setPagination(Property\Pagination $pagination)
 * @method SocialMediaPosting setWordCount(Property\WordCount $wordCount)
 */
class SocialMediaPosting extends Article {

	/**
	 * @var Property\SharedContent
	 */
	private $sharedContent;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SocialMediaPosting';
	}

	/**
	 * Get shared content.
	 * 
	 * @return Property\SharedContent
	 */
	public function getSharedContent() {
		return $this->sharedContent;
	}

	/**
	 * Set shared content.
	 * 
	 * @param Property\SharedContent $sharedContent
	 * @return SocialMediaPosting
	 */
	public function setSharedContent(Property\SharedContent $sharedContent) {
		$this->sharedContent = $sharedContent;

		return $this;
	}
}