<?php

require_once "./libs/smarty/Smarty.class.php";

class CoursesView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign( 'base_url', BASE_URL );
    }

    public function showHome()
    {
        $this->smarty->assign( 'title_s', 'LearnIT' );
        $this->smarty->display( 'templates/home.tpl' );
    }

    public function showCourses( $courses )
    {
        $this->smarty->assign( 'title_s', 'Lista de Cursos' );
        $this->smarty->assign( 'courses_s', $courses );
        $this->smarty->display( 'templates/courses.tpl' );
    }

    public function showCourseDetail( $course )
    {
        $this->smarty->assign( 'title_s', $course->title );
        $this->smarty->assign( 'course_s', $course );
        $this->smarty->display( 'templates/courseDetail.tpl' );
    }

    // public function ShowEditTask( $task )
    // {
    //     //TODO hacer con Smarty

    // }

    // public function ShowHomeLocation()
    // {
    //     header( "Location: " . BASE_URL . "home" );
    // }

}