<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DiscussionForumPosting.
 * 
 * @method DiscussionForumPosting setArticleBody(Property\ArticleBody $articleBody)
 * @method DiscussionForumPosting setArticleSection(Property\ArticleSection $articleSection)
 * @method DiscussionForumPosting setPageEnd(Property\PageEnd $pageEnd)
 * @method DiscussionForumPosting setPageStart(Property\PageStart $pageStart)
 * @method DiscussionForumPosting setPagination(Property\Pagination $pagination)
 * @method DiscussionForumPosting setSharedContent(Property\SharedContent $sharedContent)
 * @method DiscussionForumPosting setWordCount(Property\WordCount $wordCount)
 */
class DiscussionForumPosting extends SocialMediaPosting {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DiscussionForumPosting';
	}
}