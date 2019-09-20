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

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/planning')) {
            // planning_index
            if ('/planning' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_planning_index;
                }

                $ret = array (  '_controller' => 'ReservationBundle\\Controller\\PlanningController::indexAction',  '_route' => 'planning_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'planning_index'));
                }

                return $ret;
            }
            not_planning_index:

            // planning_new
            if ('/planning/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_planning_new;
                }

                return array (  '_controller' => 'ReservationBundle\\Controller\\PlanningController::newAction',  '_route' => 'planning_new',);
            }
            not_planning_new:

            // planning_show
            if (preg_match('#^/planning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_planning_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_show')), array (  '_controller' => 'ReservationBundle\\Controller\\PlanningController::showAction',));
            }
            not_planning_show:

            // planning_edit
            if (preg_match('#^/planning/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_planning_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_edit')), array (  '_controller' => 'ReservationBundle\\Controller\\PlanningController::editAction',));
            }
            not_planning_edit:

            // planning_delete
            if (preg_match('#^/planning/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_planning_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planning_delete')), array (  '_controller' => 'ReservationBundle\\Controller\\PlanningController::deleteAction',));
            }
            not_planning_delete:

        }

        elseif (0 === strpos($pathinfo, '/promo')) {
            // promo_index
            if ('/promo' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_promo_index;
                }

                $ret = array (  '_controller' => 'ReservationBundle\\Controller\\PromoController::indexAction',  '_route' => 'promo_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'promo_index'));
                }

                return $ret;
            }
            not_promo_index:

            // promo_new
            if ('/promo/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_promo_new;
                }

                return array (  '_controller' => 'ReservationBundle\\Controller\\PromoController::newAction',  '_route' => 'promo_new',);
            }
            not_promo_new:

            // promo_show
            if (preg_match('#^/promo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_promo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_show')), array (  '_controller' => 'ReservationBundle\\Controller\\PromoController::showAction',));
            }
            not_promo_show:

            // promo_edit
            if (preg_match('#^/promo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_promo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_edit')), array (  '_controller' => 'ReservationBundle\\Controller\\PromoController::editAction',));
            }
            not_promo_edit:

            // promo_delete
            if (preg_match('#^/promo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_promo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_delete')), array (  '_controller' => 'ReservationBundle\\Controller\\PromoController::deleteAction',));
            }
            not_promo_delete:

        }

        elseif (0 === strpos($pathinfo, '/formateur')) {
            // formateur_index
            if ('/formateur' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_formateur_index;
                }

                $ret = array (  '_controller' => 'ReservationBundle\\Controller\\FormateurController::indexAction',  '_route' => 'formateur_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'formateur_index'));
                }

                return $ret;
            }
            not_formateur_index:

            // formateur_new
            if ('/formateur/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_formateur_new;
                }

                return array (  '_controller' => 'ReservationBundle\\Controller\\FormateurController::newAction',  '_route' => 'formateur_new',);
            }
            not_formateur_new:

            // formateur_show
            if (preg_match('#^/formateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_formateur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formateur_show')), array (  '_controller' => 'ReservationBundle\\Controller\\FormateurController::showAction',));
            }
            not_formateur_show:

            // formateur_edit
            if (preg_match('#^/formateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_formateur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formateur_edit')), array (  '_controller' => 'ReservationBundle\\Controller\\FormateurController::editAction',));
            }
            not_formateur_edit:

            // formateur_delete
            if (preg_match('#^/formateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_formateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formateur_delete')), array (  '_controller' => 'ReservationBundle\\Controller\\FormateurController::deleteAction',));
            }
            not_formateur_delete:

        }

        elseif (0 === strpos($pathinfo, '/salle')) {
            // salle_index
            if ('/salle' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_salle_index;
                }

                $ret = array (  '_controller' => 'ReservationBundle\\Controller\\SalleController::indexAction',  '_route' => 'salle_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'salle_index'));
                }

                return $ret;
            }
            not_salle_index:

            // salle_new
            if ('/salle/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_salle_new;
                }

                return array (  '_controller' => 'ReservationBundle\\Controller\\SalleController::newAction',  '_route' => 'salle_new',);
            }
            not_salle_new:

            // salle_show
            if (preg_match('#^/salle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_salle_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_show')), array (  '_controller' => 'ReservationBundle\\Controller\\SalleController::showAction',));
            }
            not_salle_show:

            // salle_edit
            if (preg_match('#^/salle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_salle_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_edit')), array (  '_controller' => 'ReservationBundle\\Controller\\SalleController::editAction',));
            }
            not_salle_edit:

            // salle_delete
            if (preg_match('#^/salle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_salle_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_delete')), array (  '_controller' => 'ReservationBundle\\Controller\\SalleController::deleteAction',));
            }
            not_salle_delete:

        }

        elseif (0 === strpos($pathinfo, '/reservation')) {
            // reservation_index
            if ('/reservation' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reservation_index;
                }

                $ret = array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'reservation_index'));
                }

                return $ret;
            }
            not_reservation_index:

            // reservation_new
            if ('/reservation/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reservation_new;
                }

                return array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
            }
            not_reservation_new:

            // reservation_error
            if (preg_match('#^/reservation/(?P<id>[^/]++)/(?P<erreur>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reservation_error;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_error')), array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::erreurAction',));
            }
            not_reservation_error:

            // reservation_show
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reservation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::showAction',));
            }
            not_reservation_show:

            // reservation_edit
            if (preg_match('#^/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reservation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::editAction',));
            }
            not_reservation_edit:

            // reservation_delete
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_reservation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'ReservationBundle\\Controller\\ReservationController::deleteAction',));
            }
            not_reservation_delete:

        }

        // reservation_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ReservationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reservation_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'reservation_homepage'));
            }

            return $ret;
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
