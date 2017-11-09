<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DanceGroupType.
 * 
 * @method DanceGroupType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DanceGroupType setAddress(Property\AddressProperty $address)
 * @method DanceGroupType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DanceGroupType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DanceGroupType setAlumni(Property\AlumniProperty $alumni)
 * @method DanceGroupType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method DanceGroupType setAward(Property\AwardProperty $award)
 * @method DanceGroupType setBrand(Property\BrandProperty $brand)
 * @method DanceGroupType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method DanceGroupType setDepartment(Property\DepartmentProperty $department)
 * @method DanceGroupType setDescription(Property\DescriptionProperty $description)
 * @method DanceGroupType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DanceGroupType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method DanceGroupType setDuns(Property\DunsProperty $duns)
 * @method DanceGroupType setEmail(Property\EmailProperty $email)
 * @method DanceGroupType setEmployee(Property\EmployeeProperty $employee)
 * @method DanceGroupType setEvent(Property\EventProperty $event)
 * @method DanceGroupType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DanceGroupType setFounder(Property\FounderProperty $founder)
 * @method DanceGroupType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method DanceGroupType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method DanceGroupType setFunder(Property\FunderProperty $funder)
 * @method DanceGroupType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DanceGroupType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method DanceGroupType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method DanceGroupType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DanceGroupType setImage(Property\ImageProperty $image)
 * @method DanceGroupType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DanceGroupType setLegalName(Property\LegalNameProperty $legalName)
 * @method DanceGroupType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method DanceGroupType setLocation(Property\LocationProperty $location)
 * @method DanceGroupType setLogo(Property\LogoProperty $logo)
 * @method DanceGroupType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DanceGroupType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method DanceGroupType setMember(Property\MemberProperty $member)
 * @method DanceGroupType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method DanceGroupType setNaics(Property\NaicsProperty $naics)
 * @method DanceGroupType setName(Property\NameProperty $name)
 * @method DanceGroupType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method DanceGroupType setOwns(Property\OwnsProperty $owns)
 * @method DanceGroupType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method DanceGroupType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DanceGroupType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method DanceGroupType setReview(Property\ReviewProperty $review)
 * @method DanceGroupType setSameAs(Property\SameAsProperty $sameAs)
 * @method DanceGroupType setSeeks(Property\SeeksProperty $seeks)
 * @method DanceGroupType setSponsor(Property\SponsorProperty $sponsor)
 * @method DanceGroupType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method DanceGroupType setTaxID(Property\TaxIDProperty $taxID)
 * @method DanceGroupType setTelephone(Property\TelephoneProperty $telephone)
 * @method DanceGroupType setUrl(Property\UrlProperty $url)
 * @method DanceGroupType setVatID(Property\VatIDProperty $vatID)
 */
class DanceGroupType extends OrganizationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DanceGroup';
	}
}