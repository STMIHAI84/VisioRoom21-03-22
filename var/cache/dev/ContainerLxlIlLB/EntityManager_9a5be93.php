<?php

namespace ContainerLxlIlLB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0f508 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8225b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb81ac = [
        
    ];

    public function getConnection()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getConnection', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getMetadataFactory', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getExpressionBuilder', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'beginTransaction', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getCache', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'transactional', array('func' => $func), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'commit', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->commit();
    }

    public function rollback()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'rollback', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getClassMetadata', array('className' => $className), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'createQuery', array('dql' => $dql), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'createNamedQuery', array('name' => $name), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'createQueryBuilder', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'flush', array('entity' => $entity), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'clear', array('entityName' => $entityName), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->clear($entityName);
    }

    public function close()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'close', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->close();
    }

    public function persist($entity)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'persist', array('entity' => $entity), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'remove', array('entity' => $entity), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'refresh', array('entity' => $entity), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'detach', array('entity' => $entity), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'merge', array('entity' => $entity), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'contains', array('entity' => $entity), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getEventManager', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getConfiguration', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'isOpen', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getUnitOfWork', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getProxyFactory', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'initializeObject', array('obj' => $obj), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'getFilters', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'isFiltersStateClean', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'hasFilters', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return $this->valueHolder0f508->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer8225b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0f508) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0f508 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0f508->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, '__get', ['name' => $name], $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        if (isset(self::$publicPropertiesb81ac[$name])) {
            return $this->valueHolder0f508->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f508;

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

        $targetObject = $this->valueHolder0f508;
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
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f508;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0f508;
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
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, '__isset', array('name' => $name), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f508;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0f508;
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
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, '__unset', array('name' => $name), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f508;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0f508;
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
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, '__clone', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        $this->valueHolder0f508 = clone $this->valueHolder0f508;
    }

    public function __sleep()
    {
        $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, '__sleep', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;

        return array('valueHolder0f508');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8225b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8225b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8225b && ($this->initializer8225b->__invoke($valueHolder0f508, $this, 'initializeProxy', array(), $this->initializer8225b) || 1) && $this->valueHolder0f508 = $valueHolder0f508;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0f508;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0f508;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
