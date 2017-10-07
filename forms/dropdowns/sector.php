<?php
// Array with names
$a[] = "Agriculture ";
$a[] = "Forestryand";
$a[] = "Fishing";
$a[] = "Mining";
$a[] = "Manufacturing";
$a[] = "Electricity";
$a[] = "Gas";
$a[] = "Water";
$a[] = "Waste Services";
$a[] = "Construction";
$a[] = "Wholesale Trade";
$a[] = "Retail Trade";
$a[] = "Accommodation";
$a[] = "Food Services";
$a[] = "Transport";
$a[] = "Postal";
$a[] = "Warehousing";
$a[] = "Information Media and Telecommunications";
$a[] = "Financial and Insurance Services";
$a[] = "Rental, Hiring and Real Estate Services";
$a[] = "Professional, Scientific and Technical Services";
$a[] = "Administrative and Support Services";
$a[] = "Public Administration and Safety";
$a[] = "Education and Training";
$a[] = "Health Care and Social Assistance";
$a[] = "Arts and Recreation Services";
$a[] = "Personal Services";
$a[] = "Thematic Reports";
$a[] = "Life Sciences";
$a[] = "Consumer Goods & Services";
$a[] = "Technology";
$a[] = "Specialist Engineering, Infrastructure & Contractors";
$a[] = "Advisory & Financial Services";
$a[] = "Industrial Machinery, Gas & Chemicals";
$a[] = "Online Retail";
$a[] = "Business Franchises";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>