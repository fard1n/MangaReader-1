<?php
    namespace DB\Schema;

    interface ISchema
    {
        public function addField($field);
        public function addConstraint($cons);
        public function hasTable($name);
        public function create($name);
    }

?>