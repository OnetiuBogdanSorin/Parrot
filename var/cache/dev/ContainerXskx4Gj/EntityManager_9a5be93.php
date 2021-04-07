<?php

namespace ContainerXskx4Gj;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfb69e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5ea91 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2df2d = [
        
    ];

    public function getConnection()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getConnection', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getMetadataFactory', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getExpressionBuilder', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'beginTransaction', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getCache', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'transactional', array('func' => $func), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->transactional($func);
    }

    public function commit()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'commit', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->commit();
    }

    public function rollback()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'rollback', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getClassMetadata', array('className' => $className), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'createQuery', array('dql' => $dql), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'createNamedQuery', array('name' => $name), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'createQueryBuilder', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'flush', array('entity' => $entity), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'clear', array('entityName' => $entityName), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->clear($entityName);
    }

    public function close()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'close', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->close();
    }

    public function persist($entity)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'persist', array('entity' => $entity), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'remove', array('entity' => $entity), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'refresh', array('entity' => $entity), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'detach', array('entity' => $entity), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'merge', array('entity' => $entity), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'contains', array('entity' => $entity), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getEventManager', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getConfiguration', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'isOpen', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getUnitOfWork', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getProxyFactory', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'initializeObject', array('obj' => $obj), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'getFilters', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'isFiltersStateClean', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'hasFilters', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return $this->valueHolderfb69e->hasFilters();
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

        $instance->initializer5ea91 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfb69e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfb69e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfb69e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, '__get', ['name' => $name], $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        if (isset(self::$publicProperties2df2d[$name])) {
            return $this->valueHolderfb69e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb69e;

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

        $targetObject = $this->valueHolderfb69e;
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
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb69e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfb69e;
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
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, '__isset', array('name' => $name), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb69e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfb69e;
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
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, '__unset', array('name' => $name), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb69e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfb69e;
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
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, '__clone', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        $this->valueHolderfb69e = clone $this->valueHolderfb69e;
    }

    public function __sleep()
    {
        $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, '__sleep', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;

        return array('valueHolderfb69e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5ea91 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5ea91;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5ea91 && ($this->initializer5ea91->__invoke($valueHolderfb69e, $this, 'initializeProxy', array(), $this->initializer5ea91) || 1) && $this->valueHolderfb69e = $valueHolderfb69e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb69e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb69e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
