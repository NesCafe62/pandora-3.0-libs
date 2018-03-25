<?php
namespace pandora3\libs\App;

use pandora3\core\App\BaseApp;
use pandora3\libs\Controller\BaseController;

/**
 * @property BaseApp $app
 */
abstract class AppController extends BaseController {

	/**
	 * @var BaseApp $app
	 */
	protected $app;

	/**
	 * @param BaseApp $app
	 */
	public function __construct(BaseApp $app) {
		$this->app = $app;
		parent::__construct();
	}

	/**
	 * @return BaseApp
	 */
	private function getApp(): BaseApp {
		return $this->app;
	}

}