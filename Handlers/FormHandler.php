<?php 
namespace Handlers;
use Core\Enum;

class FormHandler
{
    public $form_id;
   
    public $form_action;
   
    public $fields ;
   
    public function __construct($form_id,$form_action,$fields)
    {
        $this->form_id = $form_id;
        $this->form_action = $form_action;
        $this->fields = $fields;
    }
    
    public function renderForm() {
        echo '<form action="' . $this->form_action . '" method="post" id="' . $this->form_id . '" >' ;
        foreach($this->fields as $field) {
            $field->render();
        }
        echo '<div class="box-footer">';
        echo '<input class="btn btn-primary" type="submit" name="' . $this->form_id . '" value="submit" />';
        echo '</div>';
        echo '</form>';
    }
}
class FieldType extends Enum {

    const __default = self::Number;
    /**
     * Number type
     */
    const Number = 0;
    /**
     * String text
     */
    const Text = 1;
    /**
     * String encoded in base 64
     */
    const TextBase64 = 2;
    /**
     * Email string
     */
    const Email = 3;
    /**
     * Password string
     */
    const Password = 4;
    /**
     * Long text encoded in base64
     */
    const HtmlContent = 5;
    /**
     * A relation field (int by default) must be linked via EntityBinding class
     */
    const EntityList = 6;

    /**
     * Enumeration field
     */
    const Enumeration = 7;

    const DateTime = 8;

    const Date = 9;

    const Boolean = 10;

    const File = 11;

    const Time = 12;

    const Label = 13;

    const StringEnumeration = 14;
}

class FormField {

    public $Name;
    public $default_value;
    public $DisplayName;
    public $FieldType;
    public $AdditionalAttributes;
    public $StyleClass;
    public $AccessPrivileges;
    public $Layer;
    public $BoundEntity;

    public function __construct($name, $type, $Display, $default, $privileges = 0, $be = null,$layer = 0, $attributes = null, $class_name = null)
    {
        $this->Name = $name;
        $this->default_value = $default;
        $this->FieldType = $type;
        $this->DisplayName = $Display;
        $this->AdditionalAttributes = $attributes;
        $this->StyleClass = $class_name != null ? $class_name : "form-control";
        $this->AccessPrivileges = $privileges;
        $this->Layer = $layer;
        $this->BoundEntity=$be;
    }
    
    public function renderField(){
        if($this->FieldType == FieldType::Text)
            echo   "<input type=\"text\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\" value=\"".$this->default_value."\" />";
        else if($this->FieldType == FieldType::Password)
            echo   "<input type=\"password\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\" />";
        else if($this->FieldType == FieldType::Number)
            echo   "<input type=\"number\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  value=\"".$this->default_value."\" />";
        else if($this->FieldType == FieldType::Boolean)
            echo   "<input type=\"checkbox\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass." flat-red\" id=\"".$this->Name."\"  ".($this->default_value == true ?"checked":"")."  />";
        else if($this->FieldType == FieldType::DateTime)
            echo   "<input type=\"datetime-local\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  value=\"".$this->default_value."\"  />";
        else if($this->FieldType == FieldType::Date)
            echo   "<input type=\"date\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  value=\"".$this->default_value."\" />";
        else if($this->FieldType == FieldType::File)
            echo   "<input type=\"file\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  />";
        else if($this->FieldType == FieldType::Time)
            echo   "<input type=\"time\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  value=\"".$this->default_value."\" />";
        else if($this->FieldType == FieldType::Email)
            echo   "<input type=\"email\" name=\"".$this->Name."\"  ".$this->AdditionalAttributes."  class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\" value=\"".$this->default_value."\" />";
        else if($this->FieldType == FieldType::EntityList && $this->BoundEntity != null)
        {
            echo "<select id=\"".$this->Name."\" name=\"".$this->Name."\"  ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\">";
            $entity_key = $this->BoundEntity->Key;
            $entity_name = $this->BoundEntity->Name;
            $entities = $this->BoundEntity->getAll();

            foreach ($entities as $el) {
                echo "<option value=\"".$el->$entity_key."\" ".($el->$entity_key == $this->default_value ? "selected " : " ").">".$el->$entity_name."</option>";
            }

            echo  "</select>";
        }
        else if($this->FieldType == FieldType::Enumeration && $this->BoundEntity != null)
        {

            echo "<select id=\"".$this->Name."\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\">";

            foreach ($this->BoundEntity as $el => $value) {
                echo "<option value=\"".$el."\" ".($el == $this->default_value ? "selected " : " ").">".$value."</option>";
            }

            echo  "</select>";
        }
        else if($this->FieldType == FieldType::StringEnumeration && $this->BoundEntity != null)
        {

            echo "<select id=\"".$this->Name."\" name=\"".$this->Name."\" ".$this->AdditionalAttributes." class=\"".$this->StyleClass."\">";

            foreach ($this->BoundEntity as $el => $value) {
                echo "<option value=\"".$value."\" ".($value == $this->default_value ? "selected " : " ").">".$value."</option>";
            }

            echo  "</select>";
        }
        else if($this->FieldType == FieldType::HtmlContent)
            echo " <textarea   id=\"".$this->Name."\"  ".$this->AdditionalAttributes." name=\"".$this->Name."\" class=\"".$this->StyleClass." textarea\" >".$this->default_value."</textarea>";
        else if($this->FieldType == FieldType::Label)
            echo "<label ".$this->AdditionalAttributes." for=\"".$this->Name."\">".$this->DisplayName.": ".$this->default_value."</label>";
    }
    public function render($value = null, $form_errors = null){
        echo "   <div class=\"form-group".(isset($form_errors[$this->Name]) ?" has-error" : "")."\" >";
        if($this->FieldType != FieldType::Label)
            echo "<label for=\"".$this->Name."\">".(isset($form_errors[$this->Name]) ? "<i class=\"fa fa-times-circle-o\"></i>  " : "").$this->DisplayName."</label>";
        // render element
        $this->renderField($value);

        if(isset($form_errors[$this->Name]))
        {
            echo "<span class=\"help-block\">".$form_errors[$this->Name]."</span>";
        }
        echo "</div>";
    }
}
?>
