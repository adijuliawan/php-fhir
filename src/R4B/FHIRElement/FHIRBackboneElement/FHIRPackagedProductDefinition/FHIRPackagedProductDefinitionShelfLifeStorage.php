<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity\FHIRDuration;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * A medically related item or items, in a container or package.
 *
 * Class FHIRPackagedProductDefinitionShelfLifeStorage
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition
 */
class FHIRPackagedProductDefinitionShelfLifeStorage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_SHELF_LIFE_STORAGE;
    const FIELD_TYPE = 'type';
    const FIELD_PERIOD_DURATION = 'periodDuration';
    const FIELD_PERIOD_STRING = 'periodString';
    const FIELD_PERIOD_STRING_EXT = '_periodString';
    const FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE = 'specialPrecautionsForStorage';

    /** @var string */
    private $_xmlns = '';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This describes the shelf life, taking into account various scenarios such as
     * shelf life of the packaged Medicinal Product itself, shelf life after
     * transformation where necessary and shelf life after the first opening of a
     * bottle, etc. The shelf life type shall be specified using an appropriate
     * controlled vocabulary The controlled term and the controlled term identifier
     * shall be specified.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $type = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The shelf life time period can be specified using a numerical value for the
     * period of time and its unit of time measurement The unit of measurement shall be
     * specified in accordance with ISO 11240 and the resulting terminology The symbol
     * and the symbol identifier shall be used.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected ?FHIRDuration $periodDuration = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The shelf life time period can be specified using a numerical value for the
     * period of time and its unit of time measurement The unit of measurement shall be
     * specified in accordance with ISO 11240 and the resulting terminology The symbol
     * and the symbol identifier shall be used.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $periodString = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special precautions for storage, if any, can be specified using an appropriate
     * controlled vocabulary. The controlled term and the controlled term identifier
     * shall be specified.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $specialPrecautionsForStorage = [];

    /**
     * Validation map for fields in type PackagedProductDefinition.ShelfLifeStorage
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRPackagedProductDefinitionShelfLifeStorage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPackagedProductDefinitionShelfLifeStorage::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_PERIOD_DURATION])) {
            if ($data[self::FIELD_PERIOD_DURATION] instanceof FHIRDuration) {
                $this->setPeriodDuration($data[self::FIELD_PERIOD_DURATION]);
            } else {
                $this->setPeriodDuration(new FHIRDuration($data[self::FIELD_PERIOD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_PERIOD_STRING]) || isset($data[self::FIELD_PERIOD_STRING_EXT])) {
            $value = $data[self::FIELD_PERIOD_STRING] ?? null;
            $ext = (isset($data[self::FIELD_PERIOD_STRING_EXT]) && is_array($data[self::FIELD_PERIOD_STRING_EXT])) ? $data[self::FIELD_PERIOD_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPeriodString($value);
                } else if (is_array($value)) {
                    $this->setPeriodString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPeriodString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPeriodString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE])) {
            if (is_array($data[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE])) {
                foreach($data[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialPrecautionsForStorage($v);
                    } else {
                        $this->addSpecialPrecautionsForStorage(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE] instanceof FHIRCodeableConcept) {
                $this->addSpecialPrecautionsForStorage($data[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE]);
            } else {
                $this->addSpecialPrecautionsForStorage(new FHIRCodeableConcept($data[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE]));
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
        return "<PackagedProductDefinitionShelfLifeStorage{$xmlns}></PackagedProductDefinitionShelfLifeStorage>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This describes the shelf life, taking into account various scenarios such as
     * shelf life of the packaged Medicinal Product itself, shelf life after
     * transformation where necessary and shelf life after the first opening of a
     * bottle, etc. The shelf life type shall be specified using an appropriate
     * controlled vocabulary The controlled term and the controlled term identifier
     * shall be specified.
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
     * This describes the shelf life, taking into account various scenarios such as
     * shelf life of the packaged Medicinal Product itself, shelf life after
     * transformation where necessary and shelf life after the first opening of a
     * bottle, etc. The shelf life type shall be specified using an appropriate
     * controlled vocabulary The controlled term and the controlled term identifier
     * shall be specified.
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
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The shelf life time period can be specified using a numerical value for the
     * period of time and its unit of time measurement The unit of measurement shall be
     * specified in accordance with ISO 11240 and the resulting terminology The symbol
     * and the symbol identifier shall be used.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getPeriodDuration(): ?FHIRDuration
    {
        return $this->periodDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The shelf life time period can be specified using a numerical value for the
     * period of time and its unit of time measurement The unit of measurement shall be
     * specified in accordance with ISO 11240 and the resulting terminology The symbol
     * and the symbol identifier shall be used.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity\FHIRDuration $periodDuration
     * @return static
     */
    public function setPeriodDuration(?FHIRDuration $periodDuration = null): object
    {
        $this->_trackValueSet($this->periodDuration, $periodDuration);
        $this->periodDuration = $periodDuration;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The shelf life time period can be specified using a numerical value for the
     * period of time and its unit of time measurement The unit of measurement shall be
     * specified in accordance with ISO 11240 and the resulting terminology The symbol
     * and the symbol identifier shall be used.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getPeriodString(): ?FHIRString
    {
        return $this->periodString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The shelf life time period can be specified using a numerical value for the
     * period of time and its unit of time measurement The unit of measurement shall be
     * specified in accordance with ISO 11240 and the resulting terminology The symbol
     * and the symbol identifier shall be used.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $periodString
     * @return static
     */
    public function setPeriodString($periodString = null): object
    {
        if (null !== $periodString && !($periodString instanceof FHIRString)) {
            $periodString = new FHIRString($periodString);
        }
        $this->_trackValueSet($this->periodString, $periodString);
        $this->periodString = $periodString;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special precautions for storage, if any, can be specified using an appropriate
     * controlled vocabulary. The controlled term and the controlled term identifier
     * shall be specified.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialPrecautionsForStorage(): ?array
    {
        return $this->specialPrecautionsForStorage;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special precautions for storage, if any, can be specified using an appropriate
     * controlled vocabulary. The controlled term and the controlled term identifier
     * shall be specified.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $specialPrecautionsForStorage
     * @return static
     */
    public function addSpecialPrecautionsForStorage(?FHIRCodeableConcept $specialPrecautionsForStorage = null): object
    {
        $this->_trackValueAdded();
        $this->specialPrecautionsForStorage[] = $specialPrecautionsForStorage;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Special precautions for storage, if any, can be specified using an appropriate
     * controlled vocabulary. The controlled term and the controlled term identifier
     * shall be specified.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $specialPrecautionsForStorage
     * @return static
     */
    public function setSpecialPrecautionsForStorage(array $specialPrecautionsForStorage = []): object
    {
        if ([] !== $this->specialPrecautionsForStorage) {
            $this->_trackValuesRemoved(count($this->specialPrecautionsForStorage));
            $this->specialPrecautionsForStorage = [];
        }
        if ([] === $specialPrecautionsForStorage) {
            return $this;
        }
        foreach($specialPrecautionsForStorage as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialPrecautionsForStorage($v);
            } else {
                $this->addSpecialPrecautionsForStorage(new FHIRCodeableConcept($v));
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
        if (null !== ($v = $this->getPeriodDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriodString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD_STRING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecialPrecautionsForStorage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_SHELF_LIFE_STORAGE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD_DURATION])) {
            $v = $this->getPeriodDuration();
            foreach($validationRules[self::FIELD_PERIOD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_SHELF_LIFE_STORAGE, self::FIELD_PERIOD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_DURATION])) {
                        $errs[self::FIELD_PERIOD_DURATION] = [];
                    }
                    $errs[self::FIELD_PERIOD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD_STRING])) {
            $v = $this->getPeriodString();
            foreach($validationRules[self::FIELD_PERIOD_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_SHELF_LIFE_STORAGE, self::FIELD_PERIOD_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_STRING])) {
                        $errs[self::FIELD_PERIOD_STRING] = [];
                    }
                    $errs[self::FIELD_PERIOD_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE])) {
            $v = $this->getSpecialPrecautionsForStorage();
            foreach($validationRules[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_SHELF_LIFE_STORAGE, self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE])) {
                        $errs[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE] = [];
                    }
                    $errs[self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage
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
                throw new \DomainException(sprintf('FHIRPackagedProductDefinitionShelfLifeStorage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPackagedProductDefinitionShelfLifeStorage::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRPackagedProductDefinitionShelfLifeStorage(null);
        } elseif (!is_object($type) || !($type instanceof FHIRPackagedProductDefinitionShelfLifeStorage)) {
            throw new \RuntimeException(sprintf(
                'FHIRPackagedProductDefinitionShelfLifeStorage::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage or null, %s seen.',
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
            } elseif (self::FIELD_PERIOD_DURATION === $n->nodeName) {
                $type->setPeriodDuration(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_PERIOD_STRING === $n->nodeName) {
                $type->setPeriodString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE === $n->nodeName) {
                $type->addSpecialPrecautionsForStorage(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PERIOD_STRING);
        if (null !== $n) {
            $pt = $type->getPeriodString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPeriodString($n->nodeValue);
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
        if (null !== ($v = $this->getPeriodDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriodString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIOD_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSpecialPrecautionsForStorage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE);
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
        if (null !== ($v = $this->getPeriodDuration())) {
            $out->{self::FIELD_PERIOD_DURATION} = $v;
        }
        if (null !== ($v = $this->getPeriodString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PERIOD_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PERIOD_STRING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSpecialPrecautionsForStorage())) {
            $out->{self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPECIAL_PRECAUTIONS_FOR_STORAGE}[] = $v;
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