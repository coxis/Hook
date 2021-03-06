<?php
namespace Asgard\Hook;

/**
 * Hooks Manager.
 * @author Michel Hognerud <michel@hognerud.com>
 */
interface HookManagerInterface {
	/**
	 * Trigger a hook.
	 * @param string    $name
	 * @param array     $args
	 * @param callable  $cb   Default callback.
	 * @param Chain     $chain
	*/
	public function trigger($name, array $args=[], $cb=null, &$chain=null);

	/**
	 * Check if a hook is present.
	 * @param string   $identifier
	 * @return boolean
	*/
	public function has($identifier);

	/**
	 * Return hooks.
	 * @param string $identifier Hook identifier.
	 * @return array Callbacks.
	*/
	public function get($identifier);

	/**
	 * Set a hook.
	 * @param string   $identifier
	 * @param callable $cb
	*/
	public function hook($identifier, $cb);

	/**
	 * Set a "pre" hook.
	 * @param string   $identifier
	 * @param callable $cb
	*/
	public function preHook($identifier, $cb);

	/**
	 * Set an "post" hook.
	 * @param string   $identifier
	 * @param callable $cb
	*/
	public function postHook($identifier, $cb);

	/**
	 * Set multiple hooks.
	 * @param array $hooks
	*/
	public function hooks(array $hooks);
}