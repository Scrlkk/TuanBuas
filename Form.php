<?php
class Form
{
    var $fields = array();
    var $action;
    var $submit = "";
    var $jumField = 0;

    function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    // Method untuk menampilkan form dengan Tailwind CSS
    function displayForm()
    {
        echo "<form action='" . $this->action . "' method='post'>";
        echo "<table width='100%' class='table-auto'>";
        for ($i = 0; $i < $this->jumField; $i++) {
            echo "<tr><td class='text-right pr-4'>" . $this->fields[$i]['label'] . "</td>";

            // Memilih tipe input berdasarkan 'type'
            switch ($this->fields[$i]['type']) {
                case 'text':
                case 'password':
                    echo "<td><input class='w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500' type='" . $this->fields[$i]['type'] . "' name='" . $this->fields[$i]['name'] . "' required></td>";
                    break;

                case 'textarea':
                    echo "<td><textarea class='w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500' name='" . $this->fields[$i]['name'] . "' rows='5' required></textarea></td>";
                    break;

                case 'select': // Dropdown
                    echo "<td><select class='w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500' name='" . $this->fields[$i]['name'] . "' required>";
                    foreach ($this->fields[$i]['options'] as $option) {
                        echo "<option value='" . $option . "'>" . $option . "</option>";
                    }
                    echo "</select></td>";
                    break;

                case 'radio': // Radio buttons
                    echo "<td>";
                    foreach ($this->fields[$i]['options'] as $option) {
                        echo "<label><input type='radio' name='" . $this->fields[$i]['name'] . "' value='" . $option . "' class='mr-2'>" . $option . "</label><br>";
                    }
                    echo "</td>";
                    break;

                case 'checkbox': // Checkbox
                    echo "<td>";
                    foreach ($this->fields[$i]['options'] as $option) {
                        echo "<label><input type='checkbox' name='" . $this->fields[$i]['name'] . "[]' value='" . $option . "' class='mr-2'>" . $option . "</label><br>";
                    }
                    echo "</td>";
                    break;
            }
            echo "</tr>";
        }
        echo "<tr><td colspan='2' class='text-center'><input type='submit' name='tombol' value='" . $this->submit . "' class='bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer'></td></tr>";
        echo "</table></form>";
    }

    // Method untuk menambahkan input text, password, textarea
    function addField($name, $label, $type = 'text')
    {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->fields[$this->jumField]['type'] = $type;
        $this->jumField++;
    }

    // Method untuk menambahkan radio atau checkbox dengan opsi
    function addOptionsField($name, $label, $type, $options)
    {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->fields[$this->jumField]['type'] = $type;
        $this->fields[$this->jumField]['options'] = $options;
        $this->jumField++;
    }
}
?>