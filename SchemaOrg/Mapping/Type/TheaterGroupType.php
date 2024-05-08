<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A theater group or company, for example, the Royal Shakespeare Company or Druid Theatre.
 * 
 * @method TheaterGroupType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TheaterGroupType setAddress(Property\AddressProperty $address)
 * @method TheaterGroupType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TheaterGroupType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TheaterGroupType setAlumni(Property\AlumniProperty $alumni)
 * @method TheaterGroupType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TheaterGroupType setAward(Property\AwardProperty $award)
 * @method TheaterGroupType setBrand(Property\BrandProperty $brand)
 * @method TheaterGroupType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method TheaterGroupType setDepartment(Property\DepartmentProperty $department)
 * @method TheaterGroupType setDescription(Property\DescriptionProperty $description)
 * @method TheaterGroupType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TheaterGroupType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method TheaterGroupType setDuns(Property\DunsProperty $duns)
 * @method TheaterGroupType setEmail(Property\EmailProperty $email)
 * @method TheaterGroupType setEmployee(Property\EmployeeProperty $employee)
 * @method TheaterGroupType setEvent(Property\EventProperty $event)
 * @method TheaterGroupType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TheaterGroupType setFounder(Property\FounderProperty $founder)
 * @method TheaterGroupType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method TheaterGroupType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method TheaterGroupType setFunder(Property\FunderProperty $funder)
 * @method TheaterGroupType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TheaterGroupType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TheaterGroupType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TheaterGroupType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method TheaterGroupType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TheaterGroupType setImage(Property\ImageProperty $image)
 * @method TheaterGroupType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method TheaterGroupType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TheaterGroupType setKeywords(Property\KeywordsProperty $keywords)
 * @method TheaterGroupType setLegalName(Property\LegalNameProperty $legalName)
 * @method TheaterGroupType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method TheaterGroupType setLocation(Property\LocationProperty $location)
 * @method TheaterGroupType setLogo(Property\LogoProperty $logo)
 * @method TheaterGroupType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TheaterGroupType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method TheaterGroupType setMember(Property\MemberProperty $member)
 * @method TheaterGroupType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method TheaterGroupType setNaics(Property\NaicsProperty $naics)
 * @method TheaterGroupType setName(Property\NameProperty $name)
 * @method TheaterGroupType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method TheaterGroupType setOwns(Property\OwnsProperty $owns)
 * @method TheaterGroupType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method TheaterGroupType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TheaterGroupType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method TheaterGroupType setReview(Property\ReviewProperty $review)
 * @method TheaterGroupType setSameAs(Property\SameAsProperty $sameAs)
 * @method TheaterGroupType setSeeks(Property\SeeksProperty $seeks)
 * @method TheaterGroupType setSlogan(Property\SloganProperty $slogan)
 * @method TheaterGroupType setSponsor(Property\SponsorProperty $sponsor)
 * @method TheaterGroupType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method TheaterGroupType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TheaterGroupType setTaxID(Property\TaxIDProperty $taxID)
 * @method TheaterGroupType setTelephone(Property\TelephoneProperty $telephone)
 * @method TheaterGroupType setUrl(Property\UrlProperty $url)
 * @method TheaterGroupType setVatID(Property\VatIDProperty $vatID)
 */
class TheaterGroupType extends PerformingGroupType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TheaterGroup';
	}
}