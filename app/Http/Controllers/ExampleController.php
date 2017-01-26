<?php
/**
 * Part of the evias/miners-dashboard package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    evias/miners-dashboard
 * @subpackage Controllers
 * @version    1.0.0
 * @author     Grégory Saive <greg@evias.be>
 * @license    MIT License
 * @copyright  (c) 2017, Grégory Saive
 */
namespace eMD\Http\Controllers;

use Illuminate\Container\Container;

class ExampleController
    extends Controller
{
    private $app;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * [helloWorld description]
     * @return [type] [description]
     */
    public function helloWorld()
    {
        $html = "Hello, World!" . "<br />"
              . "Engine: " . $this->app->version() . "<br />"
              . "Author: Grégory Saive &lt;greg_at_evias.be&gt;" . "<br />"
        ;

        return $html;
    }
}
