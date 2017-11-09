<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ShoppingCenterType.
 * 
 * @method ShoppingCenterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ShoppingCenterType setAddress(Property\AddressProperty $address)
 * @method ShoppingCenterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ShoppingCenterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ShoppingCenterType setAlumni(Property\AlumniProperty $alumni)
 * @method ShoppingCenterType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ShoppingCenterType setAward(Property\AwardProperty $award)
 * @method ShoppingCenterType setBrand(Property\BrandProperty $brand)
 * @method ShoppingCenterType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ShoppingCenterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ShoppingCenterType setDepartment(Property\DepartmentProperty $department)
 * @method ShoppingCenterType setDescription(Property\DescriptionProperty $description)
 * @method ShoppingCenterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ShoppingCenterType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ShoppingCenterType setDuns(Property\DunsProperty $duns)
 * @method ShoppingCenterType setEmail(Property\EmailProperty $email)
 * @method ShoppingCenterType setEmployee(Property\EmployeeProperty $employee)
 * @method ShoppingCenterType setEvent(Property\EventProperty $event)
 * @method ShoppingCenterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ShoppingCenterType setFounder(Property\FounderProperty $founder)
 * @method ShoppingCenterType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ShoppingCenterType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ShoppingCenterType setFunder(Property\FunderProperty $funder)
 * @method ShoppingCenterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ShoppingCenterType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ShoppingCenterType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ShoppingCenterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ShoppingCenterType setImage(Property\ImageProperty $image)
 * @method ShoppingCenterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ShoppingCenterType setLegalName(Property\LegalNameProperty $legalName)
 * @method ShoppingCenterType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ShoppingCenterType setLocation(Property\LocationProperty $location)
 * @method ShoppingCenterType setLogo(Property\LogoProperty $logo)
 * @method ShoppingCenterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ShoppingCenterType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ShoppingCenterType setMember(Property\MemberProperty $member)
 * @method ShoppingCenterType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ShoppingCenterType setNaics(Property\NaicsProperty $naics)
 * @method ShoppingCenterType setName(Property\NameProperty $name)
 * @method ShoppingCenterType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ShoppingCenterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ShoppingCenterType setOwns(Property\OwnsProperty $owns)
 * @method ShoppingCenterType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ShoppingCenterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ShoppingCenterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ShoppingCenterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ShoppingCenterType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ShoppingCenterType setReview(Property\ReviewProperty $review)
 * @method ShoppingCenterType setSameAs(Property\SameAsProperty $sameAs)
 * @method ShoppingCenterType setSeeks(Property\SeeksProperty $seeks)
 * @method ShoppingCenterType setSponsor(Property\SponsorProperty $sponsor)
 * @method ShoppingCenterType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ShoppingCenterType setTaxID(Property\TaxIDProperty $taxID)
 * @method ShoppingCenterType setTelephone(Property\TelephoneProperty $telephone)
 * @method ShoppingCenterType setUrl(Property\UrlProperty $url)
 * @method ShoppingCenterType setVatID(Property\VatIDProperty $vatID)
 */
class ShoppingCenterType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShoppingCenter';
	}
}