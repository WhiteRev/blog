<?php

namespace ContainerYEOobBG;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        if ($this->valueHolder9fea4 === $returnValue = $this->valueHolder9fea4->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializere4cbe = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9fea4) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9fea4 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializere4cbe && ($this->initializere4cbe->__invoke($valueHolder9fea4, $this, '__get', ['name' => $name], $this->initializere4cbe) || 1) && $this->valueHolder9fea4 = $valueHolder9fea4;

        if (isset(self::$publicPropertiesb12f7[$name])) {
            return $this->valueHolder9fea4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
