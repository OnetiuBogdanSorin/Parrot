<?php

namespace ContainerA7qZ2b1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder13285 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3cae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties55f69 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getConnection', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getMetadataFactory', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getExpressionBuilder', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'beginTransaction', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getCache', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'transactional', array('func' => $func), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->transactional($func);
    }

    public function commit()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'commit', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->commit();
    }

    public function rollback()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'rollback', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'createQuery', array('dql' => $dql), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'createQueryBuilder', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'flush', array('entity' => $entity), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'clear', array('entityName' => $entityName), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->clear($entityName);
    }

    public function close()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'close', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->close();
    }

    public function persist($entity)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'persist', array('entity' => $entity), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'remove', array('entity' => $entity), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'refresh', array('entity' => $entity), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'detach', array('entity' => $entity), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'merge', array('entity' => $entity), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'contains', array('entity' => $entity), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getEventManager', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getConfiguration', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'isOpen', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getUnitOfWork', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getProxyFactory', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'getFilters', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'isFiltersStateClean', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'hasFilters', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return $this->valueHolder13285->hasFilters();
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

        $instance->initializerc3cae = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder13285) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder13285 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder13285->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, '__get', ['name' => $name], $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        if (isset(self::$publicProperties55f69[$name])) {
            return $this->valueHolder13285->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13285;

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

        $targetObject = $this->valueHolder13285;
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
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13285;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder13285;
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
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, '__isset', array('name' => $name), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13285;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder13285;
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
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, '__unset', array('name' => $name), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13285;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder13285;
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
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, '__clone', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        $this->valueHolder13285 = clone $this->valueHolder13285;
    }

    public function __sleep()
    {
        $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, '__sleep', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;

        return array('valueHolder13285');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3cae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3cae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc3cae && ($this->initializerc3cae->__invoke($valueHolder13285, $this, 'initializeProxy', array(), $this->initializerc3cae) || 1) && $this->valueHolder13285 = $valueHolder13285;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder13285;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder13285;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
