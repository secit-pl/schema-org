<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MiddleSchoolType.
 * 
 * @method MiddleSchoolType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MiddleSchoolType setAddress(Property\AddressProperty $address)
 * @method MiddleSchoolType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MiddleSchoolType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MiddleSchoolType setAlumni(Property\AlumniProperty $alumni)
 * @method MiddleSchoolType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MiddleSchoolType setAward(Property\AwardProperty $award)
 * @method MiddleSchoolType setBrand(Property\BrandProperty $brand)
 * @method MiddleSchoolType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MiddleSchoolType setDepartment(Property\DepartmentProperty $department)
 * @method MiddleSchoolType setDescription(Property\DescriptionProperty $description)
 * @method MiddleSchoolType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MiddleSchoolType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MiddleSchoolType setDuns(Property\DunsProperty $duns)
 * @method MiddleSchoolType setEmail(Property\EmailProperty $email)
 * @method MiddleSchoolType setEmployee(Property\EmployeeProperty $employee)
 * @method MiddleSchoolType setEvent(Property\EventProperty $event)
 * @method MiddleSchoolType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MiddleSchoolType setFounder(Property\FounderProperty $founder)
 * @method MiddleSchoolType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MiddleSchoolType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MiddleSchoolType setFunder(Property\FunderProperty $funder)
 * @method MiddleSchoolType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MiddleSchoolType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MiddleSchoolType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MiddleSchoolType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MiddleSchoolType setImage(Property\ImageProperty $image)
 * @method MiddleSchoolType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MiddleSchoolType setLegalName(Property\LegalNameProperty $legalName)
 * @method MiddleSchoolType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MiddleSchoolType setLocation(Property\LocationProperty $location)
 * @method MiddleSchoolType setLogo(Property\LogoProperty $logo)
 * @method MiddleSchoolType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MiddleSchoolType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MiddleSchoolType setMember(Property\MemberProperty $member)
 * @method MiddleSchoolType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MiddleSchoolType setNaics(Property\NaicsProperty $naics)
 * @method MiddleSchoolType setName(Property\NameProperty $name)
 * @method MiddleSchoolType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MiddleSchoolType setOwns(Property\OwnsProperty $owns)
 * @method MiddleSchoolType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MiddleSchoolType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MiddleSchoolType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MiddleSchoolType setReview(Property\ReviewProperty $review)
 * @method MiddleSchoolType setSameAs(Property\SameAsProperty $sameAs)
 * @method MiddleSchoolType setSeeks(Property\SeeksProperty $seeks)
 * @method MiddleSchoolType setSponsor(Property\SponsorProperty $sponsor)
 * @method MiddleSchoolType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MiddleSchoolType setTaxID(Property\TaxIDProperty $taxID)
 * @method MiddleSchoolType setTelephone(Property\TelephoneProperty $telephone)
 * @method MiddleSchoolType setUrl(Property\UrlProperty $url)
 * @method MiddleSchoolType setVatID(Property\VatIDProperty $vatID)
 */
class MiddleSchoolType extends EducationalOrganizationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MiddleSchool';
	}
}