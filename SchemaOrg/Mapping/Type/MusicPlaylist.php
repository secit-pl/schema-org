<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicPlaylist.
 * 
 * @method MusicPlaylist setAbout(Property\About $about)
 * @method MusicPlaylist setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method MusicPlaylist setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method MusicPlaylist setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method MusicPlaylist setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method MusicPlaylist setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method MusicPlaylist setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicPlaylist setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MusicPlaylist setAlternateName(Property\AlternateName $alternateName)
 * @method MusicPlaylist setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method MusicPlaylist setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method MusicPlaylist setAudience(Property\Audience $audience)
 * @method MusicPlaylist setAudio(Property\Audio $audio)
 * @method MusicPlaylist setAuthor(Property\Author $author)
 * @method MusicPlaylist setAward(Property\Award $award)
 * @method MusicPlaylist setCharacter(Property\Character $character)
 * @method MusicPlaylist setCitation(Property\Citation $citation)
 * @method MusicPlaylist setComment(Property\Comment $comment)
 * @method MusicPlaylist setCommentCount(Property\CommentCount $commentCount)
 * @method MusicPlaylist setContentLocation(Property\ContentLocation $contentLocation)
 * @method MusicPlaylist setContentRating(Property\ContentRating $contentRating)
 * @method MusicPlaylist setContributor(Property\Contributor $contributor)
 * @method MusicPlaylist setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method MusicPlaylist setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method MusicPlaylist setCreator(Property\Creator $creator)
 * @method MusicPlaylist setDateCreated(Property\DateCreated $dateCreated)
 * @method MusicPlaylist setDateModified(Property\DateModified $dateModified)
 * @method MusicPlaylist setDatePublished(Property\DatePublished $datePublished)
 * @method MusicPlaylist setDescription(Property\Description $description)
 * @method MusicPlaylist setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicPlaylist setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method MusicPlaylist setEditor(Property\Editor $editor)
 * @method MusicPlaylist setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method MusicPlaylist setEducationalUse(Property\EducationalUse $educationalUse)
 * @method MusicPlaylist setEncoding(Property\Encoding $encoding)
 * @method MusicPlaylist setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method MusicPlaylist setFileFormat(Property\FileFormat $fileFormat)
 * @method MusicPlaylist setFunder(Property\Funder $funder)
 * @method MusicPlaylist setGenre(Property\Genre $genre)
 * @method MusicPlaylist setHasPart(Property\HasPart $hasPart)
 * @method MusicPlaylist setHeadline(Property\Headline $headline)
 * @method MusicPlaylist setImage(Property\Image $image)
 * @method MusicPlaylist setInLanguage(Property\InLanguage $inLanguage)
 * @method MusicPlaylist setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method MusicPlaylist setInteractivityType(Property\InteractivityType $interactivityType)
 * @method MusicPlaylist setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method MusicPlaylist setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method MusicPlaylist setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method MusicPlaylist setIsPartOf(Property\IsPartOf $isPartOf)
 * @method MusicPlaylist setKeywords(Property\Keywords $keywords)
 * @method MusicPlaylist setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method MusicPlaylist setLicense(Property\License $license)
 * @method MusicPlaylist setLocationCreated(Property\LocationCreated $locationCreated)
 * @method MusicPlaylist setMainEntity(Property\MainEntity $mainEntity)
 * @method MusicPlaylist setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicPlaylist setMentions(Property\Mentions $mentions)
 * @method MusicPlaylist setName(Property\Name $name)
 * @method MusicPlaylist setOffers(Property\Offers $offers)
 * @method MusicPlaylist setPosition(Property\Position $position)
 * @method MusicPlaylist setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicPlaylist setProducer(Property\Producer $producer)
 * @method MusicPlaylist setProvider(Property\Provider $provider)
 * @method MusicPlaylist setPublication(Property\Publication $publication)
 * @method MusicPlaylist setPublisher(Property\Publisher $publisher)
 * @method MusicPlaylist setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method MusicPlaylist setRecordedAt(Property\RecordedAt $recordedAt)
 * @method MusicPlaylist setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method MusicPlaylist setReview(Property\Review $review)
 * @method MusicPlaylist setSameAs(Property\SameAs $sameAs)
 * @method MusicPlaylist setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method MusicPlaylist setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method MusicPlaylist setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method MusicPlaylist setSponsor(Property\Sponsor $sponsor)
 * @method MusicPlaylist setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method MusicPlaylist setText(Property\Text $text)
 * @method MusicPlaylist setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method MusicPlaylist setTimeRequired(Property\TimeRequired $timeRequired)
 * @method MusicPlaylist setTranslator(Property\Translator $translator)
 * @method MusicPlaylist setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method MusicPlaylist setUrl(Property\Url $url)
 * @method MusicPlaylist setVersion(Property\Version $version)
 * @method MusicPlaylist setVideo(Property\Video $video)
 * @method MusicPlaylist setWorkExample(Property\WorkExample $workExample)
 */
class MusicPlaylist extends CreativeWork {

	/**
	 * @var Property\NumTracks
	 */
	private $numTracks;

	/**
	 * @var Property\Track
	 */
	private $track;

	/**
	 * Get num tracks.
	 * 
	 * @return Property\NumTracks
	 */
	public function getNumTracks() {
		return $this->numTracks;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicPlaylist';
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
	 * Set num tracks.
	 * 
	 * @param Property\NumTracks $numTracks
	 * @return MusicPlaylist
	 */
	public function setNumTracks(Property\NumTracks $numTracks) {
		$this->numTracks = $numTracks;

		return $this;
	}

	/**
	 * Set track.
	 * 
	 * @param Property\Track $track
	 * @return MusicPlaylist
	 */
	public function setTrack(Property\Track $track) {
		$this->track = $track;

		return $this;
	}
}