<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MedicalOrganizationType.
 * 
 * @method MedicalOrganizationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalOrganizationType setAddress(Property\AddressProperty $address)
 * @method MedicalOrganizationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MedicalOrganizationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalOrganizationType setAlumni(Property\AlumniProperty $alumni)
 * @method MedicalOrganizationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MedicalOrganizationType setAward(Property\AwardProperty $award)
 * @method MedicalOrganizationType setBrand(Property\BrandProperty $brand)
 * @method MedicalOrganizationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MedicalOrganizationType setDepartment(Property\DepartmentProperty $department)
 * @method MedicalOrganizationType setDescription(Property\DescriptionProperty $description)
 * @method MedicalOrganizationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalOrganizationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MedicalOrganizationType setDuns(Property\DunsProperty $duns)
 * @method MedicalOrganizationType setEmail(Property\EmailProperty $email)
 * @method MedicalOrganizationType setEmployee(Property\EmployeeProperty $employee)
 * @method MedicalOrganizationType setEvent(Property\EventProperty $event)
 * @method MedicalOrganizationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MedicalOrganizationType setFounder(Property\FounderProperty $founder)
 * @method MedicalOrganizationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MedicalOrganizationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MedicalOrganizationType setFunder(Property\FunderProperty $funder)
 * @method MedicalOrganizationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MedicalOrganizationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MedicalOrganizationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MedicalOrganizationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalOrganizationType setImage(Property\ImageProperty $image)
 * @method MedicalOrganizationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MedicalOrganizationType setLegalName(Property\LegalNameProperty $legalName)
 * @method MedicalOrganizationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MedicalOrganizationType setLocation(Property\LocationProperty $location)
 * @method MedicalOrganizationType setLogo(Property\LogoProperty $logo)
 * @method MedicalOrganizationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalOrganizationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MedicalOrganizationType setMember(Property\MemberProperty $member)
 * @method MedicalOrganizationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MedicalOrganizationType setNaics(Property\NaicsProperty $naics)
 * @method MedicalOrganizationType setName(Property\NameProperty $name)
 * @method MedicalOrganizationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MedicalOrganizationType setOwns(Property\OwnsProperty $owns)
 * @method MedicalOrganizationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MedicalOrganizationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalOrganizationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MedicalOrganizationType setReview(Property\ReviewProperty $review)
 * @method MedicalOrganizationType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalOrganizationType setSeeks(Property\SeeksProperty $seeks)
 * @method MedicalOrganizationType setSponsor(Property\SponsorProperty $sponsor)
 * @method MedicalOrganizationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MedicalOrganizationType setTaxID(Property\TaxIDProperty $taxID)
 * @method MedicalOrganizationType setTelephone(Property\TelephoneProperty $telephone)
 * @method MedicalOrganizationType setUrl(Property\UrlProperty $url)
 * @method MedicalOrganizationType setVatID(Property\VatIDProperty $vatID)
 */
class MedicalOrganizationType extends OrganizationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalOrganization';
	}
}