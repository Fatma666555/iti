<?php

//N1
$names=["HTML","JS","css","PHP"];

//N2

echo $names[0];
echo $names[1];
echo $names[2];
echo $names[3];
foreach ($names as $name){
    echo $name."<br>";
}
$count=count($names);
for($i=0;$i<$count;$i++){
    echo $names[$i]."<br/>";
}

//N3 & N4

$info =  [
    "Email" => "fatmamohsen705@gmail.com",
    "Age" => 23,
    "Name" => "Fatma",
    "Collage" => "Iti",
];

echo "<table border='1'>";
foreach ($info as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</table>";

?>

<div class="row">
    <div class="col-4">
        <form class="row g-3" method="post" action="data.php">
            <h3 class="display-3">Please Sign in!</h3>
            <div class="col-12">ef
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="FN" name="fn" required>
            </div>
            <br/>
            <div class="col-12">
                <label  class="form-label">Password</label>
                <input type="text" class="form-control" id="LN" name="ln" required>
            </div>
            <br/>
            <div class="col-12">
                <label  class="form-label">Address</label>
                <textarea class="form-control" name="msg" id="ms" cols="30" rows="10"></textarea>
            </div>
            <br>
            <div class = "col-12">
                <label  class="form-label">Contry</label>
                <select class="form-control" name="select" id="sel">
                    <option value="Cairo">Cairo</option>
                    <option value="Asyut">Alex</option>
                    <option value="Damiette" >Giza</option>
                    <option value="Dmyat" >Dmyat</option>
                    <option value="Elwadi" selected>Elwadi</option>
                </select>
            </div>
            <br>
            <div class="col-12">
                <label  class="form-label">Gender</label>
                <input type="radio" name="F" value="Male"> Male
                <input type="radio" name="F" value="Female" > Female
            </div>
            <br>
            <div class="col-12">
                <label  class="form-label">Skills</label>
                <input type="checkbox" name="skills[]" value="PHP" checked/><label>PHP</label>
                <input type="checkbox" name="skills[]" value="HTML"/><label>HTML</label>
                <input type="checkbox" name="skills[]" value="CSS" /><label>CSS</label>
                <input type="checkbox" name="skills[]" value="N4" /><label>JS</label>
            </div>
            <br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>