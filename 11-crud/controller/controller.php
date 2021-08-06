<?php

namespace controller;

class Controller{
    private $dbEntityRepository;
    public function __construct(){ 
        $this->dbEntityRepository = new \model\EntityRepository;
    }
    public function handleRequest(){
        $op = isset($_GET['op']) ? $_GET['op'] : NULL;

        try{
            if($op == 'add' || $op == 'update')
                $this->save();
            elseif($op == 'select')
                $this->select();
            elseif($op == 'delete')
                $this->delete();
            else
                $this->selectAll();

        }catch(\Exception $e){ echo $e->getMessage();}
        
    }

    public function render($layout, $template, $parameters = array()){
        extract($parameters);
        ob_start();
        
        require "view/$template";
        
        $content = ob_get_clean();
        
        ob_start();
        require "view/$layout";

        return ob_end_flush();
    }

    public function selectAll(){
        // echo "methode selectAll() | affichage de tous les employes !";
        // $r = $this->dbEntityRepository->selectAllEntityRepository();
        // echo '<pre>';
        // print_r($r);
        // echo '</pre>';

        $this->render('layout.php', 'affichage-employes.php', [
            'title'=> 'Toutes les données',
            'data'=>$this->dbEntityRepository->selectAllEntityRepository()
        ]);

    }
}