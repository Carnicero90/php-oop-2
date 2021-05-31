<?php 
class MainClass {
    protected $reserved = ['reserved'];
    public function readProp($prop) {
        if (!in_array($prop, $this->reserved)) {
            return $this->$prop;
        }
    }
    public function updateProp($prop, $value) {
        if (!in_array($prop, $this->reserved)) {
            return $this->$prop = $value;
        }
    }
    public function enumerateProps() {
        $arr = [];
        foreach($this as $prop=>$value) {
            if (!in_array($prop, $this->reserved)) {
                $arr[$prop] = $value;
            }
        }
        return $arr;
    }
}
?>
<?php ?>