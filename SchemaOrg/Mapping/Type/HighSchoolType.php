<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A high school.
 * 
 * @method HighSchoolType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HighSchoolType setAddress(Property\AddressProperty $address)
 * @method HighSchoolType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HighSchoolType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HighSchoolType setAlumni(Property\AlumniProperty $alumni)
 * @method HighSchoolType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HighSchoolType setAward(Property\AwardProperty $award)
 * @method HighSchoolType setBrand(Property\BrandProperty $brand)
 * @method HighSchoolType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HighSchoolType setDepartment(Property\DepartmentProperty $department)
 * @method HighSchoolType setDescription(Property\DescriptionProperty $description)
 * @method HighSchoolType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HighSchoolType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HighSchoolType setDuns(Property\DunsProperty $duns)
 * @method HighSchoolType setEmail(Property\EmailProperty $email)
 * @method HighSchoolType setEmployee(Property\EmployeeProperty $employee)
 * @method HighSchoolType setEvent(Property\EventProperty $event)
 * @method HighSchoolType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HighSchoolType setFounder(Property\FounderProperty $founder)
 * @method HighSchoolType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HighSchoolType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HighSchoolType setFunder(Property\FunderProperty $funder)
 * @method HighSchoolType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HighSchoolType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HighSchoolType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HighSchoolType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HighSchoolType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HighSchoolType setImage(Property\ImageProperty $image)
 * @method HighSchoolType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method HighSchoolType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HighSchoolType setKeywords(Property\KeywordsProperty $keywords)
 * @method HighSchoolType setLegalName(Property\LegalNameProperty $legalName)
 * @method HighSchoolType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HighSchoolType setLocation(Property\LocationProperty $location)
 * @method HighSchoolType setLogo(Property\LogoProperty $logo)
 * @method HighSchoolType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HighSchoolType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HighSchoolType setMember(Property\MemberProperty $member)
 * @method HighSchoolType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HighSchoolType setNaics(Property\NaicsProperty $naics)
 * @method HighSchoolType setName(Property\NameProperty $name)
 * @method HighSchoolType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HighSchoolType setOwns(Property\OwnsProperty $owns)
 * @method HighSchoolType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HighSchoolType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HighSchoolType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HighSchoolType setReview(Property\ReviewProperty $review)
 * @method HighSchoolType setSameAs(Property\SameAsProperty $sameAs)
 * @method HighSchoolType setSeeks(Property\SeeksProperty $seeks)
 * @method HighSchoolType setSlogan(Property\SloganProperty $slogan)
 * @method HighSchoolType setSponsor(Property\SponsorProperty $sponsor)
 * @method HighSchoolType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HighSchoolType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HighSchoolType setTaxID(Property\TaxIDProperty $taxID)
 * @method HighSchoolType setTelephone(Property\TelephoneProperty $telephone)
 * @method HighSchoolType setUrl(Property\UrlProperty $url)
 * @method HighSchoolType setVatID(Property\VatIDProperty $vatID)
 */
class HighSchoolType extends EducationalOrganizationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HighSchool';
	}
}