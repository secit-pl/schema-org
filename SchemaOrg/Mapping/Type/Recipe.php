<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Recipe.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RecipeType instead.
 * 
 * @method Recipe setAccessMode(Property\AccessMode $accessMode)
 * @method Recipe setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Recipe setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Recipe setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Recipe setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Recipe setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Recipe setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Recipe setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Recipe setAdditionalType(Property\AdditionalType $additionalType)
 * @method Recipe setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Recipe setAlternateName(Property\AlternateName $alternateName)
 * @method Recipe setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Recipe setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Recipe setAudience(Property\Audience $audience)
 * @method Recipe setAudio(Property\Audio $audio)
 * @method Recipe setAuthor(Property\Author $author)
 * @method Recipe setAward(Property\Award $award)
 * @method Recipe setCharacter(Property\Character $character)
 * @method Recipe setCitation(Property\Citation $citation)
 * @method Recipe setComment(Property\Comment $comment)
 * @method Recipe setCommentCount(Property\CommentCount $commentCount)
 * @method Recipe setContentLocation(Property\ContentLocation $contentLocation)
 * @method Recipe setContentRating(Property\ContentRating $contentRating)
 * @method Recipe setContributor(Property\Contributor $contributor)
 * @method Recipe setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Recipe setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Recipe setCreator(Property\Creator $creator)
 * @method Recipe setDateCreated(Property\DateCreated $dateCreated)
 * @method Recipe setDateModified(Property\DateModified $dateModified)
 * @method Recipe setDatePublished(Property\DatePublished $datePublished)
 * @method Recipe setDescription(Property\Description $description)
 * @method Recipe setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Recipe setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Recipe setEditor(Property\Editor $editor)
 * @method Recipe setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Recipe setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Recipe setEncoding(Property\Encoding $encoding)
 * @method Recipe setEstimatedCost(Property\EstimatedCost $estimatedCost)
 * @method Recipe setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Recipe setExpires(Property\Expires $expires)
 * @method Recipe setFileFormat(Property\FileFormat $fileFormat)
 * @method Recipe setFunder(Property\Funder $funder)
 * @method Recipe setGenre(Property\Genre $genre)
 * @method Recipe setHasPart(Property\HasPart $hasPart)
 * @method Recipe setHeadline(Property\Headline $headline)
 * @method Recipe setIdentifier(Property\Identifier $identifier)
 * @method Recipe setImage(Property\Image $image)
 * @method Recipe setInLanguage(Property\InLanguage $inLanguage)
 * @method Recipe setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Recipe setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Recipe setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Recipe setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Recipe setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Recipe setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Recipe setKeywords(Property\Keywords $keywords)
 * @method Recipe setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Recipe setLicense(Property\License $license)
 * @method Recipe setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Recipe setMainEntity(Property\MainEntity $mainEntity)
 * @method Recipe setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Recipe setMaterial(Property\Material $material)
 * @method Recipe setMentions(Property\Mentions $mentions)
 * @method Recipe setName(Property\Name $name)
 * @method Recipe setOffers(Property\Offers $offers)
 * @method Recipe setPerformTime(Property\PerformTime $performTime)
 * @method Recipe setPosition(Property\Position $position)
 * @method Recipe setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Recipe setPrepTime(Property\PrepTime $prepTime)
 * @method Recipe setProducer(Property\Producer $producer)
 * @method Recipe setProvider(Property\Provider $provider)
 * @method Recipe setPublication(Property\Publication $publication)
 * @method Recipe setPublisher(Property\Publisher $publisher)
 * @method Recipe setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Recipe setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Recipe setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Recipe setReview(Property\Review $review)
 * @method Recipe setSameAs(Property\SameAs $sameAs)
 * @method Recipe setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Recipe setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Recipe setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Recipe setSponsor(Property\Sponsor $sponsor)
 * @method Recipe setStep(Property\Step $step)
 * @method Recipe setSupply(Property\Supply $supply)
 * @method Recipe setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Recipe setText(Property\Text $text)
 * @method Recipe setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Recipe setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Recipe setTool(Property\Tool $tool)
 * @method Recipe setTotalTime(Property\TotalTime $totalTime)
 * @method Recipe setTranslator(Property\Translator $translator)
 * @method Recipe setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Recipe setUrl(Property\Url $url)
 * @method Recipe setVersion(Property\Version $version)
 * @method Recipe setVideo(Property\Video $video)
 * @method Recipe setWorkExample(Property\WorkExample $workExample)
 * @method Recipe setYield(Property\Yield $yield)
 */
class Recipe extends HowTo {

	/**
	 * @var Property\CookingMethod
	 */
	private $cookingMethod;

	/**
	 * @var Property\CookTime
	 */
	private $cookTime;

	/**
	 * @var Property\Nutrition
	 */
	private $nutrition;

