<?php

namespace Vibrato\Traits;

/**
 * @since 1.0.0
 */
trait Booted
{
    /**
     * Flag if Theme has been booted
     *
     * @var bool
     */
    public $booted = false;

    /**
     * Singleton implementation
     *
     * @since 1.0.0
     *
     * @return Theme
     */
    public static function instance()
    {
        static $instance = null;

        if ($instance === null) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * Check if Theme has booted
     *
     * @since 1.0.0
     *
     */
    public static function is_booted()
    {
        return static::instance()->booted;
    }

    /**
     * Boot Theme
     *
     * @since 1.0.0
     *
     */
    public static function boot()
    {
        if (static::is_booted()) {
            return;
        }

        static::instance()->booted = true;

        static::instance()->register();
    }
}
