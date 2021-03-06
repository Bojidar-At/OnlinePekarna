<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        }

        // _twig_error_test
        if (preg_match('#^/(?P<_locale>en)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',  '_locale' => 'en',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/categories')) {
                    // admin_categories
                    if (rtrim($pathinfo, '/') === '/admin/categories') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_categories');
                        }

                        return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\CategoryController::listCategories',  '_route' => 'admin_categories',);
                    }

                    // admin_categories_create
                    if ($pathinfo === '/admin/categories/create') {
                        return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\CategoryController::createCategory',  '_route' => 'admin_categories_create',);
                    }

                    // admin_categories_edit
                    if (0 === strpos($pathinfo, '/admin/categories/edit') && preg_match('#^/admin/categories/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\CategoryController::editCategory',));
                    }

                    // admin_categories_delete
                    if (0 === strpos($pathinfo, '/admin/categories/delete') && preg_match('#^/admin/categories/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\CategoryController::deleteCategory',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/raws')) {
                    // admin_raws
                    if (rtrim($pathinfo, '/') === '/admin/raws') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_raws');
                        }

                        return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\RawController::listRaws',  '_route' => 'admin_raws',);
                    }

                    // admin_raws_create
                    if ($pathinfo === '/admin/raws/create') {
                        return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\RawController::createRaw',  '_route' => 'admin_raws_create',);
                    }

                    // admin_raws_edit
                    if (0 === strpos($pathinfo, '/admin/raws/edit') && preg_match('#^/admin/raws/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_raws_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\RawController::editRaw',));
                    }

                    // admin_raws_delete
                    if (0 === strpos($pathinfo, '/admin/raws/delete') && preg_match('#^/admin/raws/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_raws_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\RawController::deleteCategory',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/user')) {
                    // admin_users
                    if (rtrim($pathinfo, '/') === '/admin/user') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_users');
                        }

                        return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\UserController::indexAction',  '_route' => 'admin_users',);
                    }

                    // admin_user_edit
                    if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\UserController::editUser',));
                    }

                    // admin_user_delete
                    if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\UserController::deleteUser',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/article')) {
                // article_create
                if ($pathinfo === '/article/create') {
                    return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::create',  '_route' => 'article_create',);
                }

                // article_view
                if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::viewArticle',));
                }

                // article_edit
                if (0 === strpos($pathinfo, '/article/edit') && preg_match('#^/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::editArticle',));
                }

                // article_delete
                if (0 === strpos($pathinfo, '/article/delete') && preg_match('#^/article/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::delete',));
                }

            }

        }

        // blog_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_blog_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_index');
            }

            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\HomeController::indexAction',  '_route' => 'blog_index',);
        }
        not_blog_index:

        // category_articles
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_articles')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\HomeController::listArticles',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            // security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        // articles_with_tag
        if (0 === strpos($pathinfo, '/tags') && preg_match('#^/tags/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_with_tag')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\TagController::articles',));
        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        // user_profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::profileAction',  '_route' => 'user_profile',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
