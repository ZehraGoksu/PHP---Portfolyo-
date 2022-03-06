<?php


namespace App\Controllers\Frontend;

use Core\Controller;
use App\Models\Project;
use App\Models\ProjectImages;
use App\Models\GetProjectsView;


class IndexController extends Controller
{


    public function IndexPage()
    {
      return $this->view("frontend/homepage");
    }

    public function AboutPage()
    {
      return $this->view("frontend/about");
    }

    public function PortfolioPage()
    {
      return $this->view("frontend/portfolio");
    }
    

    public function ProductDetailPage()
    {
      
      return $this->view("frontend/portfolio");
    }

   

}


?>