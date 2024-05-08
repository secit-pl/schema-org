<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A school.
 * 
 * @method SchoolType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SchoolType setAddress(Property\AddressProperty $address)
 * @method SchoolType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SchoolType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SchoolType setAlumni(Property\AlumniProperty $alumni)
 * @method SchoolType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method SchoolType setAward(Property\AwardProperty $award)
 * @method SchoolType setBrand(Property\BrandProperty $brand)
 * @method SchoolType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method SchoolType setDepartment(Property\DepartmentProperty $department)
 * @method SchoolType setDescription(Property\DescriptionProperty $description)
 * @method SchoolType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SchoolType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method SchoolType setDuns(Property\DunsProperty $duns)
 * @method SchoolType setEmail(Property\EmailProperty $email)
 * @method SchoolType setEmployee(Property\EmployeeProperty $employee)
 * @method SchoolType setEvent(Property\EventProperty $event)
 * @method SchoolType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SchoolType setFounder(Property\FounderProperty $founder)
 * @method SchoolType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method SchoolType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method SchoolType setFunder(Property\FunderProperty $funder)
 * @method SchoolType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SchoolType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SchoolType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method SchoolType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method SchoolType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SchoolType setImage(Property\ImageProperty $image)
 * @method SchoolType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method SchoolType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SchoolType setKeywords(Property\KeywordsProperty $keywords)
 * @method SchoolType setLegalName(Property\LegalNameProperty $legalName)
 * @method SchoolType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method SchoolType setLocation(Property\LocationProperty $location)
 * @method SchoolType setLogo(Property\LogoProperty $logo)
 * @method SchoolType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SchoolType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method SchoolType setMember(Property\MemberProperty $member)
 * @method SchoolType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method SchoolType setNaics(Property\NaicsProperty $naics)
 * @method SchoolType setName(Property\NameProperty $name)
 * @method SchoolType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method SchoolType setOwns(Property\OwnsProperty $owns)
 * @method SchoolType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method SchoolType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SchoolType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method SchoolType setReview(Property\ReviewProperty $review)
 * @method SchoolType setSameAs(Property\SameAsProperty $sameAs)
 * @method SchoolType setSeeks(Property\SeeksProperty $seeks)
 * @method SchoolType setSlogan(Property\SloganProperty $slogan)
 * @method SchoolType setSponsor(Property\SponsorProperty $sponsor)
 * @method SchoolType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method SchoolType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SchoolType setTaxID(Property\TaxIDProperty $taxID)
 * @method SchoolType setTelephone(Property\TelephoneProperty $telephone)
 * @method SchoolType setUrl(Property\UrlProperty $url)
 * @method SchoolType setVatID(Property\VatIDProperty $vatID)
 */
class SchoolType extends EducationalOrganizationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/School';
	}
}