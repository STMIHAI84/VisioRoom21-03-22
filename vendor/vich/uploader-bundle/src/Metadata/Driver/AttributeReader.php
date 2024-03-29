<?php

namespace Vich\UploaderBundle\Metadata\Driver;

use Doctrine\Common\Annotations\Reader;
use ReflectionAttribute;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;
use Vich\UploaderBundle\Mapping\AnnotationInterface;

/**
 * @internal
 */
final class AttributeReader implements Reader
{
    public function getClassAnnotation(ReflectionClass $class, $annotationName): ?AnnotationInterface
    {
        return $this->getClassAnnotations($class)[$annotationName] ?? null;
    }

    /** @return AnnotationInterface[] */
    public function getClassAnnotations(ReflectionClass $class): array
    {
        return $this->convertToAttributeInstances($class->getAttributes());
    }

    /**
     * @param ReflectionAttribute[] $attributes
     *
     * @return AnnotationInterface[]
     */
    private function convertToAttributeInstances(array $attributes): array
    {
        $instances = [];

        foreach ($attributes as $attribute) {
            $attributeName = $attribute->getName();
            $instance = $attribute->newInstance();

            if (!$instance instanceof AnnotationInterface) {
                continue;
            }

            $instances[$attributeName] = $instance;
        }

        return $instances;
    }

    public function getMethodAnnotation(ReflectionMethod $method, $annotationName): ?AnnotationInterface
    {
        return $this->getMethodAnnotations($method)[$annotationName] ?? null;
    }

    /** @return AnnotationInterface[] */
    public function getMethodAnnotations(ReflectionMethod $method): array
    {
        return $this->convertToAttributeInstances($method->getAttributes());
    }

    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName): ?AnnotationInterface
    {
        return $this->getPropertyAnnotations($property)[$annotationName] ?? null;
    }

    /** @return AnnotationInterface[] */
    public function getPropertyAnnotations(ReflectionProperty $property): array
    {
        return $this->convertToAttributeInstances($property->getAttributes());
    }
}
