<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/reservas')) {
            if (0 === strpos($pathinfo, '/reservas_')) {
                if (0 === strpos($pathinfo, '/reservas_hora')) {
                    // reservas_hora
                    if (rtrim($pathinfo, '/') === '/reservas_hora') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'reservas_hora');
                        }

                        return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\ReservaHoraController::indexAction',  '_route' => 'reservas_hora',);
                    }

                    // reservas_hora_show
                    if (preg_match('#^/reservas_hora/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_hora_show')), array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\ReservaHoraController::showAction',));
                    }

                    // reservas_hora_new
                    if ($pathinfo === '/reservas_hora/new') {
                        return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\ReservaHoraController::newAction',  '_route' => 'reservas_hora_new',);
                    }

                    // reservas_hora_create
                    if ($pathinfo === '/reservas_hora/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_reservas_hora_create;
                        }

                        return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\ReservaHoraController::createAction',  '_route' => 'reservas_hora_create',);
                    }
                    not_reservas_hora_create:

                    // reservas_hora_edit
                    if (preg_match('#^/reservas_hora/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_hora_edit')), array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\ReservaHoraController::editAction',));
                    }

                    // reservas_hora_update
                    if (preg_match('#^/reservas_hora/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_reservas_hora_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_hora_update')), array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\ReservaHoraController::updateAction',));
                    }
                    not_reservas_hora_update:

                    // reservas_hora_delete
                    if (preg_match('#^/reservas_hora/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_reservas_hora_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_hora_delete')), array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\ReservaHoraController::deleteAction',));
                    }
                    not_reservas_hora_delete:

                }

                if (0 === strpos($pathinfo, '/reservas_dia')) {
                    // reservas_dia
                    if (rtrim($pathinfo, '/') === '/reservas_dia') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'reservas_dia');
                        }

                        return array (  '_controller' => 'CosacoGesenBundle:ReservaDia:index',  '_route' => 'reservas_dia',);
                    }

                    // reservas_dia_show
                    if (preg_match('#^/reservas_dia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_dia_show')), array (  '_controller' => 'CosacoGesenBundle:ReservaDia:show',));
                    }

                    // reservas_dia_new
                    if ($pathinfo === '/reservas_dia/new') {
                        return array (  '_controller' => 'CosacoGesenBundle:ReservaDia:new',  '_route' => 'reservas_dia_new',);
                    }

                    // reservas_dia_create
                    if ($pathinfo === '/reservas_dia/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_reservas_dia_create;
                        }

                        return array (  '_controller' => 'CosacoGesenBundle:ReservaDia:create',  '_route' => 'reservas_dia_create',);
                    }
                    not_reservas_dia_create:

                    // reservas_dia_edit
                    if (preg_match('#^/reservas_dia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_dia_edit')), array (  '_controller' => 'CosacoGesenBundle:ReservaDia:edit',));
                    }

                    // reservas_dia_update
                    if (preg_match('#^/reservas_dia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_reservas_dia_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_dia_update')), array (  '_controller' => 'CosacoGesenBundle:ReservaDia:update',));
                    }
                    not_reservas_dia_update:

                    // reservas_dia_delete
                    if (preg_match('#^/reservas_dia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_reservas_dia_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_dia_delete')), array (  '_controller' => 'CosacoGesenBundle:ReservaDia:delete',));
                    }
                    not_reservas_dia_delete:

                }

            }

            // reservas
            if (rtrim($pathinfo, '/') === '/reservas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservas');
                }

                return array (  '_controller' => 'CosacoGesenBundle:Reserva:index',  '_route' => 'reservas',);
            }

            // reservas_show
            if (preg_match('#^/reservas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_show')), array (  '_controller' => 'CosacoGesenBundle:Reserva:show',));
            }

            // reservas_new
            if ($pathinfo === '/reservas/new') {
                return array (  '_controller' => 'CosacoGesenBundle:Reserva:new',  '_route' => 'reservas_new',);
            }

            // reservas_create
            if ($pathinfo === '/reservas/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reservas_create;
                }

                return array (  '_controller' => 'CosacoGesenBundle:Reserva:create',  '_route' => 'reservas_create',);
            }
            not_reservas_create:

            // reservas_edit
            if (preg_match('#^/reservas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_edit')), array (  '_controller' => 'CosacoGesenBundle:Reserva:edit',));
            }

            // reservas_update
            if (preg_match('#^/reservas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_reservas_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_update')), array (  '_controller' => 'CosacoGesenBundle:Reserva:update',));
            }
            not_reservas_update:

            // reservas_delete
            if (preg_match('#^/reservas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_reservas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservas_delete')), array (  '_controller' => 'CosacoGesenBundle:Reserva:delete',));
            }
            not_reservas_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // gsn_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\SeguridadController::loginCheckAction',  '_route' => 'gsn_login_check',);
                }

                // gsn_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\SeguridadController::loginAction',  '_route' => 'gsn_login',);
                }

            }

            // gsn_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\SeguridadController::logoutAction',  '_route' => 'gsn_logout',);
            }

        }

        // _home_page
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home_page');
            }

            return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\HorarioController::horarioIndexAction',  '_route' => '_home_page',);
        }

        if (0 === strpos($pathinfo, '/horario')) {
            // _horario
            if (preg_match('#^/horario(?:/(?P<id_dep>\\d+)(?:/(?P<fecha>\\d+))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_horario')), array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\HorarioController::showAction',  'id_dep' => NULL,  'fecha' => NULL,));
            }

            // _home_horario
            if (rtrim($pathinfo, '/') === '/horario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_home_horario');
                }

                return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\HorarioController::horarioIndexAction',  '_route' => '_home_horario',);
            }

            // _horario_cargar
            if ($pathinfo === '/horario/cargar') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__horario_cargar;
                }

                return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\HorarioController::loadAction',  '_route' => '_horario_cargar',);
            }
            not__horario_cargar:

            // _horario_nueva_reserva
            if ($pathinfo === '/horario/nueva') {
                return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\HorarioController::newAction',  '_route' => '_horario_nueva_reserva',);
            }

            // _horario_crear_reserva
            if ($pathinfo === '/horario/crear') {
                return array (  '_controller' => 'Cosaco\\GesenBundle\\Controller\\HorarioController::crearAction',  '_route' => '_horario_crear_reserva',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
