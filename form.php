
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
input{
    margin : 4px 2px;
    text-align: center;
    padding: 16px 32 px;
    width: 20%;
    height : 10 px;
}
span{
    color:red;
    text-align:center
}
.astric{
    color :red;
    text-align:center
}

</style>
<body>
    <h1> Application CMS_Q3 Registeration</h1>
    <form action = "<?php $_PHP_SELF ?>" method = "POST" >
        <lable> <span class="astric">*</span>Name</label>
                    <input type = "text" name = "name" /> 
                        <?php if (isset($_POST["submit"]))
                                    if( empty($_POST["name"]))
                                        echo "<span id='req'>this field is required * </span>" ?>
        <br>
        <lable> <span class="astric">*</span>Email</label>
                    <input type = "email" name = "email" />
                        <?php if (isset($_POST["submit"]))
                            if( empty($_POST["email"]))
                                echo "<span id='req'>this field is required * </span>" ?>
        
        <br> 
        <lable> <span class="astric">*</span>Group#</label> 
            <input type = "number" name = "GropNum" />
            <?php if (isset($_POST["submit"]))
                        if( empty($_POST["GropNum"]))
                            echo "<span id='req'>this field is required * </span>" ?>
        <br>
        Class details: <textarea name = "ClassDet" rows="2" cols="50"> </textarea>
        <br>
        <lable> <span class="astric">*</span>Gender</label>
            <input type = "radio" name = "gender" style="width:10px"  value ="female">female </input>
            <input type = "radio" name = "gender" style="width:10px" value="male"> male </input>
                <?php if (isset($_POST["submit"]))
                        if( empty($_POST["gender"]))
                            echo "<span id='req'>this field is required * </span>" ?>
        <br>
            <lable> <span class="astric">*</span> courses </label> 
                <select multiple name="courses[]" id="courses" >
                    <option value="php">php</option>
                    <option value="java">Java Script</option>
                    <option value="Mysql">MySQL</option>
                    <option value="Html">HTML</option>
                </select>
                <?php if (isset($_POST["submit"]))
                    if( empty($_POST["courses"]))
                        echo "<span id='req'>this field is required * </span>" ?>
                <br>
            <lable> <span class="astric">*</span>Agree</label> 
                <input type="checkbox" name="agree" style="width:10px">
                <?php if (isset($_POST["submit"]))
                    if( empty($_POST["agree"]))
                        echo "<span id='req'>this field is required * </span>" ?>
                <br>
                <input type = "submit"  name="submit"/>
    </form>
</body>
</html>

<?php

 if (isset($_POST["submit"])) {
    echo "<h2>Your Given Vales are as<h2> ";
    echo "Name:". $_POST["name"]."<br>" ; 
    echo "E-mail:". $_POST['email']."<br>";
    echo "Group#: ".$_POST["GropNum"]."<br>";
    echo "ClassDetails: ".$_POST["ClassDet"]."<br>";
    echo
     "gender: ".$_POST["gender"]."<br>";
    echo "Your courses are: ";
    if (isset($_POST["submit"])) {
        if(!empty($_POST['courses'])){
            foreach($_POST["courses"] as $course)
            echo $course." ";
        }
 }
 exit();
} 


/**
*require_once : we can include any php page but if the page is not found a fatal error will occur 
*include_once : if file not found a WARNING WILL appear 
 */

 ?>
