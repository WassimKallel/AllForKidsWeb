<?php 
namespace Handlers;

use Core\Enum;

class FormHandler
{
    public $form_id;
   
    public $form_action;
   
    public $fields ;
   
    public function __construct($form_id, $form_action, $fields)
    {
        $this->form_id = $form_id;
        $this->form_action = $form_action;
        $this->fields = $fields;
    }
    
    public function renderForm()
    {
        echo '<form enctype="multipart/form-data" action="' . $this->form_action . '" method="post" id="' . $this->form_id . '" >' ;
        foreach ($this->fields as $field) {
            $field->render();
        }
        echo '<div class="box-footer">';
        echo '<input class="btn btn-primary" type="submit" name="' . $this->form_id . '" value="submit" />';
        echo '</div>';
        echo '</form>';
    }
}
class FieldType extends Enum
{
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

    const Image = 15;
}
/**
 *
 *  new FormField(
 *  $name = "input",
 *  $type = FieldType::Text,
 *  $label = "Username",
 *  $default_value = $_GET["action"] == "create" ? "" : $user->username,
 *  $required = true),
 */
class FormField
{
    public $Name;
    public $default_value;
    public $DisplayName;
    public $FieldType;
    public $required;
    public $StyleClass;
    public $Layer;

    public function __construct($name, $type, $label, $default_value, $required = false, $enumeration = [], $class_name = null)
    {
        $this->Name = $name;
        $this->default_value = $default_value ;
        $this->FieldType = $type ;
        $this->DisplayName = $label ;
        $this->required = $required ? "required" : "" ;
        $this->StyleClass = $class_name != null ? $class_name : "form-control";
        $this->StringEnumeration = $enumeration ;
    }
    
    public function renderField()
    {
        if ($this->FieldType == FieldType::Text) {
            echo   "<input  type=\"text\" name=\"".$this->Name."\"".   $this->required  ." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\" value=\"".$this->default_value."\" />";
        } elseif ($this->FieldType == FieldType::Password) {
            echo   "<input  type=\"password\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\" />";
        } elseif ($this->FieldType == FieldType::Number) {
            echo   "<input  type=\"number\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  value=\"".$this->default_value."\" />";
        } elseif ($this->FieldType == FieldType::Boolean) {
            echo   "<input  type=\"checkbox\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass." flat-red\" id=\"".$this->Name."\"  ".($this->default_value == true ?"checked":"")."  />";
        } elseif ($this->FieldType == FieldType::DateTime) {
            echo   "<input  type=\"datetime-local\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  value=\"".$this->default_value."\"  />";
        } elseif ($this->FieldType == FieldType::Date) {
            echo   "<input  type=\"date\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  value=\"".$this->default_value."\" />";
        } elseif ($this->FieldType == FieldType::File) {
            echo   "<input  type=\"file\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  />";
        } elseif ($this->FieldType == FieldType::Image) {
            echo   "<input  type=\"file\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  />";
            echo  $this->default_value != "" ? '<img width=150  src="'. $GLOBALS["AllForKids"]["data_folder"] . $this->default_value . '" />' : "";
        } elseif ($this->FieldType == FieldType::Time) {
            echo   "<input  type=\"time\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\"  value=\"".$this->default_value."\" />";
        } elseif ($this->FieldType == FieldType::Email) {
            echo   "<input  type=\"email\" name=\"".$this->Name."\"  ".$this->required."  class=\"".$this->StyleClass."\" id=\"".$this->Name."\" placeholder=\"Enter ".$this->DisplayName."\" value=\"".$this->default_value."\" />";
        } elseif ($this->FieldType == FieldType::StringEnumeration && !empty($this->StringEnumeration)) {
            echo "<select id=\"".$this->Name."\" name=\"".$this->Name."\" ".$this->required." class=\"".$this->StyleClass."\">";

            foreach ($this->StringEnumeration as $el => $value) {
                echo "<option value=\"".$value."\" ".($value == $this->default_value ? "selected " : " ").">".$el."</option>";
            }

            echo  "</select>";
        } elseif ($this->FieldType == FieldType::HtmlContent) {
            echo " <textarea   id=\"".$this->Name."\"  ".$this->required." name=\"".$this->Name."\" class=\"".$this->StyleClass." textarea\" >".$this->default_value."</textarea>";
        } elseif ($this->FieldType == FieldType::Label) {
            echo "<label ".$this->required." for=\"".$this->Name."\">".$this->DisplayName.": ".$this->default_value."</label>";
        }
    }
    public function render($value = null, $form_errors = null)
    {
        echo "   <div class=\"form-group".(isset($form_errors[$this->Name]) ?" has-error" : "")."\" >";
        if ($this->FieldType != FieldType::Label) {
            echo "<label for=\"".$this->Name."\">".(isset($form_errors[$this->Name]) ? "<i class=\"fa fa-times-circle-o\"></i>  " : "").$this->DisplayName."</label>";
        }
        // render element
        $this->renderField($value);

        if (isset($form_errors[$this->Name])) {
            echo "<span class=\"help-block\">".$form_errors[$this->Name]."</span>";
        }
        echo "</div>";
    }
}
