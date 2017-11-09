<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RealEstateAgentType.
 * 
 * @method RealEstateAgentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RealEstateAgentType setAddress(Property\AddressProperty $address)
 * @method RealEstateAgentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RealEstateAgentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RealEstateAgentType setAlumni(Property\AlumniProperty $alumni)
 * @method RealEstateAgentType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method RealEstateAgentType setAward(Property\AwardProperty $award)
 * @method RealEstateAgentType setBrand(Property\BrandProperty $brand)
 * @method RealEstateAgentType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method RealEstateAgentType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RealEstateAgentType setDepartment(Property\DepartmentProperty $department)
 * @method RealEstateAgentType setDescription(Property\DescriptionProperty $description)
 * @method RealEstateAgentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RealEstateAgentType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method RealEstateAgentType setDuns(Property\DunsProperty $duns)
 * @method RealEstateAgentType setEmail(Property\EmailProperty $email)
 * @method RealEstateAgentType setEmployee(Property\EmployeeProperty $employee)
 * @method RealEstateAgentType setEvent(Property\EventProperty $event)
 * @method RealEstateAgentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RealEstateAgentType setFounder(Property\FounderProperty $founder)
 * @method RealEstateAgentType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method RealEstateAgentType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method RealEstateAgentType setFunder(Property\FunderProperty $funder)
 * @method RealEstateAgentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RealEstateAgentType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method RealEstateAgentType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method RealEstateAgentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RealEstateAgentType setImage(Property\ImageProperty $image)
 * @method RealEstateAgentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RealEstateAgentType setLegalName(Property\LegalNameProperty $legalName)
 * @method RealEstateAgentType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method RealEstateAgentType setLocation(Property\LocationProperty $location)
 * @method RealEstateAgentType setLogo(Property\LogoProperty $logo)
 * @method RealEstateAgentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RealEstateAgentType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method RealEstateAgentType setMember(Property\MemberProperty $member)
 * @method RealEstateAgentType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method RealEstateAgentType setNaics(Property\NaicsProperty $naics)
 * @method RealEstateAgentType setName(Property\NameProperty $name)
 * @method RealEstateAgentType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method RealEstateAgentType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RealEstateAgentType setOwns(Property\OwnsProperty $owns)
 * @method RealEstateAgentType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method RealEstateAgentType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RealEstateAgentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RealEstateAgentType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RealEstateAgentType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method RealEstateAgentType setReview(Property\ReviewProperty $review)
 * @method RealEstateAgentType setSameAs(Property\SameAsProperty $sameAs)
 * @method RealEstateAgentType setSeeks(Property\SeeksProperty $seeks)
 * @method RealEstateAgentType setSponsor(Property\SponsorProperty $sponsor)
 * @method RealEstateAgentType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method RealEstateAgentType setTaxID(Property\TaxIDProperty $taxID)
 * @method RealEstateAgentType setTelephone(Property\TelephoneProperty $telephone)
 * @method RealEstateAgentType setUrl(Property\UrlProperty $url)
 * @method RealEstateAgentType setVatID(Property\VatIDProperty $vatID)
 */
class RealEstateAgentType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RealEstateAgent';
	}
}