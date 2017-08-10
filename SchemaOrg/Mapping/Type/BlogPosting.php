<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BlogPosting.
 * 
 * @method BlogPosting setArticleBody(Property\ArticleBody $articleBody)
 * @method BlogPosting setArticleSection(Property\ArticleSection $articleSection)
 * @method BlogPosting setPageEnd(Property\PageEnd $pageEnd)
 * @method BlogPosting setPageStart(Property\PageStart $pageStart)
 * @method BlogPosting setPagination(Property\Pagination $pagination)
 * @method BlogPosting setSharedContent(Property\SharedContent $sharedContent)
 * @method BlogPosting setWordCount(Property\WordCount $wordCount)
 */
class BlogPosting extends SocialMediaPosting {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BlogPosting';
	}
}