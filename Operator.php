<!DOCTYPE>
<html>
<head>
	<title>Operators</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 20px;
		}

		h3 {
			margin-bottom: 20px;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			border: 1px solid #ddd;
		}

		th, td {
			border: 1px solid #ddd;
			padding: 8px;
		}

		th {
			background-color: #f2f2f2;
			font-weight: bold;
		}

		tr:nth-child(even) {
			background-color: #f9f9f9;
		}

		tr:hover {
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>
				<?php
					$br = "<br>";
					$a = 7;
					$b = 28;
				?>

				<h3>Arithmetic Operators</h3>
				<h4>
					<?php
						echo '$a = '.$a;
						echo ' $b = '.$b;
					?>
				</h4>

				<table>
					<tr>
						<th>Operation</th>
						<th>Result</th>
					</tr>
					<tr>
						<td>Addition </td>
						<td><?php echo '$a + $b = '; echo $a + $b; ?></td>
					</tr>
					<tr>
						<td>Subtraction</td>
						<td><?php echo '$b - $a = '; echo $b - $a; ?></td>
					</tr>
					<tr>
						<td>Multiplication</td>
						<td><?php  echo '$a * $b = '; echo $a * $b; ?></td>
					</tr>
					<tr>
						<td>Division</td>
						<td><?php echo '$b / $a = '; echo $b / $a; ?></td>
					</tr>
					<tr>
						<td>Modulos</td>
						<td><?php echo '$b % $a = '; echo $b % $a; ?></td>
					</tr>
					<tr>
						<td>Exponent</td>
						<td><?php echo '$b ** $a = '; echo $b ** $a; ?></td>
					</tr>
				</table>

				<h3>Assignment Operators</h3>
                <h4>
					<?php
                        $a = 3;
						echo '$a = '. $a;
					?>
				</h4>

				<table>
					<tr>
						<th>Operation</th>
						<th>Result</th>
					</tr>
					<tr>
						<td>Addition Assignment</td>
						<td><?php echo '$a=3; $a+10 = $a=$a+10 ='; echo $a += 10; ?></td>
					</tr>
					<tr>
						<td>Subtraction Assignment</td>
						<td><?php  echo 'Current Value Of $a = '. $a; echo$br; echo ' $a=13; $a-=2 = $a=$a-2 = '; echo $a -= 2; ?></td>
					</tr>
					<tr>
						<td>Multiplication Assignment</td>
						<td><?php echo 'Current Value Of $a =  '. $a; echo$br; echo '$a=11; $a*=5 = $a=$a*5 = '; echo $a *= 5; ?></td>
					</tr>
					<tr>
						<td>Division Assignment</td>
						<td><?php echo 'Current Value Of $a = '. $a; echo$br; echo '$a=55; $a/=1 = $a=$a/1 = ';echo $a /= 1; ?></td>
					</tr>
					<tr>
						<td>Modulos Assignment</td>
						<td><?php echo 'Current Value Of $a = '. $a; echo$br; echo '$a=55; $a%=1 = $a=$a%1 = ';echo $a %= 1; ?></td>
					</tr>
				</table>

                <h3>Ternary  Operators</h3>
                <h4>
					<?php
                        $NoOfitems = 70;
                        $rawScore=50;
						echo '$NoOfitems= '. $NoOfitems;
                        echo$br;
                        echo '$rawScore= '. $rawScore;
					?>
				</h4>

				<table>
					<tr>
						<th>Operation</th>
						<th>Result</th>
					</tr>
					<tr>
						<td>Using Define() </td>
						<td><?php define("MULTI", 50);
$equiv = (($rawScore/$NoOfitems)*MULTI) +MULTI;
$result = ($equiv>=75) ? "pass" : "Fail";
echo "Your Score is:". $rawScore;
echo $br;
echo "Exam Result: ".$result;?></td>
					</tr>
				</table>
		
                <h3>Increment and Decrement Operators</h3>
                <h4>
					<?php
                          $a = 1;
                        $rawScore=50;
                        echo '$a = '.$a;
                        echo$br;

					?>
				</h4>

				<table>
					<tr>
						<th>Operation</th>
						<th>Result</th>
					</tr>
					<tr>
						<td> Increment and return value</td>
						<td><?php  echo "Using Increment Operator ".'++$a = '; echo ++$a;?></td>
					</tr>
                    <tr>
						<td> Return value, then increment</td>
						<td><?php   $a = 1;
  echo "Using Increment Operator ".'$a++ = ';
  echo $a++;
  echo $br;
  echo '$a++ will return the value of the variable first before its increments by 1';
  echo $br;
  echo '$a++ = '.$a.' on the next run';?></td>
					</tr>
                    <tr>
						<td> Return value, then increment</td>
						<td><?php   $a = 1;
  echo "Using Increment Operator ".'$a++ = ';
  echo $a++;
  echo $br;
  echo '$a++ will return the value of the variable first before its increments by 1';
  echo $br;
  echo '$a++ = '.$a.' on the next run';?></td>
					</tr>
				</table>
                <h3>Comparison Operators</h3>
				<table>
					<tr>
						<th>Operation</th>
						<th>Result</th>
					</tr>
					<tr>
						<td>Equal</td>
						<td><?php  echo '5 == 5 = ';
  echo 5 == 5;?></td>
					</tr>
                    <tr>
						<td>Identical</td>
						<td><?php  
    echo '"A" === "A" =';
    echo "A" === "A";?></td>
					</tr>
                    <tr>
						<td>Not Equal</td>
						<td><?php   
   echo '3 != 4 = ';
   echo 3 != 4;?></td>
					</tr>
                    <tr>
						<td>Not Identical</td>
						<td><?php   
    echo'3 !== "Three" = ';
    echo 3 !== "three";?></td>
					</tr>
                    <tr>
						<td>Greater than</td>
						<td><?php   
   echo '100 > 99 =';
   echo 100 > 99;?></td>
					</tr>
                    <tr>
						<td>Less than</td>
						<td><?php   
  echo '30 < 40 - ';
  echo 30 < 40;?></td>
					</tr>
                    <tr>
						<td>Greater than or equal to</td>
						<td><?php   
     echo '2 >= 2 = ';
     echo 2 >= 2;?></td>
					</tr>
                    <tr>
						<td>Less than or equal to</td>
						<td><?php   
    echo '6 <= 6 = ';
    echo 6 <= 6;?></td>
					</tr>
                    <tr>
						<td>strict equal</td>
						<td><?php   
       $a=6; $b="4";
       echo "$a===$b = ";
       $a===$b;
       echo '$a is NOT equal to $b because strict equal sign requires that the values and the data type should be the same';
     ?></td>
					</tr>
				</table>

                <h3>Increment and Decrement Operator</h3>
			

				<table>
					<tr>
						<th>Operation</th>
						<th>Result</th>
					</tr>
					<tr>
						<td>Decrement and Return value </td>
						<td><?php 	$a = 10;
	echo 'If $a = '.$a;
	echo $br;
	echo "Using Decrement Operator ".'--$a = ';
	echo --$a;
	echo $br;?></td>
					</tr>
					<tr>
						<td>Return the value, then decrement</td>
						<td><?php $a = 10;
	echo 'If $a = '.$a;
	echo $br;
	echo "Using Decrement Operator ".'$a-- = ';
	echo $a--;
	echo $br;
	echo 'After the next run $a = ';
	echo $a;?></td>
					</tr>
				</table>

                <h3>Logical Operator</h3>
			

				<table>
					<tr>
						<th>Operation</th>
						<th>Result</th>
					</tr>
					<tr>
						<td>AND</td>
						<td><?php 
	echo '1 == 1 AND 2 == 2 = ';
	echo 1 == 1 and 2 == 2;?></td>
					</tr>
					<tr>
						<td>OR</td>
						<td><?php 
	echo '1 == 1 OR 2 == 2 = ';
	echo 1 == 1 or 2 == 2;?></td>
					</tr>
                    <tr>
						<td>XOR</td>
						<td><?php 
		echo '1 == 1 xor 2 == 2 = ';
        echo 1 == 1 xor 2 == 2;?></td>
					</tr>
                    <tr>
						<td>&& (and)</td>
						<td><?php 
		echo '1 == 1 and 2 == 1 = ';
        echo 1 == 1 and 2 == 1;?></td>
					</tr>
                    <tr>
						<td>|| (or)</td>
						<td><?php 
		echo '1 == 1 OR 2 == 1 = ';
        echo 1 == 1 or 2 == 1;?></td>
					</tr>
                    <tr>
						<td>! (not)</td>
						<td><?php 
		echo '!false = ';
        echo !false;?></td>
					</tr>
				</table>

                <h3>String Concatenation</h3>
                <h4>
					<?php
                      $str1 = "Hello";
                      $str2 = "there";
                        echo '$str1 = '.$str1;
                        echo$br;
                        echo '$str2 = '.$str2;

					?>
				</h4>

            <table>
                <tr>
                    <th>Operation</th>
                    <th>Result</th>
                </tr>
                <tr>
                    <td>Concatenation</td>
                    <td><?php 
  echo $str1. " " . $str2;?></td>
                </tr>
                <tr>
                    <td>apend</td>
                    <td><?php 
    echo $str1 .=$str2;?></td>
                </tr>
            </table>
			</td>
		</tr>
	</table>
</body>
</html>
