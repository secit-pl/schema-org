<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A preschool.
 * 
 * @method PreschoolType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PreschoolType setAddress(Property\AddressProperty $address)
 * @method PreschoolType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PreschoolType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PreschoolType setAlumni(Property\AlumniProperty $alumni)
 * @method PreschoolType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PreschoolType setAward(Property\AwardProperty $award)
 * @method PreschoolType setBrand(Property\BrandProperty $brand)
 * @method PreschoolType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PreschoolType setDepartment(Property\DepartmentProperty $department)
 * @method PreschoolType setDescription(Property\DescriptionProperty $description)
 * @method PreschoolType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PreschoolType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PreschoolType setDuns(Property\DunsProperty $duns)
 * @method PreschoolType setEmail(Property\EmailProperty $email)
 * @method PreschoolType setEmployee(Property\EmployeeProperty $employee)
 * @method PreschoolType setEvent(Property\EventProperty $event)
 * @method PreschoolType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PreschoolType setFounder(Property\FounderProperty $founder)
 * @method PreschoolType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PreschoolType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PreschoolType setFunder(Property\FunderProperty $funder)
 * @method PreschoolType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PreschoolType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PreschoolType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PreschoolType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PreschoolType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PreschoolType setImage(Property\ImageProperty $image)
 * @method PreschoolType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method PreschoolType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PreschoolType setKeywords(Property\KeywordsProperty $keywords)
 * @method PreschoolType setLegalName(Property\LegalNameProperty $legalName)
 * @method PreschoolType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PreschoolType setLocation(Property\LocationProperty $location)
 * @method PreschoolType setLogo(Property\LogoProperty $logo)
 * @method PreschoolType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PreschoolType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PreschoolType setMember(Property\MemberProperty $member)
 * @method PreschoolType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PreschoolType setNaics(Property\NaicsProperty $naics)
 * @method PreschoolType setName(Property\NameProperty $name)
 * @method PreschoolType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PreschoolType setOwns(Property\OwnsProperty $owns)
 * @method PreschoolType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PreschoolType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PreschoolType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PreschoolType setReview(Property\ReviewProperty $review)
 * @method PreschoolType setSameAs(Property\SameAsProperty $sameAs)
 * @method PreschoolType setSeeks(Property\SeeksProperty $seeks)
 * @method PreschoolType setSlogan(Property\SloganProperty $slogan)
 * @method PreschoolType setSponsor(Property\SponsorProperty $sponsor)
 * @method PreschoolType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PreschoolType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PreschoolType setTaxID(Property\TaxIDProperty $taxID)
 * @method PreschoolType setTelephone(Property\TelephoneProperty $telephone)
 * @method PreschoolType setUrl(Property\UrlProperty $url)
 * @method PreschoolType setVatID(Property\VatIDProperty $vatID)
 */
class PreschoolType extends EducationalOrganizationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Preschool';
	}
}