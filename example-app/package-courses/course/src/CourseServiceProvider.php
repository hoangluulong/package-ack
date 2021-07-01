<?php 
namespace Courses\Course;

use Illuminate\Support\ServiceProvider;

class CourseServiceProvider extends ServiceProvider 
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register(){

    }
}