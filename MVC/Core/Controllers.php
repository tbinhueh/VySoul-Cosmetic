<?php
    Class controller{
// Hàm model - thực hiện chức năng chính của hàm model
        function model($model)
        {
            require_once "./mvc/Models/".$model.".php";

            return new $model;
        }

// Hàm modelAdmin - thực hiện chức năng chính của hàm modelAdmin
        function modelAdmin($model)
        {
            require_once "./mvc/Models/Admin/".$model.".php";

            return new $model;
        }


?>