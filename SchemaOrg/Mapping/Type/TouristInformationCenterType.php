<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TouristInformationCenterType.
 * 
 * @method TouristInformationCenterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TouristInformationCenterType setAddress(Property\AddressProperty $address)
 * @method TouristInformationCenterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TouristInformationCenterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TouristInformationCenterType setAlumni(Property\AlumniProperty $alumni)
 * @method TouristInformationCenterType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TouristInformationCenterType setAward(Property\AwardProperty $award)
 * @method TouristInformationCenterType setBrand(Property\BrandProperty $brand)
 * @method TouristInformationCenterType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method TouristInformationCenterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TouristInformationCenterType setDepartment(Property\DepartmentProperty $department)
 * @method TouristInformationCenterType setDescription(Property\DescriptionProperty $description)
 * @method TouristInformationCenterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TouristInformationCenterType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method TouristInformationCenterType setDuns(Property\DunsProperty $duns)
 * @method TouristInformationCenterType setEmail(Property\EmailProperty $email)
 * @method TouristInformationCenterType setEmployee(Property\EmployeeProperty $employee)
 * @method TouristInformationCenterType setEvent(Property\EventProperty $event)
 * @method TouristInformationCenterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TouristInformationCenterType setFounder(Property\FounderProperty $founder)
 * @method TouristInformationCenterType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method TouristInformationCenterType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method TouristInformationCenterType setFunder(Property\FunderProperty $funder)
 * @method TouristInformationCenterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TouristInformationCenterType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TouristInformationCenterType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method TouristInformationCenterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TouristInformationCenterType setImage(Property\ImageProperty $image)
 * @method TouristInformationCenterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TouristInformationCenterType setLegalName(Property\LegalNameProperty $legalName)
 * @method TouristInformationCenterType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method TouristInformationCenterType setLocation(Property\LocationProperty $location)
 * @method TouristInformationCenterType setLogo(Property\LogoProperty $logo)
 * @method TouristInformationCenterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TouristInformationCenterType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method TouristInformationCenterType setMember(Property\MemberProperty $member)
 * @method TouristInformationCenterType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method TouristInformationCenterType setNaics(Property\NaicsProperty $naics)
 * @method TouristInformationCenterType setName(Property\NameProperty $name)
 * @method TouristInformationCenterType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method TouristInformationCenterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TouristInformationCenterType setOwns(Property\OwnsProperty $owns)
 * @method TouristInformationCenterType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method TouristInformationCenterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TouristInformationCenterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TouristInformationCenterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TouristInformationCenterType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method TouristInformationCenterType setReview(Property\ReviewProperty $review)
 * @method TouristInformationCenterType setSameAs(Property\SameAsProperty $sameAs)
 * @method TouristInformationCenterType setSeeks(Property\SeeksProperty $seeks)
 * @method TouristInformationCenterType setSponsor(Property\SponsorProperty $sponsor)
 * @method TouristInformationCenterType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method TouristInformationCenterType setTaxID(Property\TaxIDProperty $taxID)
 * @method TouristInformationCenterType setTelephone(Property\TelephoneProperty $telephone)
 * @method TouristInformationCenterType setUrl(Property\UrlProperty $url)
 * @method TouristInformationCenterType setVatID(Property\VatIDProperty $vatID)
 */
class TouristInformationCenterType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TouristInformationCenter';
	}
}