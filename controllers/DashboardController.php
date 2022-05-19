<?php

class DashboardController
{
    public function getCount($table)
    {
        $classCount = Dashboard::count($table);
        return $classCount;
    }

    public function getPer($genre)
    {
        $number = Dashboard::per($genre);
        return ($number * 100 / Dashboard::count('students'));
    }

    public function findKeyword($table, $keyword)
    {
        if(isset($table) && isset($keyword)){
            return Dashboard::searchKeyword($table, $keyword);
        }

    }
}