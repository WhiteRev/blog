<?php

namespace Container1tgjibx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9fea4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere4cbe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb12f7 = [
        
    ];

    public function getConnection()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getConnection', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getMetadataFactory', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getExpressionBuilder', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'beginTransaction', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getCache', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getCache();
    }

    public function transactional($func)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'transactional', array('func' => $func), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'wrapInTransaction', array('func' => $func), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'commit', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->commit();
    }

    public function rollback()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'rollback', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getClassMetadata', array('className' => $className), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'createQuery', array('dql' => $dql), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'createNamedQuery', array('name' => $name), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'createQueryBuilder', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'flush', array('entity' => $entity), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'clear', array('entityName' => $entityName), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->clear($entityName);
    }

    public function close()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'close', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->close();
    }

    public function persist($entity)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'persist', array('entity' => $entity), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'remove', array('entity' => $entity), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'refresh', array('entity' => $entity), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'detach', array('entity' => $entity), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'merge', array('entity' => $entity), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getRepository', array('entityName' => $entityName), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'contains', array('entity' => $entity), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getEventManager', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getConfiguration', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'isOpen', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getUnitOfWork', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getProxyFactory', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'initializeObject', array('obj' => $obj), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'getFilters', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'isFiltersStateClean', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'hasFilters', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return $this->valueHolder9fea4->hasFilters();
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

        $instance->initializere4cbe = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder9fea4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9fea4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9fea4->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, '__get', ['name' => $name], $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        if (isset(self::$publicPropertiesb12f7[$name])) {
            return $this->valueHolder9fea4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fea4;

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

        $targetObject = $this->valueHolder9fea4;
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
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fea4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9fea4;
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
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, '__isset', array('name' => $name), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fea4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9fea4;
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
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, '__unset', array('name' => $name), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fea4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9fea4;
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
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, '__clone', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        $this->valueHolder9fea4 = clone $this->valueHolder9fea4;
    }

    public function __sleep()
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, '__sleep', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        return array('valueHolder9fea4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere4cbe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere4cbe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'initializeProxy', array(), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9fea4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9fea4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