	/**
	 * @var Property\RecipeCategory
	 */
	private $recipeCategory;

	/**
	 * @var Property\RecipeCuisine
	 */
	private $recipeCuisine;

	/**
	 * @var Property\RecipeIngredient
	 */
	private $recipeIngredient;

	/**
	 * @var Property\RecipeInstructions
	 */
	private $recipeInstructions;

	/**
	 * @var Property\RecipeYield
	 */
	private $recipeYield;

	/**
	 * @var Property\SuitableForDiet
	 */
	private $suitableForDiet;

	/**
	 * Get cooking method.
	 * 
	 * @return Property\CookingMethod
	 */
	public function getCookingMethod() {
		return $this->cookingMethod;
	}

	/**
	 * Get cook time.
	 * 
	 * @return Property\CookTime
	 */
	public function getCookTime() {
		return $this->cookTime;
	}

	/**
	 * Get nutrition.
	 * 
	 * @return Property\Nutrition
	 */
	public function getNutrition() {
		return $this->nutrition;
	}

	/**
	 * Get recipe category.
	 * 
	 * @return Property\RecipeCategory
	 */
	public function getRecipeCategory() {
		return $this->recipeCategory;
	}

	/**
	 * Get recipe cuisine.
	 * 
	 * @return Property\RecipeCuisine
	 */
	public function getRecipeCuisine() {
		return $this->recipeCuisine;
	}

	/**
	 * Get recipe ingredient.
	 * 
	 * @return Property\RecipeIngredient
	 */
	public function getRecipeIngredient() {
		return $this->recipeIngredient;
	}

	/**
	 * Get recipe instructions.
	 * 
	 * @return Property\RecipeInstructions
	 */
	public function getRecipeInstructions() {
		return $this->recipeInstructions;
	}

	/**
	 * Get recipe yield.
	 * 
	 * @return Property\RecipeYield
	 */
	public function getRecipeYield() {
		return $this->recipeYield;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Recipe';
	}

	/**
	 * Get suitable for diet.
	 * 
	 * @return Property\SuitableForDiet
	 */
	public function getSuitableForDiet() {
		return $this->suitableForDiet;
	}

	/**
	 * Set cooking method.
	 * 
	 * @param Property\CookingMethod $cookingMethod
	 * @return Recipe
	 */
	public function setCookingMethod(Property\CookingMethod $cookingMethod) {
		$this->cookingMethod = $cookingMethod;

		return $this;
	}

	/**
	 * Set cook time.
	 * 
	 * @param Property\CookTime $cookTime
	 * @return Recipe
	 */
	public function setCookTime(Property\CookTime $cookTime) {
		$this->cookTime = $cookTime;

		return $this;
	}

	/**
	 * Set nutrition.
	 * 
	 * @param Property\Nutrition $nutrition
	 * @return Recipe
	 */
	public function setNutrition(Property\Nutrition $nutrition) {
		$this->nutrition = $nutrition;

		return $this;
	}

	/**
	 * Set recipe category.
	 * 
	 * @param Property\RecipeCategory $recipeCategory
	 * @return Recipe
	 */
	public function setRecipeCategory(Property\RecipeCategory $recipeCategory) {
		$this->recipeCategory = $recipeCategory;

		return $this;
	}

	/**
	 * Set recipe cuisine.
	 * 
	 * @param Property\RecipeCuisine $recipeCuisine
	 * @return Recipe
	 */
	public function setRecipeCuisine(Property\RecipeCuisine $recipeCuisine) {
		$this->recipeCuisine = $recipeCuisine;

		return $this;
	}

	/**
	 * Set recipe ingredient.
	 * 
	 * @param Property\RecipeIngredient $recipeIngredient
	 * @return Recipe
	 */
	public function setRecipeIngredient(Property\RecipeIngredient $recipeIngredient) {
		$this->recipeIngredient = $recipeIngredient;

		return $this;
	}

	/**
	 * Set recipe instructions.
	 * 
	 * @param Property\RecipeInstructions $recipeInstructions
	 * @return Recipe
	 */
	public function setRecipeInstructions(Property\RecipeInstructions $recipeInstructions) {
		$this->recipeInstructions = $recipeInstructions;

		return $this;
	}

	/**
	 * Set recipe yield.
	 * 
	 * @param Property\RecipeYield $recipeYield
	 * @return Recipe
	 */
	public function setRecipeYield(Property\RecipeYield $recipeYield) {
		$this->recipeYield = $recipeYield;

		return $this;
	}

	/**
	 * Set suitable for diet.
	 * 
	 * @param Property\SuitableForDiet $suitableForDiet
	 * @return Recipe
	 */
	public function setSuitableForDiet(Property\SuitableForDiet $suitableForDiet) {
		$this->suitableForDiet = $suitableForDiet;

		return $this;
	}
}