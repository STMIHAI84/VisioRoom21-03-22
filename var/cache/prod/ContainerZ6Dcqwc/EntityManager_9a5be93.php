<?php

namespace ContainerZ6Dcqwc;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere504a = null;
    private $initializer6c616 = null;
    private static $publicPropertiesbcf09 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getConnection', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getMetadataFactory', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getExpressionBuilder', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'beginTransaction', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getCache', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'transactional', array('func' => $func), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'commit', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->commit();
    }
    public function rollback()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'rollback', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getClassMetadata', array('className' => $className), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'createQuery', array('dql' => $dql), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'createNamedQuery', array('name' => $name), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'createQueryBuilder', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'flush', array('entity' => $entity), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'clear', array('entityName' => $entityName), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->clear($entityName);
    }
    public function close()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'close', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->close();
    }
    public function persist($entity)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'persist', array('entity' => $entity), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'remove', array('entity' => $entity), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'refresh', array('entity' => $entity), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'detach', array('entity' => $entity), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'merge', array('entity' => $entity), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'contains', array('entity' => $entity), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getEventManager', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getConfiguration', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'isOpen', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getUnitOfWork', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getProxyFactory', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'initializeObject', array('obj' => $obj), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'getFilters', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'isFiltersStateClean', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'hasFilters', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return $this->valueHoldere504a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6c616 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere504a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere504a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere504a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, '__get', ['name' => $name], $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        if (isset(self::$publicPropertiesbcf09[$name])) {
            return $this->valueHoldere504a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere504a;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere504a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere504a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere504a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, '__isset', array('name' => $name), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere504a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere504a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, '__unset', array('name' => $name), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere504a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere504a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, '__clone', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        $this->valueHoldere504a = clone $this->valueHoldere504a;
    }
    public function __sleep()
    {
        $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, '__sleep', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
        return array('valueHoldere504a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6c616 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6c616;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6c616 && ($this->initializer6c616->__invoke($valueHoldere504a, $this, 'initializeProxy', array(), $this->initializer6c616) || 1) && $this->valueHoldere504a = $valueHoldere504a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere504a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere504a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
