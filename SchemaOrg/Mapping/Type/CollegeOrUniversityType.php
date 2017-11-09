<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CollegeOrUniversityType.
 * 
 * @method CollegeOrUniversityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CollegeOrUniversityType setAddress(Property\AddressProperty $address)
 * @method CollegeOrUniversityType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CollegeOrUniversityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CollegeOrUniversityType setAlumni(Property\AlumniProperty $alumni)
 * @method CollegeOrUniversityType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method CollegeOrUniversityType setAward(Property\AwardProperty $award)
 * @method CollegeOrUniversityType setBrand(Property\BrandProperty $brand)
 * @method CollegeOrUniversityType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method CollegeOrUniversityType setDepartment(Property\DepartmentProperty $department)
 * @method CollegeOrUniversityType setDescription(Property\DescriptionProperty $description)
 * @method CollegeOrUniversityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CollegeOrUniversityType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method CollegeOrUniversityType setDuns(Property\DunsProperty $duns)
 * @method CollegeOrUniversityType setEmail(Property\EmailProperty $email)
 * @method CollegeOrUniversityType setEmployee(Property\EmployeeProperty $employee)
 * @method CollegeOrUniversityType setEvent(Property\EventProperty $event)
 * @method CollegeOrUniversityType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CollegeOrUniversityType setFounder(Property\FounderProperty $founder)
 * @method CollegeOrUniversityType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method CollegeOrUniversityType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method CollegeOrUniversityType setFunder(Property\FunderProperty $funder)
 * @method CollegeOrUniversityType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CollegeOrUniversityType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method CollegeOrUniversityType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method CollegeOrUniversityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CollegeOrUniversityType setImage(Property\ImageProperty $image)
 * @method CollegeOrUniversityType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CollegeOrUniversityType setLegalName(Property\LegalNameProperty $legalName)
 * @method CollegeOrUniversityType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method CollegeOrUniversityType setLocation(Property\LocationProperty $location)
 * @method CollegeOrUniversityType setLogo(Property\LogoProperty $logo)
 * @method CollegeOrUniversityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CollegeOrUniversityType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method CollegeOrUniversityType setMember(Property\MemberProperty $member)
 * @method CollegeOrUniversityType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method CollegeOrUniversityType setNaics(Property\NaicsProperty $naics)
 * @method CollegeOrUniversityType setName(Property\NameProperty $name)
 * @method CollegeOrUniversityType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method CollegeOrUniversityType setOwns(Property\OwnsProperty $owns)
 * @method CollegeOrUniversityType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method CollegeOrUniversityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CollegeOrUniversityType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method CollegeOrUniversityType setReview(Property\ReviewProperty $review)
 * @method CollegeOrUniversityType setSameAs(Property\SameAsProperty $sameAs)
 * @method CollegeOrUniversityType setSeeks(Property\SeeksProperty $seeks)
 * @method CollegeOrUniversityType setSponsor(Property\SponsorProperty $sponsor)
 * @method CollegeOrUniversityType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method CollegeOrUniversityType setTaxID(Property\TaxIDProperty $taxID)
 * @method CollegeOrUniversityType setTelephone(Property\TelephoneProperty $telephone)
 * @method CollegeOrUniversityType setUrl(Property\UrlProperty $url)
 * @method CollegeOrUniversityType setVatID(Property\VatIDProperty $vatID)
 */
class CollegeOrUniversityType extends EducationalOrganizationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CollegeOrUniversity';
	}
}