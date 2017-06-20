<?php

interface PersistenceInterface {
    public function Count();
    public function Create($item);
    public function Read($id);
    public function ReadAll();
    public function Update($id, $values);
    public function Delete($id);
}
