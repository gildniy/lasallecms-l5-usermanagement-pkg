<?php namespace Lasallecms\Usermanagement\Http\Controllers\AdminAuth;

/**
 *
 * User Management package for the LaSalle Content Management System, based on the Laravel 5 Framework
 * Copyright (C) 2015  The South LaSalle Trading Corporation
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @package    User Management package for the LaSalle Content Management System
 * @version    1.0.0
 * @link       http://LaSalleCMS.com
 * @copyright  (c) 2015, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */

use Lasallecms\Usermanagement\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;


class AdminLogoutController extends Controller {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;


    public function __construct() {
        $this->middleware(\Lasallecms\Usermanagement\Http\Middleware\Admin\AdminMustBeLoggedInCheck::class, ['except' => 'index']);
        $this->middleware(\Lasallecms\Usermanagement\Http\Middleware\Admin\CustomAdminAuthChecks::class, ['only' => 'post']);
    }


    /**
     * Admin "are you sure you want to logout?" form
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Guard $auth) {
        return view('usermanagement::admin/logout/'.config('auth.admin_logout_view_folder').'/logout');
    }


    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guard $auth) {
        $auth->logout();
        return view('usermanagement::admin/logout_confirmation/confirmed');
    }
}