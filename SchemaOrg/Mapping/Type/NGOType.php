<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NGOType.
 * 
 * @method NGOType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NGOType setAddress(Property\AddressProperty $address)
 * @method NGOType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method NGOType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NGOType setAlumni(Property\AlumniProperty $alumni)
 * @method NGOType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method NGOType setAward(Property\AwardProperty $award)
 * @method NGOType setBrand(Property\BrandProperty $brand)
 * @method NGOType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method NGOType setDepartment(Property\DepartmentProperty $department)
 * @method NGOType setDescription(Property\DescriptionProperty $description)
 * @method NGOType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NGOType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method NGOType setDuns(Property\DunsProperty $duns)
 * @method NGOType setEmail(Property\EmailProperty $email)
 * @method NGOType setEmployee(Property\EmployeeProperty $employee)
 * @method NGOType setEvent(Property\EventProperty $event)
 * @method NGOType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method NGOType setFounder(Property\FounderProperty $founder)
 * @method NGOType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method NGOType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method NGOType setFunder(Property\FunderProperty $funder)
 * @method NGOType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method NGOType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method NGOType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method NGOType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NGOType setImage(Property\ImageProperty $image)
 * @method NGOType setIsicV4(Property\IsicV4Property $isicV4)
 * @method NGOType setLegalName(Property\LegalNameProperty $legalName)
 * @method NGOType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method NGOType setLocation(Property\LocationProperty $location)
 * @method NGOType setLogo(Property\LogoProperty $logo)
 * @method NGOType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NGOType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method NGOType setMember(Property\MemberProperty $member)
 * @method NGOType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method NGOType setNaics(Property\NaicsProperty $naics)
 * @method NGOType setName(Property\NameProperty $name)
 * @method NGOType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method NGOType setOwns(Property\OwnsProperty $owns)
 * @method NGOType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method NGOType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NGOType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method NGOType setReview(Property\ReviewProperty $review)
 * @method NGOType setSameAs(Property\SameAsProperty $sameAs)
 * @method NGOType setSeeks(Property\SeeksProperty $seeks)
 * @method NGOType setSponsor(Property\SponsorProperty $sponsor)
 * @method NGOType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method NGOType setTaxID(Property\TaxIDProperty $taxID)
 * @method NGOType setTelephone(Property\TelephoneProperty $telephone)
 * @method NGOType setUrl(Property\UrlProperty $url)
 * @method NGOType setVatID(Property\VatIDProperty $vatID)
 */
class NGOType extends OrganizationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NGO';
	}
}