<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TattooParlorType.
 * 
 * @method TattooParlorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TattooParlorType setAddress(Property\AddressProperty $address)
 * @method TattooParlorType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TattooParlorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TattooParlorType setAlumni(Property\AlumniProperty $alumni)
 * @method TattooParlorType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TattooParlorType setAward(Property\AwardProperty $award)
 * @method TattooParlorType setBrand(Property\BrandProperty $brand)
 * @method TattooParlorType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method TattooParlorType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TattooParlorType setDepartment(Property\DepartmentProperty $department)
 * @method TattooParlorType setDescription(Property\DescriptionProperty $description)
 * @method TattooParlorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TattooParlorType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method TattooParlorType setDuns(Property\DunsProperty $duns)
 * @method TattooParlorType setEmail(Property\EmailProperty $email)
 * @method TattooParlorType setEmployee(Property\EmployeeProperty $employee)
 * @method TattooParlorType setEvent(Property\EventProperty $event)
 * @method TattooParlorType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TattooParlorType setFounder(Property\FounderProperty $founder)
 * @method TattooParlorType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method TattooParlorType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method TattooParlorType setFunder(Property\FunderProperty $funder)
 * @method TattooParlorType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TattooParlorType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TattooParlorType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method TattooParlorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TattooParlorType setImage(Property\ImageProperty $image)
 * @method TattooParlorType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TattooParlorType setLegalName(Property\LegalNameProperty $legalName)
 * @method TattooParlorType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method TattooParlorType setLocation(Property\LocationProperty $location)
 * @method TattooParlorType setLogo(Property\LogoProperty $logo)
 * @method TattooParlorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TattooParlorType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method TattooParlorType setMember(Property\MemberProperty $member)
 * @method TattooParlorType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method TattooParlorType setNaics(Property\NaicsProperty $naics)
 * @method TattooParlorType setName(Property\NameProperty $name)
 * @method TattooParlorType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method TattooParlorType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TattooParlorType setOwns(Property\OwnsProperty $owns)
 * @method TattooParlorType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method TattooParlorType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TattooParlorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TattooParlorType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TattooParlorType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method TattooParlorType setReview(Property\ReviewProperty $review)
 * @method TattooParlorType setSameAs(Property\SameAsProperty $sameAs)
 * @method TattooParlorType setSeeks(Property\SeeksProperty $seeks)
 * @method TattooParlorType setSponsor(Property\SponsorProperty $sponsor)
 * @method TattooParlorType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method TattooParlorType setTaxID(Property\TaxIDProperty $taxID)
 * @method TattooParlorType setTelephone(Property\TelephoneProperty $telephone)
 * @method TattooParlorType setUrl(Property\UrlProperty $url)
 * @method TattooParlorType setVatID(Property\VatIDProperty $vatID)
 */
class TattooParlorType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TattooParlor';
	}
}