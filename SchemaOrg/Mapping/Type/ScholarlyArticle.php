<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ScholarlyArticle.
 * 
 * @method ScholarlyArticle setArticleBody(Property\ArticleBody $articleBody)
 * @method ScholarlyArticle setArticleSection(Property\ArticleSection $articleSection)
 * @method ScholarlyArticle setPageEnd(Property\PageEnd $pageEnd)
 * @method ScholarlyArticle setPageStart(Property\PageStart $pageStart)
 * @method ScholarlyArticle setPagination(Property\Pagination $pagination)
 * @method ScholarlyArticle setWordCount(Property\WordCount $wordCount)
 */
class ScholarlyArticle extends Article {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ScholarlyArticle';
	}
}