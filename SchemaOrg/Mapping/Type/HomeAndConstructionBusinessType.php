<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HomeAndConstructionBusinessType.
 * 
 * @method HomeAndConstructionBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HomeAndConstructionBusinessType setAddress(Property\AddressProperty $address)
 * @method HomeAndConstructionBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HomeAndConstructionBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HomeAndConstructionBusinessType setAlumni(Property\AlumniProperty $alumni)
 * @method HomeAndConstructionBusinessType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HomeAndConstructionBusinessType setAward(Property\AwardProperty $award)
 * @method HomeAndConstructionBusinessType setBrand(Property\BrandProperty $brand)
 * @method HomeAndConstructionBusinessType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HomeAndConstructionBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HomeAndConstructionBusinessType setDepartment(Property\DepartmentProperty $department)
 * @method HomeAndConstructionBusinessType setDescription(Property\DescriptionProperty $description)
 * @method HomeAndConstructionBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HomeAndConstructionBusinessType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HomeAndConstructionBusinessType setDuns(Property\DunsProperty $duns)
 * @method HomeAndConstructionBusinessType setEmail(Property\EmailProperty $email)
 * @method HomeAndConstructionBusinessType setEmployee(Property\EmployeeProperty $employee)
 * @method HomeAndConstructionBusinessType setEvent(Property\EventProperty $event)
 * @method HomeAndConstructionBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HomeAndConstructionBusinessType setFounder(Property\FounderProperty $founder)
 * @method HomeAndConstructionBusinessType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HomeAndConstructionBusinessType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HomeAndConstructionBusinessType setFunder(Property\FunderProperty $funder)
 * @method HomeAndConstructionBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HomeAndConstructionBusinessType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HomeAndConstructionBusinessType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HomeAndConstructionBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HomeAndConstructionBusinessType setImage(Property\ImageProperty $image)
 * @method HomeAndConstructionBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HomeAndConstructionBusinessType setLegalName(Property\LegalNameProperty $legalName)
 * @method HomeAndConstructionBusinessType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HomeAndConstructionBusinessType setLocation(Property\LocationProperty $location)
 * @method HomeAndConstructionBusinessType setLogo(Property\LogoProperty $logo)
 * @method HomeAndConstructionBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HomeAndConstructionBusinessType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HomeAndConstructionBusinessType setMember(Property\MemberProperty $member)
 * @method HomeAndConstructionBusinessType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HomeAndConstructionBusinessType setNaics(Property\NaicsProperty $naics)
 * @method HomeAndConstructionBusinessType setName(Property\NameProperty $name)
 * @method HomeAndConstructionBusinessType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HomeAndConstructionBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HomeAndConstructionBusinessType setOwns(Property\OwnsProperty $owns)
 * @method HomeAndConstructionBusinessType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HomeAndConstructionBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HomeAndConstructionBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HomeAndConstructionBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HomeAndConstructionBusinessType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HomeAndConstructionBusinessType setReview(Property\ReviewProperty $review)
 * @method HomeAndConstructionBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method HomeAndConstructionBusinessType setSeeks(Property\SeeksProperty $seeks)
 * @method HomeAndConstructionBusinessType setSponsor(Property\SponsorProperty $sponsor)
 * @method HomeAndConstructionBusinessType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HomeAndConstructionBusinessType setTaxID(Property\TaxIDProperty $taxID)
 * @method HomeAndConstructionBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method HomeAndConstructionBusinessType setUrl(Property\UrlProperty $url)
 * @method HomeAndConstructionBusinessType setVatID(Property\VatIDProperty $vatID)
 */
class HomeAndConstructionBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HomeAndConstructionBusiness';
	}
}