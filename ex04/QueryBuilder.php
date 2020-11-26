<?php

class QueryBuilder
{
    private $select = [];
    private $from;
    private $where;
    // Your code here

    public function select(...$args): self
    {
        $this->select = $args;
        return $this;
    }
    public function from($table, $alias = false): self
    {
        if ($alias){
            $this->from[$alias] = $table;
        } else {
            $this->from[] = $table;
        }
        return $this;
    }
    public function where(...$args): self
    {
        $this->where = $args;
        return $this;
    }
    public function createFrom(): string{
        $from = [];
        foreach ($this->from as $key => $value){
            if (is_string($key)){
                $from[] = "$value as $key";
            } else {
                $from[] = $value;
            }
        }
        return join(', ', $from );
    }