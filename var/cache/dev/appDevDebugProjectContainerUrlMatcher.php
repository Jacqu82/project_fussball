<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/club')) {
            // club_add
            if ('/club/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ClubController::addClubAction',  '_route' => 'club_add',);
            }

            if (0 === strpos($pathinfo, '/club/show')) {
                // club_show_id
                if (preg_match('#^/club/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_show_id')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::showClubIdAction',));
                }

                // club_show_all
                if ('/club/show' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ClubController::showAllClubsAction',  '_route' => 'club_show_all',);
                }

            }

            // club_edit
            if (0 === strpos($pathinfo, '/club/edit') && preg_match('#^/club/edit(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_edit')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::editClubAction',));
            }

            // club_delete
            if (0 === strpos($pathinfo, '/club/delete') && preg_match('#^/club/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'club_delete')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::deleteClubAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_club_delete;
                }

                return $ret;
            }
            not_club_delete:

        }

        // emblem_edit
        if (0 === strpos($pathinfo, '/emblem/edit') && preg_match('#^/emblem/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'emblem_edit')), array (  '_controller' => 'AppBundle\\Controller\\ClubController::editEmblemAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // admin_panel
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminPanelAction',  '_route' => 'admin_panel',);
        }

        // user_activate
        if (0 === strpos($pathinfo, '/activate') && preg_match('#^/activate/(?P<type>account|password|email)/(?P<id>\\d+)/(?P<token>[^/]++)(?:/(?P<value>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_activate')), array (  'value' => NULL,  '_controller' => 'AppBundle\\Controller\\UserController::activateAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/show')) {
                // user_show_all
                if ('/user/show' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showAllUsersAction',  '_route' => 'user_show_all',);
                }

                // user_show_id
                if (preg_match('#^/user/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show_id')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showUserIdAction',));
                }

            }

            // user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::editUserAction',));
            }

            // user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::deleteUserAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_user_delete;
                }

                return $ret;
            }
            not_user_delete:

        }

        elseif (0 === strpos($pathinfo, '/game')) {
            // game_add
            if ('/game/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\GameController::addGameAction',  '_route' => 'game_add',);
            }

            // game_show_id
            if (0 === strpos($pathinfo, '/game/show') && preg_match('#^/game/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'game_show_id')), array (  '_controller' => 'AppBundle\\Controller\\GameController::showGameIdAction',));
            }

            // game_edit
            if (0 === strpos($pathinfo, '/game/edit') && preg_match('#^/game/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'game_edit')), array (  '_controller' => 'AppBundle\\Controller\\GameController::editGameAction',));
            }

            // game_delete
            if (0 === strpos($pathinfo, '/game/delete') && preg_match('#^/game/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'game_delete')), array (  '_controller' => 'AppBundle\\Controller\\GameController::deleteGameAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_game_delete;
                }

                return $ret;
            }
            not_game_delete:

        }

        elseif (0 === strpos($pathinfo, '/player')) {
            // player_add
            if ('/player/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PlayerController::addPlayerAction',  '_route' => 'player_add',);
            }

            // player_show_id
            if (0 === strpos($pathinfo, '/player/show') && preg_match('#^/player/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'player_show_id')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::showPlayerIdAction',));
            }

            // player_edit
            if (0 === strpos($pathinfo, '/player/edit') && preg_match('#^/player/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'player_edit')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::editPlayerAction',));
            }

            // player_delete
            if (0 === strpos($pathinfo, '/player/delete') && preg_match('#^/player/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'player_delete')), array (  '_controller' => 'AppBundle\\Controller\\PlayerController::deletePlayerAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_player_delete;
                }

                return $ret;
            }
            not_player_delete:

        }

        elseif (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/round/show')) {
                // round_show_all
                if ('/round/show' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RoundController::showAllRoundsAction',  '_route' => 'round_show_all',);
                }

                // round_show_id
                if (preg_match('#^/round/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'round_show_id')), array (  '_controller' => 'AppBundle\\Controller\\RoundController::showRoundIdAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // app_user_register
                if ('/register' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'app_user_register',);
                }

                // register
                if ('/register/create' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::createAction',  '_route' => 'register',);
                }

            }

            // recovery
            if ('/recovery' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::recoveryAction',  '_route' => 'recovery',);
            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::logoutAction',  '_route' => 'logout',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
