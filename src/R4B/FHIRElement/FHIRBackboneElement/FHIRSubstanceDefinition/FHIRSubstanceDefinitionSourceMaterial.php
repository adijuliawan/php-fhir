<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 31st, 2022 07:37+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2022 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
 * 
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 *
 * Class FHIRSubstanceDefinitionSourceMaterial
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition
 */
class FHIRSubstanceDefinitionSourceMaterial extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_SOURCE_MATERIAL;
    const FIELD_TYPE = 'type';
    const FIELD_GENUS = 'genus';
    const FIELD_SPECIES = 'species';
    const FIELD_PART = 'part';
    const FIELD_COUNTRY_OF_ORIGIN = 'countryOfOrigin';

    /** @var string */
    private $_xmlns = '';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification that provides the origin of the raw material. Example: cat hair
     * would be an Animal source type.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $type = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism, typically referring to the Latin epithet of the genus
     * element of the plant/animal scientific name.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $genus = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism, typically referring to the Latin epithet of the
     * species of the plant/animal.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $species = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An anatomical origin of the source material within an organism.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $part = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries where the material is harvested.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $countryOfOrigin = [];

    /**
     * Validation map for fields in type SubstanceDefinition.SourceMaterial
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRSubstanceDefinitionSourceMaterial Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceDefinitionSourceMaterial::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_GENUS])) {
            if ($data[self::FIELD_GENUS] instanceof FHIRCodeableConcept) {
                $this->setGenus($data[self::FIELD_GENUS]);
            } else {
                $this->setGenus(new FHIRCodeableConcept($data[self::FIELD_GENUS]));
            }
        }
        if (isset($data[self::FIELD_SPECIES])) {
            if ($data[self::FIELD_SPECIES] instanceof FHIRCodeableConcept) {
                $this->setSpecies($data[self::FIELD_SPECIES]);
            } else {
                $this->setSpecies(new FHIRCodeableConcept($data[self::FIELD_SPECIES]));
            }
        }
        if (isset($data[self::FIELD_PART])) {
            if ($data[self::FIELD_PART] instanceof FHIRCodeableConcept) {
                $this->setPart($data[self::FIELD_PART]);
            } else {
                $this->setPart(new FHIRCodeableConcept($data[self::FIELD_PART]));
            }
        }
        if (isset($data[self::FIELD_COUNTRY_OF_ORIGIN])) {
            if (is_array($data[self::FIELD_COUNTRY_OF_ORIGIN])) {
                foreach($data[self::FIELD_COUNTRY_OF_ORIGIN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCountryOfOrigin($v);
                    } else {
                        $this->addCountryOfOrigin(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COUNTRY_OF_ORIGIN] instanceof FHIRCodeableConcept) {
                $this->addCountryOfOrigin($data[self::FIELD_COUNTRY_OF_ORIGIN]);
            } else {
                $this->addCountryOfOrigin(new FHIRCodeableConcept($data[self::FIELD_COUNTRY_OF_ORIGIN]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<SubstanceDefinitionSourceMaterial{$xmlns}></SubstanceDefinitionSourceMaterial>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification that provides the origin of the raw material. Example: cat hair
     * would be an Animal source type.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): ?FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A classification that provides the origin of the raw material. Example: cat hair
     * would be an Animal source type.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(?FHIRCodeableConcept $type = null): object
    {
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism, typically referring to the Latin epithet of the genus
     * element of the plant/animal scientific name.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getGenus(): ?FHIRCodeableConcept
    {
        return $this->genus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genus of an organism, typically referring to the Latin epithet of the genus
     * element of the plant/animal scientific name.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $genus
     * @return static
     */
    public function setGenus(?FHIRCodeableConcept $genus = null): object
    {
        $this->_trackValueSet($this->genus, $genus);
        $this->genus = $genus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism, typically referring to the Latin epithet of the
     * species of the plant/animal.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecies(): ?FHIRCodeableConcept
    {
        return $this->species;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The species of an organism, typically referring to the Latin epithet of the
     * species of the plant/animal.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $species
     * @return static
     */
    public function setSpecies(?FHIRCodeableConcept $species = null): object
    {
        $this->_trackValueSet($this->species, $species);
        $this->species = $species;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An anatomical origin of the source material within an organism.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getPart(): ?FHIRCodeableConcept
    {
        return $this->part;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An anatomical origin of the source material within an organism.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $part
     * @return static
     */
    public function setPart(?FHIRCodeableConcept $part = null): object
    {
        $this->_trackValueSet($this->part, $part);
        $this->part = $part;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries where the material is harvested.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountryOfOrigin(): ?array
    {
        return $this->countryOfOrigin;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries where the material is harvested.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $countryOfOrigin
     * @return static
     */
    public function addCountryOfOrigin(?FHIRCodeableConcept $countryOfOrigin = null): object
    {
        $this->_trackValueAdded();
        $this->countryOfOrigin[] = $countryOfOrigin;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries where the material is harvested.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $countryOfOrigin
     * @return static
     */
    public function setCountryOfOrigin(array $countryOfOrigin = []): object
    {
        if ([] !== $this->countryOfOrigin) {
            $this->_trackValuesRemoved(count($this->countryOfOrigin));
            $this->countryOfOrigin = [];
        }
        if ([] === $countryOfOrigin) {
            return $this;
        }
        foreach($countryOfOrigin as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCountryOfOrigin($v);
            } else {
                $this->addCountryOfOrigin(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGenus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecies())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PART] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCountryOfOrigin())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COUNTRY_OF_ORIGIN, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_SOURCE_MATERIAL, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENUS])) {
            $v = $this->getGenus();
            foreach($validationRules[self::FIELD_GENUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_SOURCE_MATERIAL, self::FIELD_GENUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENUS])) {
                        $errs[self::FIELD_GENUS] = [];
                    }
                    $errs[self::FIELD_GENUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIES])) {
            $v = $this->getSpecies();
            foreach($validationRules[self::FIELD_SPECIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_SOURCE_MATERIAL, self::FIELD_SPECIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIES])) {
                        $errs[self::FIELD_SPECIES] = [];
                    }
                    $errs[self::FIELD_SPECIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART])) {
            $v = $this->getPart();
            foreach($validationRules[self::FIELD_PART] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_SOURCE_MATERIAL, self::FIELD_PART, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART])) {
                        $errs[self::FIELD_PART] = [];
                    }
                    $errs[self::FIELD_PART][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY_OF_ORIGIN])) {
            $v = $this->getCountryOfOrigin();
            foreach($validationRules[self::FIELD_COUNTRY_OF_ORIGIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_SOURCE_MATERIAL, self::FIELD_COUNTRY_OF_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY_OF_ORIGIN])) {
                        $errs[self::FIELD_COUNTRY_OF_ORIGIN] = [];
                    }
                    $errs[self::FIELD_COUNTRY_OF_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, ?int $libxmlOpts = 591872): ?PHPFHIRTypeInterface
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf('FHIRSubstanceDefinitionSourceMaterial::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceDefinitionSourceMaterial::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceDefinitionSourceMaterial(null);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceDefinitionSourceMaterial)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceDefinitionSourceMaterial::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_GENUS === $n->nodeName) {
                $type->setGenus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIES === $n->nodeName) {
                $type->setSpecies(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PART === $n->nodeName) {
                $type->setPart(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_COUNTRY_OF_ORIGIN === $n->nodeName) {
                $type->addCountryOfOrigin(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getGenus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_GENUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSpecies())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SPECIES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPart())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PART);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCountryOfOrigin())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COUNTRY_OF_ORIGIN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getGenus())) {
            $out->{self::FIELD_GENUS} = $v;
        }
        if (null !== ($v = $this->getSpecies())) {
            $out->{self::FIELD_SPECIES} = $v;
        }
        if (null !== ($v = $this->getPart())) {
            $out->{self::FIELD_PART} = $v;
        }
        if ([] !== ($vs = $this->getCountryOfOrigin())) {
            $out->{self::FIELD_COUNTRY_OF_ORIGIN} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COUNTRY_OF_ORIGIN}[] = $v;
            }
        }

        return $out;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}