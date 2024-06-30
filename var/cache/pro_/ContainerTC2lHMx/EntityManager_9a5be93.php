<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf901a = null;
    private $initializerb421b = null;
    private static $publicPropertiesd661e = [
        
    ];
    public function getConnection()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getConnection', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getMetadataFactory', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getExpressionBuilder', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'beginTransaction', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getCache', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'transactional', array('func' => $func), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'commit', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->commit();
    }
    public function rollback()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'rollback', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'createQuery', array('dql' => $dql), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'createQueryBuilder', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'flush', array('entity' => $entity), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'clear', array('entityName' => $entityName), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->clear($entityName);
    }
    public function close()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'close', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->close();
    }
    public function persist($entity)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'persist', array('entity' => $entity), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'remove', array('entity' => $entity), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'refresh', array('entity' => $entity), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'detach', array('entity' => $entity), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'merge', array('entity' => $entity), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'contains', array('entity' => $entity), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getEventManager', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getConfiguration', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'isOpen', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getUnitOfWork', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getProxyFactory', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'getFilters', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'isFiltersStateClean', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'hasFilters', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return $this->valueHolderf901a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb421b = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderf901a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf901a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf901a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, '__get', ['name' => $name], $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        if (isset(self::$publicPropertiesd661e[$name])) {
            return $this->valueHolderf901a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf901a;
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
        $targetObject = $this->valueHolderf901a;
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
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf901a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf901a;
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
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, '__isset', array('name' => $name), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf901a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf901a;
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
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, '__unset', array('name' => $name), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf901a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf901a;
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
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, '__clone', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        $this->valueHolderf901a = clone $this->valueHolderf901a;
    }
    public function __sleep()
    {
        $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, '__sleep', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
        return array('valueHolderf901a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb421b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb421b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb421b && ($this->initializerb421b->__invoke($valueHolderf901a, $this, 'initializeProxy', array(), $this->initializerb421b) || 1) && $this->valueHolderf901a = $valueHolderf901a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf901a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf901a;
    }
}
