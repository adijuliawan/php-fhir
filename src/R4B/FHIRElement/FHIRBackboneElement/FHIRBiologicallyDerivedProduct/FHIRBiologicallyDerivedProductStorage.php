<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBiologicallyDerivedProductStorageScale;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRPeriod;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * A material substance originating from a biological entity intended to be
 * transplanted or infused into another (possibly the same) biological entity.
 *
 * Class FHIRBiologicallyDerivedProductStorage
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct
 */
class FHIRBiologicallyDerivedProductStorage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE;
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_TEMPERATURE = 'temperature';
    const FIELD_TEMPERATURE_EXT = '_temperature';
    const FIELD_SCALE = 'scale';
    const FIELD_SCALE_EXT = '_scale';
    const FIELD_DURATION = 'duration';

    /** @var string */
    private $_xmlns = '';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of storage.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $description = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Storage temperature.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal
     */
    protected ?FHIRDecimal $temperature = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Temperature scale used.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBiologicallyDerivedProductStorageScale
     */
    protected ?FHIRBiologicallyDerivedProductStorageScale $scale = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Storage timeperiod.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPeriod
     */
    protected ?FHIRPeriod $duration = null;

    /**
     * Validation map for fields in type BiologicallyDerivedProduct.Storage
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRBiologicallyDerivedProductStorage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRBiologicallyDerivedProductStorage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TEMPERATURE]) || isset($data[self::FIELD_TEMPERATURE_EXT])) {
            $value = $data[self::FIELD_TEMPERATURE] ?? null;
            $ext = (isset($data[self::FIELD_TEMPERATURE_EXT]) && is_array($data[self::FIELD_TEMPERATURE_EXT])) ? $data[self::FIELD_TEMPERATURE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setTemperature($value);
                } else if (is_array($value)) {
                    $this->setTemperature(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setTemperature(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTemperature(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_SCALE]) || isset($data[self::FIELD_SCALE_EXT])) {
            $value = $data[self::FIELD_SCALE] ?? null;
            $ext = (isset($data[self::FIELD_SCALE_EXT]) && is_array($data[self::FIELD_SCALE_EXT])) ? $data[self::FIELD_SCALE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBiologicallyDerivedProductStorageScale) {
                    $this->setScale($value);
                } else if (is_array($value)) {
                    $this->setScale(new FHIRBiologicallyDerivedProductStorageScale(array_merge($ext, $value)));
                } else {
                    $this->setScale(new FHIRBiologicallyDerivedProductStorageScale([FHIRBiologicallyDerivedProductStorageScale::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setScale(new FHIRBiologicallyDerivedProductStorageScale($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRPeriod) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRPeriod($data[self::FIELD_DURATION]));
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
        return "<BiologicallyDerivedProductStorage{$xmlns}></BiologicallyDerivedProductStorage>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of storage.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getDescription(): ?FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of storage.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null): object
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Storage temperature.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal
     */
    public function getTemperature(): ?FHIRDecimal
    {
        return $this->temperature;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Storage temperature.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal $temperature
     * @return static
     */
    public function setTemperature($temperature = null): object
    {
        if (null !== $temperature && !($temperature instanceof FHIRDecimal)) {
            $temperature = new FHIRDecimal($temperature);
        }
        $this->_trackValueSet($this->temperature, $temperature);
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Temperature scale used.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBiologicallyDerivedProductStorageScale
     */
    public function getScale(): ?FHIRBiologicallyDerivedProductStorageScale
    {
        return $this->scale;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Temperature scale used.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBiologicallyDerivedProductStorageScale $scale
     * @return static
     */
    public function setScale(?FHIRBiologicallyDerivedProductStorageScale $scale = null): object
    {
        $this->_trackValueSet($this->scale, $scale);
        $this->scale = $scale;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Storage timeperiod.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPeriod
     */
    public function getDuration(): ?FHIRPeriod
    {
        return $this->duration;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Storage timeperiod.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPeriod $duration
     * @return static
     */
    public function setDuration(?FHIRPeriod $duration = null): object
    {
        $this->_trackValueSet($this->duration, $duration);
        $this->duration = $duration;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTemperature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEMPERATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getScale())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCALE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEMPERATURE])) {
            $v = $this->getTemperature();
            foreach($validationRules[self::FIELD_TEMPERATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE, self::FIELD_TEMPERATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEMPERATURE])) {
                        $errs[self::FIELD_TEMPERATURE] = [];
                    }
                    $errs[self::FIELD_TEMPERATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCALE])) {
            $v = $this->getScale();
            foreach($validationRules[self::FIELD_SCALE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE, self::FIELD_SCALE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCALE])) {
                        $errs[self::FIELD_SCALE] = [];
                    }
                    $errs[self::FIELD_SCALE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage
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
                throw new \DomainException(sprintf('FHIRBiologicallyDerivedProductStorage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRBiologicallyDerivedProductStorage::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRBiologicallyDerivedProductStorage(null);
        } elseif (!is_object($type) || !($type instanceof FHIRBiologicallyDerivedProductStorage)) {
            throw new \RuntimeException(sprintf(
                'FHIRBiologicallyDerivedProductStorage::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage or null, %s seen.',
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
            if (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TEMPERATURE === $n->nodeName) {
                $type->setTemperature(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_SCALE === $n->nodeName) {
                $type->setScale(FHIRBiologicallyDerivedProductStorageScale::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION === $n->nodeName) {
                $type->setDuration(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TEMPERATURE);
        if (null !== $n) {
            $pt = $type->getTemperature();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTemperature($n->nodeValue);
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
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTemperature())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEMPERATURE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getScale())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SCALE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTemperature())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEMPERATURE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEMPERATURE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getScale())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SCALE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBiologicallyDerivedProductStorageScale::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SCALE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $out->{self::FIELD_DURATION} = $v;
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