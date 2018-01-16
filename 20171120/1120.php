<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
)
?>

<html>
<table>
	<tr>
		<th>Name</th>
		<th>Stock</th>
		<th>Sold</th>
	</tr>
    <?php 
       for($i = 0; $i < 4;$i++){
        echo "<tr>";
        for($j = 0; $j < 3;$j++)echo "<td>".$data[$i][$j]."</td>";
        echo "</tr>";
    }
    ?>
</table><br/>
</html>

<html>
<table>
	<tr>
		<th>Name</th>
		<th>Stock</th>
		<th>Sold</th>
	</tr>
    <?php 
        foreach($data as $key=>$value){
            echo "<tr>";
            foreach($value as $key=>$value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
    ?>
</table><br/>
</html>

<html>
    <table>
		<tr>
			<th>Name</th>
			<th>Stock</th>
			<th>Sold</th>
		</tr>
		<?php
			function tr($x){
                $x = array_map("td",$x);
                $x = join("",$x);
				return "<tr>$x</tr>";
			}
			function td($x){
				return "<td>$x</td>";
            }
            $ipro = array_map("tr",$data);
			$ires = join("",$ipro);
				echo $ires;
			?>
	</table>
</html>