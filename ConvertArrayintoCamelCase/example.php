<?php
include "Format.php";

$classObject 			=	new Format();

$inputData	=	 array("weekly_data" => array(
											array(
											"child_id" => 91,
											"grade_id" =>  5,
											"total_points" => 500,
											"child_name" => "dav"
											  ),
											array(
											"child_id" => 121,
											"grade_id" =>  4,
											"total_points" => 1500,
											"child_name" => "david"
											  ),
											array(
											"child_id" => 921,
											"grade_id" =>  5,
											"total_points" => 5200,
											"child_name" => "stive"
											  ),
											array(
											"child_id" => 931,
											"grade_id" =>  5,
											"total_points" => 1500,
											"child_name" => "davSm"
											  )
											),
					   "today_data" => array(
											array(
											"child_id" => 191,
											"grade_id" =>  5,
											"total_points" => 1500,
											"child_name" => "dav2"
											  ),
											array(
											"child_id" => 1121,
											"grade_id" =>  4,
											"total_points" => 1500,
											"child_name" => "david2"
											  ),
											array(
											"child_id" => 1921,
											"grade_id" =>  5,
											"total_points" => 5200,
											"child_name" => "stive2"
											  ),
											array(
											"child_id" => 1931,
											"grade_id" =>  5,
											"total_points" => 1500,
											"child_name" => "davSm2"
											  )
											),
					   "overAll_data" => array(
											array(
											"child_id" => 291,
											"grade_id" =>  5,
											"total_points" => 500,
											"child_name" => "dav1"
											  ),
											array(
											"child_id" => 2121,
											"grade_id" =>  4,
											"total_points" => 1500,
											"child_name" => "david1"
											  ),
											array(
											"child_id" => 2921,
											"grade_id" =>  5,
											"total_points" => 5200,
											"child_name" => "stive11"
											  ),
											array(
											"child_id" => 2931,
											"grade_id" =>  5,
											"total_points" => 1500,
											"child_name" => "davSm1"
											  )
											),

					   );


$formatedData			=		$classObject->direct($inputData);

echo "<pre>";
print_r($formatedData);