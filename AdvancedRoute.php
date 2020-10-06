<?php
require_once 'Controller/PublicController.php';
require_once 'Controller/AdminController.php';
require_once 'Controller/RedirectController.php';
require_once 'RouterClass.php';

// CONSTANTES PARA RUTEO
define( "BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . 
                    dirname( $_SERVER["PHP_SELF"] ) . '/' );

$r = new Router();

// TODO: Personalizar para nuestro TPE
// rutas

// learnit.com/courses/
// http: //localhost/web-2/TPE-WEB-2-%20Repo/courses/
$r->addRoute( "courses", "GET", "PublicController", "courses" );

// learnit.com/courses/:ID
// http: //localhost/web-2/TPE-WEB-2-%20Repo/courses/2

$r->addRoute( "courses/:ID", "GET", "PublicController", "courseDetail" );



// learnit.com/admin
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin
$r->addRoute( "admin", "GET", "AdminController", "admin" );

// learnit.com/admin/courses/add
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin/courses/add
$r->addRoute( "admin/courses/add", "GET", "AdminController", "prepareAddCourse" );
$r->addRoute( "admin/courses/add", "POST", "AdminController", "addCourse" );

$r->addRoute( "admin/courses/","GET","RedirectController","goAdmin");
$r->addRoute( "admin/subjects/","GET","RedirectController","goAdmin");

// TODO learnit.com/admin/admin/courses/edit-delete 
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin/courses/edit-delete
$r->addRoute("admin/courses/edit-delete", "GET", "AdminController", "editDeleteCourses");

// learnit.com/admin/courses/delete/:ID
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin/courses/delete/:ID
$r->addRoute("admin/courses/delete/:ID", "GET", "AdminController", "deleteCourse");
// learnit.com/admin/courses/edit/:ID
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin/courses/edit/:ID
$r->addRoute("admin/courses/edit/:ID", "GET", "AdminController", "editCourse");
$r->addRoute("admin/courses/edit/:ID", "POST", "AdminController", "updateCourse");



// TODO learnit.com/admin/admin/subjects/add 
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin/subjects/add
$r->addRoute("admin/subjects/add", "GET", "AdminController", "prepareAddSubject" );
$r->addRoute("admin/subjects/add", "POST", "AdminController", "addSubject" );

// TODO learnit.com/admin/admin/subjects/edit-delete 
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin/subjects/edit-delete
$r->addRoute("admin/subjects/edit-delete", "GET", "AdminController", "editDeleteSubjects");

// learnit.com/admin/subjects/delete/:ID
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin/subjects/delete/:ID
$r->addRoute("admin/subjects/delete/:ID", "GET", "AdminController", "TODO");
// learnit.com/admin/subjects/edit/:ID
// http: //localhost/web-2/TPE-WEB-2-%20Repo/admin/subjects/edit/:ID
$r->addRoute("admin/subjects/edit/:ID", "GET", "AdminController", "TODO");


// learnit.com/
//http: //localhost/web-2/TPE-WEB-2-%20Repo/
// $r->addRoute("", "GET","RedirectController", "blank" );


$r->addRoute("login", "GET","PublicController", "login" );
$r->addRoute("logout", "GET","PublicController", "logout" );

// Comentar ésta y descomentar la siguiente para generar hash manualmente
$r->addRoute("sign-in-check", "POST","PublicController", "signInCheck" );
// $r->addRoute("sign-in-check", "POST","PublicController", "getPassHash" );


// IMPORTANTE:
// Ésta debe estar a lo último para evitar pisar a las anteriores
$r->addRoute("", "GET","PublicController", "subjects" );


// TODO Usar para 404
$r->setDefaultRoute( "PublicController", "notFound" );

// Debug a mano de ruteo
//echo "<pre>r->route( \"" . $_GET['action'] . "\", \"" .
//     $_SERVER['REQUEST_METHOD'] . "\" )</pre>";
//run
$r->route( $_GET['action'], $_SERVER['REQUEST_METHOD'] );