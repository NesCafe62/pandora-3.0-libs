<?php
namespace pandora3\libs\App;

use pandora3\core\Debug\CoreException;
use pandora3\core\Debug\Debug;

trait TRedirects {

	/**
	 * @var array $_redirects
	 */
	private $_redirects;

	/**
	 * @return array
	 */
	protected function _getRedirects(): array {
		if ($this->_redirects === null) {
			$this->_redirects = $this->getRedirects();
		}
		return $this->_redirects;
	}

	/**
	 * @param string $key
	 * @return string
	 */
	protected function redirect(string $key): string {
		$redirects = $this->_getRedirects();
		if (!isset($redirects[$key])) {
			Debug::logException(new CoreException(['REDIRECT_NOT_FOUND', static::class, $key], E_WARNING));
		}
		return $redirects[$key] ?? $redirects['default'] ?? '/';
	}

}