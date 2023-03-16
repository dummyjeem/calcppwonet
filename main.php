<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Operand1=$_POST['Operand1'];
    $Operand2=$_POST['Operand2'];
    $Operator=$_POST['Calculate'];

    /*Validation begins from here.*/
    if($Operand1 == '' || $Operand2 == ''){
        $Error = "The input values are required.";
    }
    elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false || filter_var($Operand2, FILTER_VALIDATE_FLOAT) === false) {
        $Error = "The input value must be a number only.";
    }
    elseif($Operator=="/" && ($Operand1 == 0 || $Operand2 == 0)){
        $Error = "Cannot divide by zero.";
    }
    else{
        /*Calculation begins from here.*/
        if($Operator=="+")
            $Result=$Operand1+$Operand2;
        else if($Operator=="-")
            $Result=$Operand1-$Operand2;
        else if($Operator=="x")
            $Result=$Operand1*$Operand2;
        else if($Operator=="/")
            $Result=$Operand1/$Operand2;
    }
} ?>
