<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformingGroupType.
 * 
 * @method PerformingGroupType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PerformingGroupType setAddress(Property\AddressProperty $address)
 * @method PerformingGroupType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PerformingGroupType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PerformingGroupType setAlumni(Property\AlumniProperty $alumni)
 * @method PerformingGroupType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PerformingGroupType setAward(Property\AwardProperty $award)
 * @method PerformingGroupType setBrand(Property\BrandProperty $brand)
 * @method PerformingGroupType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PerformingGroupType setDepartment(Property\DepartmentProperty $department)
 * @method PerformingGroupType setDescription(Property\DescriptionProperty $description)
 * @method PerformingGroupType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PerformingGroupType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PerformingGroupType setDuns(Property\DunsProperty $duns)
 * @method PerformingGroupType setEmail(Property\EmailProperty $email)
 * @method PerformingGroupType setEmployee(Property\EmployeeProperty $employee)
 * @method PerformingGroupType setEvent(Property\EventProperty $event)
 * @method PerformingGroupType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PerformingGroupType setFounder(Property\FounderProperty $founder)
 * @method PerformingGroupType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PerformingGroupType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PerformingGroupType setFunder(Property\FunderProperty $funder)
 * @method PerformingGroupType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PerformingGroupType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PerformingGroupType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PerformingGroupType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PerformingGroupType setImage(Property\ImageProperty $image)
 * @method PerformingGroupType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PerformingGroupType setLegalName(Property\LegalNameProperty $legalName)
 * @method PerformingGroupType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PerformingGroupType setLocation(Property\LocationProperty $location)
 * @method PerformingGroupType setLogo(Property\LogoProperty $logo)
 * @method PerformingGroupType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PerformingGroupType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PerformingGroupType setMember(Property\MemberProperty $member)
 * @method PerformingGroupType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PerformingGroupType setNaics(Property\NaicsProperty $naics)
 * @method PerformingGroupType setName(Property\NameProperty $name)
 * @method PerformingGroupType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PerformingGroupType setOwns(Property\OwnsProperty $owns)
 * @method PerformingGroupType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PerformingGroupType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PerformingGroupType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PerformingGroupType setReview(Property\ReviewProperty $review)
 * @method PerformingGroupType setSameAs(Property\SameAsProperty $sameAs)
 * @method PerformingGroupType setSeeks(Property\SeeksProperty $seeks)
 * @method PerformingGroupType setSponsor(Property\SponsorProperty $sponsor)
 * @method PerformingGroupType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PerformingGroupType setTaxID(Property\TaxIDProperty $taxID)
 * @method PerformingGroupType setTelephone(Property\TelephoneProperty $telephone)
 * @method PerformingGroupType setUrl(Property\UrlProperty $url)
 * @method PerformingGroupType setVatID(Property\VatIDProperty $vatID)
 */
class PerformingGroupType extends OrganizationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PerformingGroup';
	}
}