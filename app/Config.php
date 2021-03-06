<?php
/**
 * Config class.
 *
 * @copyright YetiForce Sp. z o.o.
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */

namespace App;

class Config extends \Conf\Config
{
	/**
	 * Requesrt start time.
	 *
	 * @var int
	 */
	public static $startTime;

	/**
	 * CRM root directory.
	 *
	 * @var string
	 */
	public static $rootDirectory;

	/**
	 * Request process type.
	 *
	 * @var string
	 */
	public static $processType;

	/**
	 * Request process name.
	 *
	 * @var string
	 */
	public static $processName;

	/**
	 * Js environment variables.
	 *
	 * @var array
	 */
	private static $jsEnv = [];

	/**
	 * Get all js configuratin in json.
	 *
	 * @return type
	 */
	public static function getJsEnv()
	{
		return Json::encode(static::$jsEnv);
	}

	/**
	 * Set js environment variables.
	 *
	 * @param string $key
	 * @param mixed  $value
	 */
	public static function setJsEnv($key, $value)
	{
		static::$jsEnv[$key] = $value;
	}
}
