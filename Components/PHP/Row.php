<?php

namespace Component {

  class Row extends \Core\Component {

    private string $title = "";
    private array $defaultValues = [];

    public function __construct(string $tableName) {
      parent::__construct($this);

      $this->tableName = $tableName;
    }

    public function title(string $title) {
      $this->title = $title;
      return $this;
    }

    public function defaultValues(array $defaultValues = []) {
      $this->defaultValues = $defaultValues;
      return $this;
    }

    public function show() {
      return "
        <dia-row :params='{
          tableName: \"{$this->tableName}\",
          conditions: ".json_encode($this->conditions).",
          data: ".json_encode($this->data).",
          title: \"{$this->title}\",
          defaultValues: ".json_encode($this->defaultValues)."
        }'></dia-row>
      ";
    }

  }

}

?>