<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers;

use App\Models\AssetsTrucks;
use App\Models\VehicleService;
use Respect\Validation\Validator as v;
use App\Models\Guidelines;
use Illuminate\Pagination\LengthAwarePaginator;


class ProjectsController extends Controller {

    /*
     * @param $request
     * @param $response
     * @param $args
     */

    public function index ($request, $response, $args) {
        return $this->view->render($response, 'auth/Projects/home.twig');
    }
}
